@extends('layouts.app')

@section('title', 'Market')

@push('early_styles')
    <link rel="stylesheet" href="{{ asset('asset/js/bootstrap-4.0.0/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
@endpush



@push('styles')
    @vite('resources/css/pages/market.css')
@endpush



@section('content')

<div class="container py-5">

    <h1>Market Page</h1>

</div>

@endsection