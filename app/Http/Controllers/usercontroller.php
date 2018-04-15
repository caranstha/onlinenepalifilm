<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\mysql_query;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use DB;
use App\Comodel;
use App\Gmodel;
use App\Mmodel;
use App\Ratemodel;
use App\Submodel;
Use App\Countermodel;
use App\commentmodel;
use Illuminate\Support\Facades\Input;
class usercontroller extends Controller
{
    public function getIndex()
    {


    	$category=DB::select("select * from cmodels where status='publish' and category <> 'Timeline'");
    	$genres=DB::select("select * from gmodels where status='publish' ");

    	$latest=DB::table('mmodels')->join('cmodels','mmodels.category','=','cmodels.id')->join('gmodels','mmodels.genres','=','gmodels.id')->join('ratemodels','mmodels.id','=','ratemodels.articleid')->selectRaw('mmodels.*,cmodels.category,gmodels.genres,ratemodels.articleid,avg(ratemodels.rate)as avrate')->GROUPBY('ratemodels.articleid')->where('cmodels.category','<>','timeline')->where('mmodels.status','=','publish')->ORDERBY('mmodels.created_at','desc')->take(6)->get();
    	//dd($latest);

    	$timeline=DB::table('mmodels')->join('cmodels','mmodels.category','=','cmodels.id')->join('gmodels','mmodels.genres','=','gmodels.id')->select('mmodels.*','cmodels.category','gmodels.genres')->where('mmodels.status','=','publish')->where('cmodels.category','=','Timeline')->ORDERBY('created_at','desc')->take(5)->get();


    	$featured=DB::table('mmodels')->join('cmodels','mmodels.category','=','cmodels.id')->join('gmodels','mmodels.genres','=','gmodels.id')->join('ratemodels','mmodels.id','=','ratemodels.articleid')->selectRaw('mmodels.*,cmodels.category,gmodels.genres,ratemodels.articleid,avg(ratemodels.rate)as avrate')->GROUPBY('ratemodels.articleid')->where('mmodels.status','=','publish')->where('cmodels.category','=','featured')->ORDERBY('created_at','desc')->get();

        $toprated=DB::table('mmodels')->join('cmodels','mmodels.category','=','cmodels.id')->join('gmodels','mmodels.genres','=','gmodels.id')->join('ratemodels','mmodels.id','=','ratemodels.articleid')->selectRaw('mmodels.*,cmodels.category,gmodels.genres,ratemodels.articleid,avg(ratemodels.rate)as avrate')->GROUPBY('ratemodels.articleid')->where('mmodels.status','=','publish')->where('cmodels.category','<>','timeline')->ORDERBY('avrate','desc')->take(6)->get();
        //dd($toprated);
        $popular=DB::table('mmodels')->join('cmodels','mmodels.category','=','cmodels.id')->join('gmodels','mmodels.genres','=','gmodels.id')->join('countermodels','mmodels.id','=','countermodels.articleid')->join('ratemodels','mmodels.id','=','ratemodels.articleid')->selectRaw('mmodels.*,cmodels.category,gmodels.genres,ratemodels.articleid,avg(ratemodels.rate)as avrate')->GROUPBY('ratemodels.articleid')->ORDERBY('countermodels.hits','desc')->take(6)->get();
        //dd($popular);
    	return view('user/index',array('category'=>$category,'genres'=>$genres,'latest'=>$latest,'featured'=>$featured,'timeline'=>$timeline,'toprated'=>$toprated,'popular'=>$popular));

    }

    public function getSinglepage($id)
    {		


        $pop=DB::table('countermodels')->where('countermodels.articleid','=',$id)->get();
        if(!empty($pop))
        {   
        $obj=mmodel::find($id);
            $hits=$obj->hits;
            $hits++;
            $obj->hits=$hits;
            $obj->save();
            $obj1=countermodel::where('articleid',$id)->update(['hits'=>$hits]);
        }
        else {
        $obj1=new countermodel();
        $obj=mmodel::find($id);
        $hits=$obj->hits;
        $hits++;
        $obj->hits=$hits;
        $obj1->articleid=$id;
        $obj1->hits=$hits;
        $obj1->save();
            }




                 $sql = DB::select("select link from mmodels where id='$id'");
                    foreach($sql as $sql1)
                    {
                                        $url = $sql1->link;

                                        preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
                                        $lid = $matches[1];
                                        
                                    }

                                        // $url = DB::select("select link from mmodels where id='$id' ");
                                        // $url1=implode("",$url);
                                        // dd($url1);

                                        // preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
                                        // $realurl = $matches[1];
                                        // $width = '560';
                                        // $height = '349';
            //dd($lid);

            $featured=DB::table('mmodels')->join('cmodels','mmodels.category','=','cmodels.id')->join('gmodels','mmodels.genres','=','gmodels.id')->join('ratemodels','mmodels.id','=','ratemodels.articleid')->selectRaw('mmodels.*,cmodels.category,gmodels.genres,ratemodels.articleid,avg(ratemodels.rate)as avrate')->GROUPBY('ratemodels.articleid')->where('mmodels.status','=','publish')->where('cmodels.category','=','featured')->ORDERBY('created_at','desc')->get();

            $category=DB::select("select * from cmodels where status='publish' and category <> 'Timeline' ");

    		$genres=DB::select("select * from gmodels where status='publish' ");


    		$singlepage=DB::table('mmodels')->join('cmodels','mmodels.category','=','cmodels.id')->join('gmodels','mmodels.genres','=','gmodels.id')->select('mmodels.*','cmodels.category','gmodels.genres')->where('mmodels.status','=','publish')->where('mmodels.id','=',$id)->get(); 

            $comment=DB::table('commentmodels')->where('commentmodels.articleid','=',$id)->ORDERBY('commentmodels.created_at','desc')->get(); //dd($comment); 


    		return view('user/pages/single',array('singlepage'=>$singlepage,'genres'=>$genres,'category'=>$category,'comment'=>$comment,'ylink'=>$lid,'featured'=>$featured));


    }
 public function postSinglepage(Request $request,$id)
{


        $obj=new commentmodel();
        $obj->name=$request->get('name');
        $obj->email=$request->get('email');
        $obj->phone_no=$request->get('phone_no');
        $obj->message=$request->get('message');
        $obj->articleid=$id;
        $obj->save();
        return redirect('user/singlepage/'.$id);

    }




