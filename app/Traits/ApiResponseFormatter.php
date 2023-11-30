<?php

namespace app\Traits;

// UNTUK FORMATTING REPONSE
trait ApiResponseFormatter
{
    public function apiResponse($code = 200, $message = "success", $data =[])
    {
        return json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data
        ]);
    }
}
