@extends('Layouts1.main')
@section('content')
    <h1 class="mb-4">Tạo bài viết mới</h1>
     <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Tiêu đề</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Nội dung</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Lưu bài viết</button>
     </form>
@endsection

