@extends('layouts.app')

@section('content')
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="poll logo" width="72" height="57">
    <h1 class="display-5 fw-bold">Welcome to Poll</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-5">A simple web application that allows you to take part in our various polls and submit feeback.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <h5 class="text-secondary">Please login or register using the links above</h5>
        </div>
    </div>
</div>
@endsection
