<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
	{
		//$str = route('getUser', [222]);
		
		//return $str;
		
		return redirect()->route('getUser', [222]);
	}

    public function getUsers()
	{
		return [
			'user' => [
				'name' => 'Dmitry', 
				'surname' => 'Yuriev', 
			],
			'user2' => [
				'name' => 'Tan', 
				'surname' => 'Ka', 
			],
		];
	}

//    public function user($id = null)
//	{
//		return 'User ' . $id;
//	}
	
    public function user($id, $name)
	{
		return [$id, $name];
	}
}
