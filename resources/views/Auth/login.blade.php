@extends('layouts1.main ')

@section('content')
    <h1 class="mb-4"> Login</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('postLogin'}}" novalidate >
        @csrf
        <div class="mb-3">
            <label class="form-label">email</label>
            <input type="text" name="email" class="form-control" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div><div class="mb-3">
            <label class="form-label">password</label>
            <input type="text" name="password" class="form-control" required>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
       
        <button type="submit" class="btn btn-success">Login</button>
    </form>
@endsection
