@extends('layouts1.app')

@section('title', 'Trang chủ')

@section('header')
  Chào mừng bạn đến với Laravel 12! Chúc bạn thành công!

@endsection

@section('content')
  <h2>Nội dung trang chủ</h2>
  <p>Đây là nội dung chính của website demo.</p>
@endsection

@section('sidebar')
  @parent
  <h4>Sidebar Home</h4>
  <p>Tin tức mới nhất ở đây.</p>
@endsection
