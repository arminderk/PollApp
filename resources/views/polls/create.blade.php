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
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $poll->name) }}" required>
        </div>

        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $poll->description) }}</textarea>
        </div>

        <div class="col-md-6">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="datetime-local" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $poll->start_date) }}" required>
        </div>

        <div class="col-md-6">
            <label for="finish_date" class="form-label">Finish Date</label>
            <input type="datetime-local" class="form-control" id="finish_date" name="finish_date" value="{{ old('finish_date', $poll->finish_date) }}" required>
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
            @if(count(old('options', $poll->options)) > 0)
                @foreach(old('options', $poll->options) as $option)
                    <input type="text" class="form-control mb-3" name="options[]" value="{{ $option }}">
                @endforeach
            @else
                <input type="text" class="form-control mb-3" name="options[]">
            @endif
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success">Save Poll</button>
        </div>
    </form>
</div>
@endsection
