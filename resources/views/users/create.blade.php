<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('file css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2 class="Text-center mb-4">Create New User</h2>
            <!-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
             @endif  -->
            <form method="POST" action="{{ route('users.store') }}" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" placeholder="Enter full name" >
                    @error('name')
                        <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}" placeholder="Enter full email address" >
                    @error('email')
                        <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter full password" >
                 </div>
                 <div class="mb-3">
                    <label for=" password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password-confirmation" name="password_confirmation" placeholder="Enter full password" >
                 </div>
                
                <button type="submit" class="btn btn-primary w-100">User New</button>     
        </div>

    </div>
</body>
</html>
