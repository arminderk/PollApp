@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('All Polls') }}</div>

        <div class="card-body">
            @include('home.partials.user-poll-table')
        </div>

        <div class="card-footer">
            {{ $polls->links() }}
        </div>
    </div>
</div>
@endsection
