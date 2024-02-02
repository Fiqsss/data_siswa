@extends('app')
@section('contain')
<div class="container d-flex justify-content-center  align-items-center bg-primary" style="height:100vh">
<div class="kotak w-50 h-50 shadow bg-white rounded p-5 d-flex justify-content-center  align-items-center">
    <div class="wrap">
        <form method="POST" action="/lupa_act">
            @csrf
            <h5>Masukan Email yang Terdaftar</h5>
            <input type="text" name="email" class="form-control shadow" placeholder="Email">
            <button type="submit" class="bg-dark text-white btn mt-3">Kirim Verifikasi</button>
        </form>
    </div>
</div>
</div>
@endsection
