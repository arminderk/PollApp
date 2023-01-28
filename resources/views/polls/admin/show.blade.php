@extends('layouts.app')

@section('content')
<div class="col-md-6">
    <h2 class="text-center fw-bold mt-2">{{ $poll->name }}</h2>

    <hr>

    <div class="col-12">
        <h3 class="fw-bold mb-5">Responses</h3>

        @foreach($poll->options as $option)
            <div class="row">
                <h6>{{ $option->option }}</h6>
                <div class="progress mb-5" role="progressbar" aria-label="Basic example" aria-valuenow="{{ $poll->getOptionResponsesTotal($option) }}" aria-valuemin="0" aria-valuemax="{{ count($option->responses) }}">
                    <div class="progress-bar" style="width: {{ $poll->getOptionResponsesPercentage($option) }}%"></div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection