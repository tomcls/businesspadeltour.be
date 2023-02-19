<?php

namespace App\Repositories;

use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticleRepository extends Repository
{

    public $url = 'https://blog.vacancesweb.be';
    public $uri = "/wp-json/vw/v2/";
    public $method = "list_articles";

    /**
     * Array filters
     * page
     * post_per_page
     * language_id
     */
    public function list(array $filters)
    {
        $response = $this->client->request('GET', $this->url . $this->uri . $this->method, [
            'query' => $filters
        ]);
        return json_decode($response->getBody(), true);
    }
    /**
     * Array filters
     * page
     * post_per_page
     * language_id
     */
    public function find(array $filters)
    {

        $this->method = 'meta_query';
        $response = $this->client->request('GET', $this->url . $this->uri . $this->method, [
            'query' => $filters
        ]);
        return json_decode($response->getBody(), true);
    }
}
