<!-- resources/views/layouts/detail.blade.php-->

{{-- Kế thừa file master.blade.php--}}
@extends('layout.master') 

{{-- Truyền dữ liệu vào đúng vị trí của @yield('title') trong file master.blade.php --}}
@section('title')
    Trang chủ
@endsection

{{-- Truyền dữ liệu vào đúng vị trí của @yield('content') trong file master.blade.php --}}
@section('content')
    Nội dung trang chủ
@endsection