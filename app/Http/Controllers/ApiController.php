<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class ApiController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function jsonSuccessResponse($message='', $data=[]) {
        return response()->json([
            'status' => 'success',
            'code' => '200',
            'message' => $message,
            'data' => $data,
        ], 200);
    }

    function jsonErrorResponse($message='', $data=[]) {
        return response()->json([
            'status' => 'error',
            'code' => '400',
            'message' => $message,
            'data' => $data,
        ], 200);
    }

}
