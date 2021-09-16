<?php

class CBookAPI {
    /**
     * API Key used for authentication.
     *
     * @var string
     */
    private $_apiClientKey;

    /**
     * Secret Key used when authenticating.
     *
     * @var string
     */
    private $_apiSecretKey;

    /**
     * String returned when we aren't authenticated.
     *
     * @var string
     */
    private $_unauthorisedString = '{ "status": "Unauthorised" }';

    /**
     * Constructor for CBookAPI class.
     *
     * @param string $apiClientKey API Key used for authentication.
     * @param string $apiClientSecret Secret Key used when authenticating.
     */
    public function __construct(string $apiClientKey, string $apiClientSecret) {
        $this->_apiClientKey = $apiClientKey;
        $this->_apiClientSecret = $apiClientSecret;
    }

    /**
     * Get a JSON String of CBook Friends
     *
     * @return string JSON Data from mocked API.
     */
    public function getFriends() {
        if ($this->_apiClientKey !== 'client_id') {
            return $this->_unauthorisedString;
        }

        if ($this->_apiSecretKey !== 'client_secret') {
            return $this->_unauthorisedString;
        }

        return json_decode(file_get_contents("data/cbook.json"));
    }
}
