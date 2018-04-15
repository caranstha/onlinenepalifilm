@include('admin/header')
@include('admin/sidebar')
<div id="content">

<form action="{{url('category/editcategory')}}/{{$result->id}}" method="POST">
     <input type="hidden" name="_token" value="{{csrf_token()}}" >
    <p>Category name </p>

    
    <input type="text" name="category" value="{{$result->category}}">
    <select name='status'>

    <option value="{{$result->status}}" selected="selected">{{$result->status}}</option>
    <option value="publish">Publish</option>    
    <option value="draft">Draft</option>
    </select>
    <p><input type="submit" value="Add" name="add"></p>
</form>
</div>  
</body>
</html>