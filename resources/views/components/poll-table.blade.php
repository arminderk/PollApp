<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Start Date</th>
        <th scope="col">Finish Date</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach($polls as $poll)
            <tr @class(['table-success' => !$poll->published()])>
                <th scope="row">{{ $poll->name }}</th>
                <td>{{ $poll->description }}</td>
                <td>{{ date('m/d/Y h:i A', strtotime($poll->start_date)) }}</td>
                <td>{{ date('m/d/Y h:i A', strtotime($poll->finish_date)) }}</td>
                <td>@if(!$poll->published()) <a href="#">Edit</a>@endif</td>
            </tr>
        @endforeach
    </tbody>
</table>