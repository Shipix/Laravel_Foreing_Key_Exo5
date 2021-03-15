<div class="container mt-5">
    <form action="/team-update/{{$edit->id}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="nom">Nom de team</label>
          <input type="texte" class="form-control" id="nom" name="equipe" value="{{$edit->equipe}}">
        </div>
        <div class="form-group">
            <label for="pays">Pays</label>
            <input type="texte" class="form-control" id="pays" name="country" value="{{$edit->countries->country}}">
        </div>
        <div class="form-group">
            <label for="city">Continent</label>
                @foreach ($edit as $item)
                    <option value="{{$item->id}}">{{$item->countries->continent}}</option>
                @endforeach
            {{-- <input type="texte" class="form-control" id="city" name="continent" value="{{$edit->countries->continent}}"> --}}
        </div>
        <div class="form-group">
            <label for="joueur">Nombres de joueurs</label>
            <input type="number" class="form-control" id="joueur" name="number" value="{{$edit->number}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>