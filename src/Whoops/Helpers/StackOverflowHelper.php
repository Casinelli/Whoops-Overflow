<?php

namespace Whoops\Helpers;

class StackOverflowHelper implements Helper {

    public function getHelp($errorMessage)
    {
        $encodedMessage = urlencode($errorMessage);

        $url = "http://api.stackexchange.com/2.2/search?order=desc&sort=activity&intitle=$encodedMessage&site=stackoverflow";

        $response = $this->sendRequest($url);

        $questions = json_decode($response, true);

        return $questions["items"];
    }

    protected function sendRequest($url)
    {
        //  Initiate curl
        $ch = curl_init();
        // Disable SSL verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL,$url);
        // Execute
        $result=curl_exec($ch);
        // Closing
        curl_close($ch);

        return $result;
    }

}
