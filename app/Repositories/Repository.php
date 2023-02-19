<?php 
namespace App\Repositories;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Repository
{
    public $client;

    public $token;

    public function __construct(){
        // $this->client = new Client([
        //     'curl' => [
        //         CURLOPT_TCP_KEEPALIVE => 10,
        //         CURLOPT_TCP_KEEPIDLE => 10
        //     ]
        // ]);
        $this->client = new Client();
    }
}
