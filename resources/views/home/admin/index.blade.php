@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="d-flex justify-content-end mb-4">
        <a class="btn btn-success" href="{{ route('polls.create') }}">New Poll</a>
    </div>

    <div class="card">
        <div class="card-header">{{ __('All Polls (Note* Only published polls will be displayed to the user)') }}</div>

        <div class="card-body">
            @livewire('admin.polls-table')
        </div>
    </div>
</div>
@endsection