    public function postSubscribe(Request $request)
    {
    
                $query = \Request::segment('2');

        if(!empty($request->get('email'))){

            $obj=new submodel();
        
            $obj->email=$request->get('email');
            $obj->save();
            Mail::send('user/mailers', array('user' => $obj),function($message){
               
                $message->to(Input::get('email'))->subject('Welcome!');
            });
            echo "<font color='white'>Thank You For Subscribing.</font>";

    }
}

    public function getRatings1($id)
    {
        $rate=new ratemodel();
        $rate->articleid=$id;
        $rate->rate=1;
        $rate->save();
        return redirect('user/index');
    }
     public function getRatings2($id)
    {
        $rate=new ratemodel();
        $rate->articleid=$id;
        $rate->rate=2;
        $rate->save();
        return redirect('user/index');
    }
 public function getRatings3($id)
    {
        $rate=new ratemodel();
        $rate->articleid=$id;
        $rate->rate=3;
        $rate->save();
        return redirect('user/index');
    }
 public function getRatings4($id)
    {
        $rate=new ratemodel();
        $rate->articleid=$id;
        $rate->rate=4;
        $rate->save();
        return redirect('user/index');

    }
 public function getRatings5($id)
    {
        $rate=new ratemodel();
        $rate->articleid=$id;
        $rate->rate=5;
        $rate->save();
        return redirect('user/index');
    }



    public function getGenres($genresname)
    {       

        $category=DB::select("select * from cmodels where status='publish' and category <> 'Timeline'");
        $genres=DB::select("select * from gmodels where status='publish' ");

        $listgenres=DB::table('mmodels')->join('cmodels','mmodels.category','=','cmodels.id')->join('gmodels','mmodels.genres','=','gmodels.id')->join('ratemodels','mmodels.id','=','ratemodels.articleid')->selectRaw('mmodels.*,cmodels.category,gmodels.genres,ratemodels.articleid,avg(ratemodels.rate)as avrate')->GROUPBY('ratemodels.articleid')->where('mmodels.status','=','publish')->where('gmodels.genres','=',$genresname)->ORDERBY('created_at','desc')->simplePaginate(2);
        //dd($listgenres);



        return view ('user/pages/genres',array('listgenres'=>$listgenres,'genresname'=>$genresname,'genres'=>$genres,'category'=>$category));
    }


     public function getCategory($categoryname)
    {       

        $category=DB::select("select * from cmodels where status='publish' and category <> 'Timeline'");
        $genres=DB::select("select * from gmodels where status='publish' ");

       
        $listcategory=DB::table('mmodels')->join('cmodels','mmodels.category','=','cmodels.id')->join('gmodels','mmodels.genres','=','gmodels.id')->join('ratemodels','mmodels.id','=','ratemodels.articleid')->selectRaw('mmodels.*,cmodels.category,gmodels.genres,ratemodels.articleid,avg(ratemodels.rate)as avrate')->GROUPBY('ratemodels.articleid')->where('mmodels.status','=','publish')->where('cmodels.category','=',$categoryname)->ORDERBY('created_at','desc')->simplePaginate(2);
        ///dd($listcategory);
        return view('user/pages/category',array('category'=>$category,'genres'=>$genres,'listcategory'=>$listcategory,'categoryname'=>$categoryname));




    }

    public function getContact()
    {       $category=DB::select("select * from cmodels where status='publish' and category <> 'Timeline'");
        $genres=DB::select("select * from gmodels where status='publish' ");
        return view('user/pages/contact',array('genres'=>$genres,'category'=>$category));
    }

    public function postSearch(Request $request) 
   {
    $search=$request->get('movie');
    $data=Mmodel::where('title','LIKE','%'.$search.'%')->get();
     $category=DB::select("select * from cmodels where status='publish' and category <> 'Timeline'");
    $genres=DB::select("select * from gmodels where status='publish' ");


    //dd($data);
    return view('user/pages/search',array('search'=>$data,'genres'=>$genres,'category'=>$category));

    }
   


}