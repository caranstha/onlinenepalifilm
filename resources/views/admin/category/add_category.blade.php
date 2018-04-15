@include('admin/header')
@include('admin/sidebar')
<div id="content">
<form action="{{url('category/addcategory')}}" method="POST">
     <input type="hidden" name="_token" value="{{csrf_token()}}" >
    <p>Category name </p>
    <input type="text" name="category">
    <select name='status'>
    <option value="publish">Publish</option>    
    <option value="draft">Draft</option>
    </select>
    <p><input type="submit" value="Add" name="add"></p>
</form>
</div>  
</body>
</html>