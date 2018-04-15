<style type="text/css">
    .products{
        border:2px solid black;
    }
    tr{
        cell-spacing:50px;
    }
    td{
        font-size: 40px;
    }
    input[type=text]{
        width:400px;
        height:50px;
    }
    input[type=file]{
        width:400px;
        height:50px;
    }
    input[type=submit]{
        width:200px;
        height:40px;
       
    }
    input[type=reset]{
        width:200px;
        height:40px;
    }
    .option{
        width:400px;
         height:50px;
    }
       </style>
       @include('admin/header')
    @include('admin/sidebar')
        <div id="content">
        @foreach($result as $row)
       <form action="{{url('movies/editmovies')}}/{{$row->id}}" method="POST" enctype="multipart/form-data">
     <input type="hidden" name="_token" value="{{csrf_token()}}" >
     <table class="products">
        
    <tr><td>Name </td>
    <td><input type="text" name="title" value="{{$row->title}}"></td>
    <td>{!!$errors->first('name')!!}</td></tr>

    <tr><td>Category </td>
    <td><select name="category" class="option">
    <option value="{{$row->cid}}" selected="selected">{{$row->category}}</option>
    @foreach ($category as $value)
    <option value="{{$value->id}}">{{$value->category}}</option>
    @endforeach
    </select></td>
    </tr>

    <tr><td>Genres </td>
    <td><select name="genres" class="option">
    <option value="{{$row->gid}}" selected="selected">{{$row->genres}}</option>
    @foreach ($genres as $genres)
    <option value="{{$genres->id}}">{{$genres->genres}}</option>
    @endforeach
    </select></td>
    </tr>
    
    <tr><td>Image </td>
        <td><input type="file" name="image"></td>
        <td><img src="{{url($row->image)}}" alt="" height="70" width="120" style="margin-left:-130px;"></td>
        </tr>
    <tr><td>Link</td>
    <td><input type="text" name="link" value="{{$row->link}}"> </td>
    <td>{!!$errors->first('description')!!}</td></tr>
    <tr><td>Description</td>
    <td><input type="text" name="description" value="{{$row->description}}"> </td>
    <td>{!!$errors->first('description')!!}</td></tr>
    <tr><td>Posted By</td>
    <td><input type="text" name="posted_by" value="{{$row->posted_by}}"> </td> 
    <td>{!!$errors->first('Author')!!}</td></tr>



    <tr><td>Status</td><td><select name="status">
    <option value="{{$row->status}}" selected="selected">{{$row->status}}</option>
        <option value=publish>Publish</option>
        <option value=draft>Draft</option>
    </select></td></tr>
   <tr><td style="margin-left: 50px"> <input type="submit" value="Update" name="add"></td>
   <td> <input type="reset" value="Reset" ></td></tr>

   </table>
</form>
@endforeach
</div>