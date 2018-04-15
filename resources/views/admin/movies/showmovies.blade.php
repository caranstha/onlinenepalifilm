@include('admin/header')
@include('admin/sidebar')
<div id="content">
<a style="margin-right: 1000px;font-size: 40px;width:30%; text-decoration: none;background-color: #6699ff;" href="{{url('movies/addmovies')}}" > Add movies </a>
<table border="1">
<tr>
<th style="color:#ff99cc;width:60px;font-size: 35px;">Id</th>
<th style="color:#ff99cc;width:110px;font-size: 35px;">Title</th>
<th style="color:#ff99cc;width:100px;font-size: 30px;">Category</th>
<th style="color:#ff99cc;width:100px;font-size: 30px;">Genres</th>
<th style="color:#ff99cc;width:160px;font-size: 35px;">Image</th>
<th style="color:#ff99cc;width:160px;font-size: 35px;">Link</th>
<th style="color:#ff99cc;width:130px;font-size: 35px;">Description</t>
<th style="color:#ff99cc;width:130px;font-size: 25px;">Posted By</t>
<th style="color:#ff99cc;width:160px;font-size: 35px;">Date/Time</th>
<th style="color:#ff99cc;width:90px;font-size: 25px;">Status</th>
<th style="color:#ff99cc;width:90px;font-size: 35px;">Action</th>


</tr>
@foreach($result as $row)
<tr>
<td>{{$row->id}}</td>
<td>{{$row->title}}</td>
<td>
{{$row->category}}</td>
<td>{{$row->genres}}
<td><img src="{{url($row->image)}}" width="100px" height="100px"></td>
<td>{{$row->link}}</td>
<td>{{str_limit($row->description,$limit=100,$end='....')}}</td>
<td>{{$row->posted_by}}</td>
<td>{{$row->created_at}}
</td>
<td>{{$row->status}}</td>
<td style="width:200px"><a href="{{url('movies/editmovies')}}/{{$row->id}}" style="text-decoration: none;">Edit</a>
    |
    <a href="{{url('movies/deletemovies')}}/{{$row->id}}" style="text-decoration: none;">Delete</a>
    |

    <a href="{{url('movies/changestatusmovies')}}/{{$row->id}}" style="text-decoration: none;">@if($row->status=='publish')
           Draft
           @endif
           @if($row->status=='draft')
           Publish
           @endif</a>
    </td>
    </tr>
@endforeach
</table>
</div>  
</body>
</html>




