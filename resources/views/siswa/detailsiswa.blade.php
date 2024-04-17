@extends('app')
@section('contain')
    <h1>Data Maahasiswa</h1>
    <div class="wrap row w-100">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 w-100">
                    <h6 class="m-0 font-weight-bold text-primary">Ringkasan Profil</h6>
                </div>
                <div class="card-body ">
                    <div class="gambar-profil w-100 d-flex justify-content-center ">
                        <img class="img-fluid " src="{{ asset('fotosiswa/' . $details->foto) }}" alt="">
                    </div>
                    <div class="info row text-start mt-3">
                        <div class="col-6">
                            <h6>Nama</h6>
                        </div>
                        <div class="col-6">
                            <h6>: {{ $details->nama_siswa }}</h6>
                        </div>
                    </div>
                    <hr class="m-0 p-0">
                    <div class="info row text-start   mt-3">
                        <div class="col-6">
                            <h6>Lembaga </h6>
                        </div>
                        <div class="col-6">
                            <h6>: {{ $details->lembaga }}</h6>
                        </div>
                    </div>
                    <hr class="m-0 p-0">
                    <div class="info row text-start   mt-3">
                        <div class="col-6">
                            <h6>NIS </h6>
                        </div>
                        <div class="col-6">
                            <h6>: {{ $details->nis }}</h6>
                        </div>
                    </div>
                    <hr class="m-0 p-0">
                    <div class="info row text-start   mt-3">
                        <div class="col-6">
                            <h6>Email </h6>
                        </div>
                        <div class="col-6">
                            <h6>: {{ $details->email }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
