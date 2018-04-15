<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Mmodel;
Use Cmodel;
Use App\Countermodel;

use App\ratemodel;
class moviescontroller extends Controller
{
    
public function __construct()
    {
        $this->middleware('auth');
    }
public function getMovies()
{   $obj = DB::table('mmodels')->join('cmodels','mmodels.category','=','cmodels.id')->join('gmodels','mmodels.genres','=','gmodels.id')->select('mmodels.*','cmodels.category','gmodels.genres')->orderby('id','asec')->get();
	return view('admin/movies/showmovies',array('result'=>$obj));
}

public function getAddmovies()
{   $obj=DB::select("select * from cmodels where status='publish'");
    $genres=DB::select("select * from gmodels where status='publish'");
	return view('admin/movies/addmovies',array('result'=>$obj,'genres'=>$genres));
}
public function postAddmovies(Request $request)
{       
        $obj=new mmodel();
        $obj->title=$request->get('title');   
        $obj->category=$request->get('category');
        $obj->link=$request->get('link');
        $obj->genres=$request->get('genres');
        $file = $request->file('image');
        dd($file);
        $destination_path="lib/image/";
        $filename=$file->getClientOriginalName();
        $file->move($destination_path,$filename);
        $image=$destination_path.$filename;
        $obj->image= $image;
        $obj->description=$request->get('description');
        $obj->status=$request->get('status');
        $obj->posted_by=$request->get('posted_by');
        $res=$obj->save();

        $obj1=new countermodel();
        $obj1->articleid=$obj->id;
        $obj1->hits=0;
        $obj1->save();

        $rate=new ratemodel();
        $rate->articleid=$obj->id;
        $rate->rate=0;
        $rate->save();


        if($res)
        {
            return  redirect('movies/movies');        }
        else 
        {
            echo " failed";
        }


}

public function getEditmovies($id)
{
$obj=DB::table('mmodels')->join('cmodels','mmodels.category','=','cmodels.id')->join('gmodels','mmodels.genres','=','gmodels.id')->select('mmodels.*','cmodels.category','gmodels.genres','cmodels.id as cid','gmodels.id as gid')->where('mmodels.id','=',$id)->get();

$genres=DB::select("select * from gmodels where status='publish'");

$category=DB::select("select * from cmodels where status='publish'");
return view('admin/movies/editmovies',array('result'=>$obj,'category'=>$category,'genres'=>$genres));

}

public function postEditmovies(Request $request,$id)
{
        $obj=mmodel::find($id);
        $obj->title=$request->get('title');   
        $obj->category=$request->get('category');
        $obj->genres=$request->get('genres');
        $obj->link=$request->get('link');        
        $file = $request->file('image');
        if(!is_null($file))
        { 
        $destination_path="lib/image/";
        $filename=$file->getClientOriginalName();
        $file->move($destination_path,$filename);
        $image=$destination_path.$filename;
        $obj->image= $image;
        }
        $obj->description=$request->get('description');
        $obj->status=$request->get('status');
        $obj->posted_by=$request->get('posted_by');
        
        $res=$obj->save();
        if($res)
        {
            return  redirect('movies/movies');        }
        else 
        {
            echo " failed";
        }
}

public function getDeletemovies($id)
{
    $obj=mmodel::find($id);
        //dd($obj);
        $obj->delete();
        unlink($obj->image);
        return redirect('movies/movies');
   
}

public function getChangestatusmovies(Request $request,$id)
{
    $obj= mmodel::find($id);
    if($obj->status=='publish')
    {
        $obj->status='draft';

    }
    else
    {
        $obj->status='publish';

    }
    $obj->save();
  return redirect('movies/movies'); 
}

}
