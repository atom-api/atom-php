<?php

namespace AtomApi;

class Client {

    private $authToken;
    private $userId;
    private $endpoint;

    public function __construct($authToken, $userId, $env) {
        $this->authToken = $authToken;
        $this->userId = $userId;
        $this->endpoint = $env == "prod" ? "https://www.atom.com/api" : "https://dev-api.atom.com/api";
    }

    public function send($url, $data) {
        $data['api_token'] = $this->authToken;
        $data['user_id'] = $this->userId;

        $headers  = array('Accept: application/json');

        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $this->endpoint . $url . '?' . http_build_query($data));
        curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($handle);
        curl_close($handle);

        return $result;
    }

}

?>