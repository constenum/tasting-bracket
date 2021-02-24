@extends('templates.main')

@section('content')
    <div class="container">
        <h1>Register</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="name" value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="email"  value="{{ old('email') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
            </div>
            <div class="mb-3">
                <label for="code" class="form-label">Tasting Code</label>
                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" id="code">
                @error('code')
                <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
