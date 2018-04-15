@include('admin/header')
@include('admin/sidebar')
<div id="content">
<form action="{{url('genres/addgenres')}}" method="POST">
     <input type="hidden" name="_token" value="{{csrf_token()}}" >
    <p>Enter Genres name </p>
    <input type="text" name="genres">
    <select name='status'>
    <option value="publish">Publish</option>    
    <option value="draft">Draft</option>
    </select>
    <p><input type="submit" value="Add" name="add"></p>
</form>
</div>  
</body>
</html>