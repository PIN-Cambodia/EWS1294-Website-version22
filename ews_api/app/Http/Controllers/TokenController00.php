<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class TokenController extends Controller
{

	public function index()
	{
		return view('usertoken');
	}

    public function generateToken(Request $request,$id){
    	$user=User::find($id);
    	$api_token='test';
    	$user->update([
    			'api_token'=>$api_token
    	]);
    }


}
