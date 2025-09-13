@extends('layouts.app')

@section('title', 'Trang chủ')

@section('header')
  Xin chào Laravel!
@endsection

@section('content')
  <h2>Nội dung trang chủ</h2>
  <p>Đây là nội dung chính trong trang home.</p>
@endsection

@section('sidebar')
  @parent
  <h4>Sidebar Home</h4>
  <p>Thêm thông tin cho sidebar ở trang chủ.</p>
@endsection
