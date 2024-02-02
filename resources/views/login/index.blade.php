@extends('app')
@section('contain')
    <div style="height: 100vh" class="container bg-primary d-flex justify-content-center align-items-center">
        <div class="login-contain d-flex justify-content-center align-items-center bg-light p-5 rounded shadow">
            <form action="/login" method="POST">
                @csrf
                <h3 class="text-center mb-5">Login</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid
                    @enderror" id="exampleInputEmail1" autofocus aria-describedby="emailHelp" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3 form-check">
                    <a href="/lupapassword" class="form-check-label text-decoration-none" for="exampleCheck1">Lupa Kata Sandi?</a>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
