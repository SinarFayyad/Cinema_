<?php

class ResponseService {

    public function response($message, $status = 200) {
        $response = [];
        $response["status"] = $status;
        $response["message"] = $message;
        return json_encode($response);
    }

}