<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cmodel;

class categorycontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
       public function getCategory()
{

   $obj=cmodel::all();
	return view('admin/category/show_category',array('result'=>$obj));
}
public function getAddcategory()
{
	return view('admin/category/add_category');
}
public function postAddcategory(Request $request)

{       
	    $obj= new cmodel();
    	$obj->category=$request->get('category');
        $obj->status=$request->get('status');
    	$res=$obj->save();

    	if($res)
    	{
    		return redirect('category/category');
    	}
    	else
    	{
    		echo "Failed";
    	}
}

public function getEditcategory($id)
{  
    //$obj=DB::select("select * from cmodels where id=$id");

$obj=cmodel::find($id);
    //dd($obj);
    return view('admin/category/editcategory',array('result'=>$obj));
}

public function postEditcategory(Request $request,$id)
{
    $obj=cmodel::find($id);
    //dd($id);
    $obj->category=$request->get('category');
        $obj->status=$request->get('status');
        $res=$obj->save();

        if($res)
        {
            return redirect('category/category');
        }
        else
        {
            echo "Failed";
        }   


}
public function getDeletecategory($id)
{
 		$obj=cmodel::find($id);
        //dd($obj);
        $obj->delete();
        return redirect('category/category');   
}

public function getChangestatuscategory(Request $request,$id)
{
    $obj= cmodel::find($id);
    if($obj->status=='publish')
    {
        $obj->status='draft';

    }
    else
    {
        $obj->status='publish';

    }
    $obj->save();
  return redirect('category/category'); 


}

}

