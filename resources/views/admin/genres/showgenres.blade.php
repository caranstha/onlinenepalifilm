@include('admin/header')
@include('admin/sidebar')
<div id="content">
<a href="{{url('genres/addgenres')}}" style="margin-right: 1000px;text-decoration: none;font-size: 40px; hover:'color:green'" > Add Genres </a>
<table border="1">
    <tr>
        <th style="color:#ff99cc;width:40px;font-size: 30px;">Id</th>
        <th style="color:#ff99cc;width:300px;font-size: 30px;">Genres Name</th>
        <th style="color:#ff99cc;width:100px;font-size: 30px;">Status</th>
        <th style="color:#ff99cc;width:100px;font-size: 30px;">Action</th>
    </tr>
    @foreach ($result as $row)

    <tr>
        <td>{{$row->id}}</td>
         <td>{{$row->genres}}</td>
          <td>{{$row->status}}</td>
           <td style="width:200px"><a href="{{url('genres/editgenres')}}/{{$row->id}}" style="text-decoration: none;">Edit</a>
           |
           <a href="{{url('genres/deletegenres')}}/{{$row->id}}" style="text-decoration: none;">Delete</a>
           |
           <a href="{{url('genres/changestatusgenres')}}/{{$row->id}}" style="text-decoration: none;">@if($row->status=='publish')
           Draft
           @endif
           @if($row->status=='draft')
           Publish
           @endif
           </a>
           </td></tr>
        @endforeach
          
   
</table>
 </div>  
</body>
</html>



