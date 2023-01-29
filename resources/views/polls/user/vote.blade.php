@extends('layouts.app')

@section('content')
<div class="col-md-6">
    <h2 class="text-center fw-bold mt-2">{{ $poll->name }}</h2>

    <hr>

    <div class="col-12">
        <h5 class="fw-bold mb-4">Please select a response below:</h5>

        <form class="row mt-3 g-3" method="POST" action="{{ route('polls.vote', $poll) }}">
            @csrf
            @foreach($poll->options as $option)
                <div class="row mb-4">
                    <input type="radio" class="btn-check" name="option_id" id="option{{ $option->id }}" value="{{ $option->id }}" autocomplete="off">
                    <label class="btn btn-outline-primary" for="option{{ $option->id }}">{{ $option->option }}</label>
                </div>
            @endforeach
            <div class="mt-4">
                <div class="col-12">
                    <button type="submit" class="float-end btn btn-success">Vote</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection