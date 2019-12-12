<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>profile</title>
</head>
<body style="padding-left: 50px">
	<h1 align="center">PROFILE</h1>
	Họ và tên: {{ $name }} <br>
	Năm sinh: {{ $birthYear }} <br>
	Trường học: {{ $school }} <br>
	Quê quán: {{ $homeTown }} <br>
	Giới thiệu bản thân: {!! $information !!}
	Mục tiêu nghề nghiệp: {{ $target }}
</body>
</html>