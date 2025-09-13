@extends('layouts1.app')

@section('content')
    <h1 class="mb-4"> Register</h1>
    <form method="POST" action="#" novalidate>
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
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
        <div class="mb-3">
            <label class="form-label">Re-password</label>
            <input type="text" name="Re-password" class="form-control" required>
            @error('Re-password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
@endsection
