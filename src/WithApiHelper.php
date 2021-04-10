<?php

namespace Stephenjude\ApiTestHelper;

use Illuminate\Support\Arr;

trait WithApiHelper
{
    public $response;

    /**
     * @param Array|Collection|mixed $actualData
     * @return void
     */
    public function assertApiResponseCollection($actualData)
    {
        $actualData = collect($actualData)->toArray();

        $this->assertApiSuccess();

        $this->response->assertJsonStructure(['data' => [['id']]]);

        $this->response->assertJsonFragment(Arr::first($actualData));
    }

    /**
     * @param Array|Object|mixed $actualData
     * @return void
     */
    public function assertApiResponse($actualData)
    {
        $actualData = collect($actualData)->toArray();

        $this->assertApiSuccess();

        $response = $this->decodeApiResponse();

        $this->assertNotEmpty($response['data']['id']);

        $this->response->assertJsonFragment($actualData);
    }

    /**
     * @return void
     */
    public function assertApiSuccess()
    {
        $this->response->assertJson(['success' => true]);
    }

    /**
     * @return void
     */
    public function logApiData()
    {
        logger($this->decodeApiResponse());
    }

    /**
     * @return void
     */
    public function dumpApiData()
    {
        dd($this->decodeApiResponse());
    }

    /**
     * @return mixed
     */
    public function decodeApiResponse()
    {
        return json_decode($this->response->json(), true);
    }
}
