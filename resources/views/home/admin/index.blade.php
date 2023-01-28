@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="d-flex justify-content-end mb-4">
        <a class="btn btn-success" href="{{ route('polls.create') }}">New Poll</a>
    </div>

    <div class="card">
        <div class="card-header">{{ __('All Polls') }}</div>

        <div class="card-body">
            <x-poll-table :polls="$polls" />
        </div>

        <div class="card-footer">
            {{ $polls->links() }}
        </div>
    </div>
</div>
@endsection
