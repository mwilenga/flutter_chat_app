<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public static function successMsg($data, string $message = null, int $code = 200)
	{
		return response()->json([
			'status' => 'Success',
			'message' => $message,
			'data' => $data
		], $code);
	}

    public static function errorMsg(string $message = null, int $code, $data = null)
	{
		return response()->json([
			'status' => 'Error',
			'message' => $message,
			'data' => $data
		], $code);
	}
}
