<div class="container mt-5 mb-5">
    <form action="/add-membre" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="Nom" class="form-label">Nom</label>
          <input type="texte" class="form-control" id="nom" name="name">
        </div>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Prénom</label>
            <input type="texte" class="form-control" id="prenom" name="firstname">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" name="age">
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">Photo</label>
            <input type="file" class="form-control" id="src" name="src">
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Telephone</label>
            <input type="texte" class="form-control" id="telephone" name="number">
        </div>
        <div class="mb-3">
            <label for="Mail" class="form-label">Mail</label>
            <input type="text" class="form-control" id="mail" name="mail">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <select class="form-control" id="genre">
              @foreach ($gender as $item)
                <option value="{{$item->gender}}">{{$item->gender}}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="genre">Pays</label>
            <input type="text" class="form-control" id="mail" name="country">
        </div>
        <div class="form-group">
            <label for="team">Team</label>
            <select class="form-control" id="team">
              @foreach ($team as $item)
                <option value="{{$item->equipe}}">{{$item->equipe}}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role">
              @foreach ($role as $item)
                <option value="{{$item->role}}">{{$item->role}}</option>
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>