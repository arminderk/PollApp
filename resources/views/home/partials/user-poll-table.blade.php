<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
        @foreach($polls as $poll)
            <tr>
                <th scope="row">{{ $poll->name }}</th>
                <td>{{ $poll->description }}</td>
                <td>
                    <a href="{{ route('polls.show', $poll->id) }}">{{ $poll->user_can_vote ? 'Vote' : 'Show' }}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>