<?php

class API {
    /**
     * String returned when we aren't authenticated.
     *
     * @var string
     */
    private $_unauthorisedString = '{ "status": "Unauthorised" }';

    /**
     * Get a JSON String of CBook Friends
     *
     * @param string $api_client_id     Client ID for authenticating with the API.
     * @param string $api_client_secret Client Secret for authenticating with API.
     *
     * @return string JSON Data from mocked API.
     */
    public function getCbookFriends(string $api_client_id, string $api_client_secret) {
        if ($api_client_id !== 'client_id') {
            return $this->_unauthorisedString;
        }

        if ($api_client_secret !== 'client_secret') {
            return $this->_unauthorisedString;
        }

        return file_get_contents("data/cbook.json");
    }

    /**
     * Get a JSON String of CBook Friends
     *
     * @param string $api_key Client ID for authenticating with the API.
     *
     * @return string JSON Data from mocked API.
     */
    public function getCritterFriends(string $api_key) {
        if ($api_key !== 'api-key') {
            return $this->_unauthorisedString;
        }

        return file_get_contents("data/cbook.json");
    }
}
