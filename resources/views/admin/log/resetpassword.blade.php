@foreach($result as $row)
<form action="{{url('log/resetpassword')}}/{{$row->id}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}" >
	New Password:<input type="password" name="newpassword"><br><br>
	<input type="submit" name="resetpassword" value="Reset Password">

</form>
@endforeach