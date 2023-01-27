@extends('layouts.app')

@section('content')
<div class="col-md-6">
    @if (session('status'))
        <div class="alert alert-success mb-3" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h3 class="fw-bold mt-2">New Poll</h3>

    <form class="row mt-3 g-3" method="POST" action="{{ route('polls.store') }}">
        @csrf
        <div class="col-12">
            <label for="name" class="form-label">Question</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="col-md-4">
            <label for="days" class="form-label">Days</label>
            <input type="text" class="form-control" id="days" name="days">
        </div>
        <div class="col-md-4">
            <label for="hours" class="form-label">Hours</label>
            <input type="text" class="form-control" id="hours" name="hours">
        </div>
        <div class="col-md-4">
            <label for="minutes" class="form-label">Minutes</label>
            <input type="text" class="form-control" id="minutes" name="minutes">
        </div>

        <hr class="text-secondary mt-4">

        <div class="col-12">
            <h4 class="float-start">Poll Options</h4>
            <a id="btn-add-poll-option" class="float-end btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                </svg>
                Add New Option
            </a>
        </div>

        <div id="poll-options" class="col-12">
            <input type="text" class="form-control mb-3" name="pollOptions[]">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success">Save Poll</button>
        </div>
    </form>
</div>
@endsection
