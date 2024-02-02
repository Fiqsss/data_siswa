@extends('app')
@section('contain')
@include('components.sidebar')
<div style="padding-left: 10rem" class="container position-relative">
    @include('components.navbar')
    @include('siswa.datasiswa')
</div>
@endsection
