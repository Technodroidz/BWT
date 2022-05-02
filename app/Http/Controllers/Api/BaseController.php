<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public static function sendResponse($data, $message)
    {
        $response = [
            'success' => true,
            'code'    => 200,
            'data'    => $data,
            'message' => $message,
        ]; 

        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public static function sendError($code = 404, $data = array(), $error, $errorMessages = [])
    {
        $response = [
            'success'  => false,
            'code'     => $code,
            'data'     => $data,
            'message'  => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }

}
