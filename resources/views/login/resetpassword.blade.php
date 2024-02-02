<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>reset password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center  align-items-center bg-primary" style="height:100vh">
        <div class="kotak w-50 h-50 shadow bg-white rounded p-5 d-flex justify-content-center  align-items-center">
            <div class="wrap">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="email" value="{{ request()->email }}">
                    <h5>Masukan Email yang Terdaftar</h5>
                    <input type="password" name="password" class="form-control shadow mb-3"
                        placeholder="Tulis Pasword Baru anda">
                    <input type="password" name="password_confirmation" class="form-control shadow"
                        placeholder="Ketik Ulang Password Baru anda">
                    <button type="submit" class="bg-dark text-white btn mt-3"> Reset Password</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (session('success'))
            swal.fire(
                'Berhasil!',
                '{{ session('success') }}',
                'success'
            )
        @endif
        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ $errors->first() }}',
            });
        @endif
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
