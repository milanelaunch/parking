<?php

namespace App\Http\Controllers\Api;

use App\Classes\CustomEncrypt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
	public function sendResponse($result = [])
	{
		return response()->json($result, 200);
	}

	public function sendError($error, $code = 404, $errorMessages = [])
	{
		$response = [
			'message' => $error,
		];

		if (!empty($errorMessages)) {
			$response['data'] = $errorMessages;
		}

		return response()->json($response, $code);
	}

	public function sendValidationError($field, $error, $code = 422, $errorMessages = [])
	{
		$response = [
			'errors' => [$field => $error],
		];

		if (!empty($errorMessages)) {
			$response['data'] = $errorMessages;
		}
		return response()->json($response, $code);
	}

	public function sendTokenError($message)
	{
		$response = [
			'message' => $message
		];
		return response()->json($response, 422);
	}
}
