<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class logincontroller extends Controller
{
   
    	public function getLogin()
	{
		return view('admin/log/login');
	}

	public function postLogin(Request $request)
    {             
    
        
        $email=  $request->get('email');
        $password= $request->get('password');

       if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect('admin/index');
		}
        else
        {
            return redirect('login/login');  
        }
	}

	public function getLogout()
	{

		Auth::logout();
		return redirect('login/login');
	}

}
