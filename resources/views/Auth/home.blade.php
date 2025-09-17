@extends('Layouts1.main')

@section('content')
    <h1>Welcome Home!</h1>
    <p>Bạn đã đăng nhập thành công.</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Đăng xuất</button>
    </form>
@endsection
