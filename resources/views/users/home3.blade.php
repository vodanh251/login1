<h1> list user</h1>
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }} - {{ $user->email }}</li>
    @endforeach
</ul>
<a href="{{ route('users.create') }}">Create New User</a>