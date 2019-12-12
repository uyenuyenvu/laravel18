<!-- resources/views/hello1.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>hello cac ban</title>
    <link rel="stylesheet" href="">
</head>
<body>
Hello 2 blade
<p>tên uyên là: {!! $name !!}</p>
<p>uyên sinh năm: {{ $year }}</p>
<p>uyên học ở: {{ $school }}</p>
@if(count($records)==1)
	có 1
@elseif(count($records)>1)
	có nhiều: 
	@foreach($records as $value)
		{{ $value }}
	@endforeach
@else
	không có
@endif
</body>
</html>