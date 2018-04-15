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
<form action="{{url('add/createadd')}}" method="POST" enctype="multipart/form-data">

     <input type="hidden" name="_token" value="{{csrf_token()}}" >
     <table class="products">
    <tr><td>Title </td>
    <td><input type="text" name="title"></td>
    <td></td></tr>
    
    </select></td>
    </tr>
    <tr><td>Image </td>
        <td><input type="file" name="image" multiple="" ></td>
         <td></td></tr>
    
    <tr><td>Description</td>
    <td><input type="text" name="description"> </td> 
    <td></td></tr>
    <tr><td>Status</td><td><select name="status" > 
    <option value="publish">Publish</option>
    <option value="draft">Draft</option>
    </select></td></tr>
   <tr><td style="margin-left: 50px"> <input type="submit" value="Add" name="add"></td>
   <td> <input type="reset" value="Reset" ></td></tr>
   </table>
</form>
</div>  
</body>
</html>