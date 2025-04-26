<?php

namespace App\Traits;

/**
 * ApiResponse Trait
 *
 * Provides helper methods for returning consistent success and error responses in API controllers.
 * This trait can be used by any controller to standardize API response format.
 */
trait ApiResponse
{
    /**
     * Return a success response.
     *
     * @param $data
     * @param string $message The success message to return.
     * @param int $statusCode The HTTP status code (default is 200).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function success($data, $message = 'Done', $statusCode = 200)
    {
        return response()->json([
            'response' => [
                'data' => $data,
                'status' => true,
                'code' => $statusCode,
                'message' =>  $message
            ]
        ]);
    }

    /**
     * Return an error response.
     *
     * @param string $message The error message to return.
     * @param int $statusCode The HTTP status code (default is 500).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function error($message, $statusCode = 500)
    {
        return response()->json([
            'response' => [
                'status' => false,
                'code' => $statusCode,
                'message' =>  $message
            ],
        ], $statusCode);
    }
}
