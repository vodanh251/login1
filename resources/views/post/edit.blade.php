@extends('Layouts1.main')
@section('content')
    <h1 class="mb-4">Chỉnh sửa bài viết</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật bài viết</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
    @endsection
