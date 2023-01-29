@extends('layouts.app')

@section('content')
<div class="col-md-6">
    <h2 class="text-center fw-bold mt-2">{{ $poll->name }}</h2>

    <hr>

    <div class="col-12 mt-4">
        <h4 class="fw-bold mb-5"><u>Responses:</u></h4>

        @foreach($poll->options as $option)
            <div class="row mb-5">
                <h6>{{ $option->option }}</h6>
                <div class="progress" role="progressbar" aria-label="Responses" aria-valuenow="{{ count($option->responses) }}" aria-valuemin="0" aria-valuemax="{{ count($poll->responses) }}">
                    <div class="progress-bar bg-success" style="width: {{ $poll->optionResponsesPercent($option) }}%">{{ count($option->responses) }}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection