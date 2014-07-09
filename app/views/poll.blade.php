@if($hasVoted)
<h1 style="margin-bottom: 30px;">Thank you for your vote. It counts!</h1>
@else
<h1 style="margin-bottom: 30px;">{{ $poll->question }}</h1>
<p class="text-muted" style="font-style: italic">You can only vote once...</p>
@endif

<div id="table-teams" class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th class="text-center">Team Name</th>
            <th class="text-center">Institution</th>
            <th class="text-center">Photo</th>
            <th class="text-center">Description</th>
            <th class="text-center">Votes</th>
        </tr>
        </thead>
        <tbody>
            @foreach($poll->options as $option)
            <tr>
                <td class="team-name"><h4>{{ $option->title }}</h4></td>
                <td><h4>{{ $option->school }}</h4></td>
                <td><img src="{{ $option->image }}" style="max-width: 300px;"/></td>
                <td>{{ $option->description }}</td>
                <td class="counter">{{ count($option->votes) }}</td>
                @if(!$hasVoted)<td><button class="vote-button btn btn-success" data-id="{{ $option->id }}" href="#" value="{{ $option->id }}"><i class="icon icon-thumbs-up"/></button></td>@endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

