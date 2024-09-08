<?php
namespace App\Helpers;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;


class Helpers{
    /**
     * @param int $statusCode
     * @param string $message
     * @param  $data 
     */
    public static function sendJsonResponse(int $statusCode, string $message,  $data):JsonResponse
    {
        return response()->json([
            'status'=>$statusCode,
            'message'=>$message,
            'data'=>['data'=>$data]
        ]);
    }

    /**
     * @param int $statusCode
     * @param string $message
     */
    public function sendSuccessResponse(int $statusCode, string $message):Response
    {
        return response([$message], $statusCode);
    }
    /**
     * @param int $statusCode
     * @param string $message
     * @param array $error
     */
    public static function sendFailureResponse(int $statusCode, string $message, $errors):JsonResponse
    {
        return response()->json([
            'status'=>$statusCode,
            'message'=>$message,
            'errors'=>[
                $errors
            ]
        ]);
    }
}