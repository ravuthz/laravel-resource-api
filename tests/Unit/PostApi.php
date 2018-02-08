<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class PostApi extends TestCase
{
    protected $apiEndPoint = 'api/posts';

    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate:refresh');
        Artisan::call('db:seed');
    }

    public function testFetchesAllPosts()
    {
        $response = $this->json('GET', $this->apiEndPoint);
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                [
                    'slug',
                    'title',
                    'content'
                ]
            ],
            "links",
            "meta"
        ]);
    }

    public function testCreatesPost()
    {
        $data = [
            'slug' => 'test-post-api-1',
            'title' => 'Test Post API 1',
            'content' => 'Test Post API with Laravel TestCase',
        ];

        $response = $this->json('POST', $this->apiEndPoint, $data);
        $response->assertStatus(201);
        $response->assertJsonStructure([
            'data' => [
                'slug',
                'title',
                'content'
            ]
        ]);
    }

    public function testUpdatesPost()
    {
        $data = [
            'slug' => 'test-post-api-1-update',
            'title' => 'Test Post API 1 Update',
            'content' => 'Test Post API with Laravel TestCase',
        ];

        $response = $this->json('PUT', $this->apiEndPoint . '/1', $data);
        $response->assertStatus(200);
    }

    public function testDeletesPost()
    {
        $response = $this->json('DELETE', $this->apiEndPoint . '/1');
        $response->assertStatus(200);
    }

}
