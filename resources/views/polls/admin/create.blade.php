@extends('layouts.app')

@section('content')
<div class="col-md-6">
    <h3 class="fw-bold mt-2">New Poll</h3>

    <form class="row mt-3 g-3" method="POST" action="{{ route('polls.store') }}">
        @csrf
        @include('polls.partials.create-edit-form-inputs')
    </form>
</div>
@endsection
