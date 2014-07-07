<h1 style="margin-bottom: 30px;">{{ $poll->question }}</h1>

<div id="table-teams" class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="text-center">Team Name</th>
            <th class="text-center">Description</th>
            <th class="text-center">Votes</th>
        </tr>
        </thead>
        <tbody>
            @foreach($poll->options as $option)
            <tr>
                <td class="team-name"><h4>{{ $option->title }}</h4></td>
                <td>{{ $option->description }}</td>
                <td class="counter">{{ count($option->votes) }}</td>
                <td><button class="vote-button btn btn-success" data-id="{{ $option->id }}" href="#" value="{{ $option->id }}"><i class="icon icon-thumbs-up"/></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
