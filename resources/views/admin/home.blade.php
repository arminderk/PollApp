@extends('layouts.app')

@section('content')
<div class="col-md-8">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <!-- New Poll Btn -->
    <div class="d-flex justify-content-end mb-4">
        <a class="btn btn-success" href="{{ route('polls.create') }}">New Poll</a>
    </div>

    <!-- All Polls Card -->
    <div class="card">
        <div class="card-header">{{ __('All Polls') }}</div>

        <div class="card-body">
            <x-poll-table :polls="$polls" />
        </div>
    </div>
</div>
@endsection
