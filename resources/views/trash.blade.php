<!DOCTYPE html>
<html>
<head>
	<title>Trash</title>
</head>
<body>

	<h1>Trashed News :</h1>
	<table border="1" width="50%">
		<tr>
			<th>News Title</th>
			<th colspan="2">Action</th>
		</tr>
		<tr>
			@foreach($trash as $trash)
			<th>{{$trash->title}}</th>
			<th><a href="/restore/{{$trash->id}}">restore</a></th>
			<th><a href="/p_delete/{{$trash->id}}">delete</a></th>
		</tr>
		@endforeach;
	</table>

</body>
</html>