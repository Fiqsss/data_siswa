@extends('app')
@section('contain')
@include('components.sidebar')
<div class="container">
    @include('components.navbar')
    @include('createsiswa.formcreate')
</div>
@endsection
