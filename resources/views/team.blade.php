<div class="row">
  @foreach ($teams as $team)
    <div class="col-lg-4 mt-5">
      <div class="card" style="width: 375px;">
        <div class="card-body">
          <h1 class="card-title">{{$team->equipe}}</h1>
          <h3 class="card-text">Pays: {{$team->countries->country}}</h3>
          <h3 class="card-text">Continent: {{$team->countries->continent}}</h3>
          <h3 class="card-text">Nbr joueur max: {{count($player->where('team_id', $team->id))}} / {{$team->number}} </h3>
          <a href="/ShowTeam/{{$team->id}}" class="btn btn-primary">SHOW</a>
          <a href="/editTeam/{{$team->id}}" class="btn btn-primary">EDIT</a>
        </div>
      </div>
    </div>
    @if ($loop->iteration %3 == 0)
      </div>
      <div class="row">
    @endif
  @endforeach
</div>