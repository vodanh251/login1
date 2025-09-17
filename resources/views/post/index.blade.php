@extends('Layouts1.main')
@section('content')
<h1 class="mb-4">Danh sách bài viết</h1>

<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Thêm bài viết mới</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Sửa bài viết</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')">Xóa bài viết</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">Không có bài viết hiện tại.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
