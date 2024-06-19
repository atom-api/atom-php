<?php

require(dirname(__FILE__) . '/client.php');

class AtomApi {

    private $client;
    private $env;

    public function __construct($authToken, $userId, $env = "prod") {
        if (empty($authToken) || empty($userId)) {
            throw new Exception("Atom: auth_token and user_id must be provided");
        }
        $this->client = new Atom\Client($authToken, $userId, $env);
    }

    public function getDomains($data) {
        return $this->client->send("/marketplace/domains", $data);
    }

}
