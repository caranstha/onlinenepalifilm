@include('admin/header')
@include('admin/sidebar')
<div id="content">
<a style="margin-right: 1000px;font-size: 40px;width:30%; text-decoration: none;background-color: #6699ff;" href="{{url('add/createadd')}}" > Add Advertisment </a>
<table border="1">
<tr>
<th style="color:#ff99cc;width:60px;font-size: 35px;">Id</th>
<th style="color:#ff99cc;width:110px;font-size: 35px;">Title</th>
<th style="color:#ff99cc;width:160px;font-size: 35px;">Image</th>
<th style="color:#ff99cc;width:130px;font-size: 35px;">Description</th>
<th style="color:#ff99cc;width:160px;font-size: 35px;">Date/Time</th>
<th style="color:#ff99cc;width:90px;font-size: 35px;">Status</th>
<th style="color:#ff99cc;width:90px;font-size: 35px;">Action</th>


</tr>
@foreach($result as $row)
<tr>
<td>{{$row->id}}</td>
<td>{{$row->title}}</td>
<td><img src="{{url($row->image)}}" width="100px" height="100px"></td>
<td>{{$row->description}}</td>
<td>{{$row->created_at}}
</td>
<td>{{$row->status}}</td>
<td style="width:200px"><a href="{{url('add/editadd')}}/{{$row->id}}" style="text-decoration: none;">Edit</a>
    |
    <a href="{{url('add/deleteadd')}}/{{$row->id}}" style="text-decoration: none;">Delete</a>
    |

    <a href="{{url('add/changestatusadd')}}/{{$row->id}}" style="text-decoration: none;">@if($row->status=='publish')
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




