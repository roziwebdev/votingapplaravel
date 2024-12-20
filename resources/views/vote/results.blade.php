
<div class="container">
    <h1>Voting Results</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Candidate</th>
                <th>Votes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->name }}</td>
                    <td>{{ $result->votes_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
