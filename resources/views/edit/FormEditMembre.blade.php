<div class="container mt-5 mb-5">
    <form action="/membre-update/{{$edit->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="texte" class="form-control" id="nom" name="name" value="{{$edit->name}}">
        </div>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Prénom</label>
            <input type="texte" class="form-control" id="prenom" name="firstname" value="{{$edit->firstname}}">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" name="age" value="{{$edit->age}}">
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">Photo</label>
            <input type="file" class="form-control" id="src" name="src" value="{{$edit->src}}">
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Telephone</label>
            <input type="texte" class="form-control" id="telephone" name="number" value="{{$edit->number}}">
        </div>
        <div class="mb-3">
            <label for="Mail" class="form-label">Mail</label>
            <input type="text" class="form-control" id="mail" name="mail" value="{{$edit->mail}}">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <select class="form-control" id="genre" name="gender_id">
              @foreach ($gender as $item)
                <option value="{{$item->gender}}">{{$item->gender}}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="genre">Pays</label>
            <input type="text" class="form-control" id="mail" name="country" value="{{$edit->country}}">
        </div>
         <div class="form-group">
            <label for="team">Team</label>
            <select class="form-control" id="team" name="team_id">
              @foreach ($team as $item)
                <option value="{{$item->equipe}}">{{$item->equipe}}</option>
              @endforeach
            </select>
        </div> 
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role_id">
              @foreach ($role as $item)
                <option value="{{$item->id}}">{{$item->role}}</option>
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>