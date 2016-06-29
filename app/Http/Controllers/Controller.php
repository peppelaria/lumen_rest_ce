<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct() {
        $this->middleware('oauth');
    }

    public function createSuccessResponse($data, $code) {
        return response()->json(['data' => $data], $code);
       /* if (strpos($response,'"\"') !== false) {
            return str_replace("}\"","}",(str_replace("\"{","{",stripslashes($response->getContent()))));
        }
        return $response;*/
    }

    public function createErrorResponse($message, $code) {
        return response()->json(['message' => $message, 'code' => $code], $code);
    }
}
