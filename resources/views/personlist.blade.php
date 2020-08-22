<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Person LIst</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
			<caption>Person List</caption>
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
				</tr>
			</thead>
			<tbody>
				@foreach($person_list as $person)
				<tr>
					<td>{{$person->id}}</td>
					<td>{{$person->name}}</td>
					<td>{{$person->email}}</td>
					<td>{{$person->address}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>	

</body>
</html>