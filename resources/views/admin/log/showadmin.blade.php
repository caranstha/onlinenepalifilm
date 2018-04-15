@include('admin/header')
@include('admin/sidebar')
<div id="content">
<a style="margin-right: 1000px;font-size: 40px;width:30%; text-decoration: none;background-color: #6699ff;" href="{{url('admin/addusers')}}" > Add Users </a>
<table border="1">
<tr>
<th style="color:#ff99cc;width:60px;font-size: 35px;">Id</th>
<th style="color:#ff99cc;width:110px;font-size: 35px;">Name</th>
<th style="color:#ff99cc;width:100px;font-size: 30px;">Email</th>
<th style="color:#ff99cc;width:100px;font-size: 30px;">Password</th>
<th style="color:#ff99cc;width:100px;font-size: 30px;">Action</th>



</tr>
@foreach($users as $row)
<tr>
<td>{{$row->id}}</td>
<td>{{$row->name}}</td>
<td>
{{$row->email}}</td>
<td>{{$row->password}}</td>
<td><a href="{{url('admin/deleteusers')}}/{{$row->id}}">Delete User </td>
</tr>
@endforeach
</table>
</div>  
</body>
</html>




