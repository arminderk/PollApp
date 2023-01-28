@extends('layouts.app')

@section('content')
<div class="col-md-6">
    <h3 class="fw-bold mt-2">Edit Poll</h3>

    <form class="row mt-3 g-3" method="POST" action="{{ route('polls.update', $poll) }}">
        @csrf
        @method('PUT')
        @include('polls.partials.create-edit-form-inputs')
    </form>
</div>
@endsection
