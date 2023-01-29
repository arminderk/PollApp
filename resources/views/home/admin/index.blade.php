@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="d-flex justify-content-end mb-4">
        <a class="btn btn-success" href="{{ route('polls.create') }}">New Poll</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="fw-bolder">All Polls (Drag a row in the table to sort it)</h5>
            <h6 class="fw-lighter text-secondary">Note* Only published polls will be displayed to the user</h6>
        </div>

        <div class="card-body">
            @livewire('admin.polls-table')
        </div>
    </div>
</div>
@endsection
