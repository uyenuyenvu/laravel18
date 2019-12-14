<!-- resources/views/layouts/master.blade.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
<div>
    @include('layout.header')
</div>
<div>
    @yield('content')
</div>
<div>
    @include('layout.footer')
</div>
	@yield('script')
</body>
</html>