<form action="{{url('log/forget')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}" >
	Email:<input type="text" name="email"><br><br>
	<input type="submit" name="sendreset" value="Send Reset Link" >

</form>