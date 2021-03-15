@if ($errors->any())
    <div class="alert alert-danger container mt-5">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container mt-5">
    <form action="/addTeam" method="POST">
      @csrf
        <div class="form-group">
          <label for="nom">Nom de team</label>
          <input type="texte" class="form-control" id="nom" name="equipe" value="{{old('equipe')}}">
        </div>
        <div class="form-group">
            <label for="joueur">Nombre de joueurs</label>
            <input type="number" class="form-control" id="nom" name="number" value="{{old('number')}}">
        </div>
        <div class="form-group">
            <label for="country">Pays</label>
            <input type="text" class="form-control" id="nom" name="country" value="{{old('country')}}">
        </div>
        <div class="form-group">
            <label for="joueur">Continent</label>
            <select class="form-control" id="team" name="team_id">
                @foreach ($teams as $item)
                    <option value="{{$item->id}}">{{$item->countries->continent}}</option>
                @endforeach
            </select>
  

            {{-- <input type="text" class="form-control" id="nom" name="continent" value="{{old('continent')}}"> --}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>