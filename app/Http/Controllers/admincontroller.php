<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Http\Requests;
use App\User;
class admincontroller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function getIndex()
    {
    	return view('admin/master');
    }

    public function getShowadmin()
    {
    	$obj=user::all();
    	return view('admin/log/showadmin',array('users'=>$obj));

    }

    public function getAddusers()
    {
    	return view('admin/log/signup');

    }

    public function postAddusers(Request $request)
    {

    	$newuser=new user();
    	$newuser->name=$request->get('name');
    	$newuser->email=$request->get('email');
    	$newuser->password=Hash::make($request->get('pasword'));
    	$newuser->save();

    	return redirect('admin/showadmin');
    }


    public function getDeleteusers($id)
    {
		$obj=user::find($id);
        
        $obj->delete();
        
        return redirect('admin/showadmin');

    }
}
