<div>
    <table class="table table-hover">
        <thead>
        <tr class="">
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Published</th>
            <th scope="col">Start Date</th>
            <th scope="col">Finish Date</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider" wire:sortable="updatePollOrder">
            @foreach($polls as $poll)
                <tr @class(['table-success' => !$poll->published]) wire:sortable.item="{{ $poll->id }}" wire:key="poll-{{ $poll->id }}">
                    <th scope="row">{{ $poll->name }}</th>
                    <td>{{ $poll->description }}</td>
                    <td>{{ $poll->published ? 'Yes' : 'No' }}</td>
                    <td>{{ date('m/d/Y h:i A', strtotime($poll->start_date)) }}</td>
                    <td>{{ date('m/d/Y h:i A', strtotime($poll->finish_date)) }}</td>
                    <td>
                        <a href="{{ route('polls.show', $poll->id) }}">Responses</a>
                        @if(!$poll->published) | <a href="{{ route('polls.edit', $poll->id) }}">Edit</a>@endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if(count($polls))
        {{ $polls->links() }}
    @endif
</div>