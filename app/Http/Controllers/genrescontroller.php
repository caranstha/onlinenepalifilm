<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gmodel;
use App\Http\Requests;

class genrescontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
     public function getGenres()
{

   $obj=gmodel::all();
	return view('admin/genres/showgenres',array('result'=>$obj));
}
public function getAddgenres()
{
	return view('admin/genres/addgenres');
}
public function postAddgenres(Request $request)

{       
	    $obj= new gmodel();
    	$obj->genres=$request->get('genres');
        $obj->status=$request->get('status');
    	$res=$obj->save();

    	if($res)
    	{
    		return redirect('genres/genres');
    	}
    	else
    	{
    		echo "Failed";
    	}
}

public function getEditgenres($id)
{  
    //$obj=DB::select("select * from gmodels where id=$id");

$obj=gmodel::find($id);
    //dd($obj);
    return view('admin/genres/editgenres',array('result'=>$obj));
}

public function postEditgenres(Request $request,$id)
{
    $obj=gmodel::find($id);
    //dd($id);
    $obj->genres=$request->get('genres');
        $obj->status=$request->get('status');
        $res=$obj->save();

        if($res)
        {
            return redirect('genres/genres');
        }
        else
        {
            echo "Failed";
        }   


}
public function getDeletegenres($id)
{
 		$obj=gmodel::find($id);
        //dd($obj);
        $obj->delete();
        return redirect('genres/genres');   
}

public function getChangestatusgenres(Request $request,$id)
{
    $obj= gmodel::find($id);
    if($obj->status=='publish')
    {
        $obj->status='draft';

    }
    else
    {
        $obj->status='publish';

    }
    $obj->save();
  return redirect('genres/genres'); 


}
}
