<?php

class CritterAPI {
    /**
     * API Key used for authentication.
     *
     * @var string
     */
    private $_apiKey;

    /**
     * String returned when we aren't authenticated.
     *
     * @var string
     */
    private $_unauthorisedString = '{ "status": "Unauthorised" }';

    /**
     * Constructor for CritterAPI Class.
     *
     * @param string $apiKey API Key used for authentication.
     */
    public function __construct($apiKey) {
        $this->_apiKey = $apiKey;
    }

    /**
     * Get a JSON String of Critter Friends
     *
     * @return string JSON Data from mocked API.
     */
    public function getFollowers() {
        if ($this->_apiKey !== 'api-key') {
            return $this->_unauthorisedString;
        }

        return json_decode(file_get_contents("data/critter.json"));
    }
}
