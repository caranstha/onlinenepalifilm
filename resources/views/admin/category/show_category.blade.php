@include('admin/header')
@include('admin/sidebar')
<div id="content">
<a href="{{url('category/addcategory')}}" style="margin-right: 1000px;text-decoration: none;font-size: 40px; hover:'color:green'" > Add Category </a>
<table border="1">
    <tr>
        <th style="color:#ff99cc;width:40px;font-size: 30px;">Id</th>
        <th style="color:#ff99cc;width:300px;font-size: 30px;">Category Name</th>
        <th style="color:#ff99cc;width:100px;font-size: 30px;">Status</th>
        <th style="color:#ff99cc;width:100px;font-size: 30px;">Action</th>
    </tr>
    @foreach ($result as $row)

    <tr>
        <td>{{$row->id}}</td>
         <td>{{$row->category}}</td>
          <td>{{$row->status}}</td>
           <td style="width:200px"><a href="{{url('category/editcategory')}}/{{$row->id}}" style="text-decoration: none;">Edit</a>
           |
           <a href="{{url('category/deletecategory')}}/{{$row->id}}" style="text-decoration: none;">Delete</a>
           |
           <a href="{{url('category/changestatuscategory')}}/{{$row->id}}" style="text-decoration: none;">@if($row->status=='publish')
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



