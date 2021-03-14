<div class="container mt-5 mb-5">
    <form action="/edit-membre" method="POST">
        @csrf
        <div class="mb-3">
          <label for="Nom" class="form-label">Nom</label>
          <input type="texte" class="form-control" id="nom" name="name" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Prénom</label>
            <input type="texte" class="form-control" id="prenom" name="lastname" value="{{old('lastname')}}">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{old('age')}}">
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Telephone</label>
            <input type="texte" class="form-control" id="telephone" name="phone" value="{{old('phone')}}">
        </div>
        <div class="mb-3">
            <label for="Mail" class="form-label">Mail</label>
            <input type="mail" class="form-control" id="mail" name="mail" value="{{old('mail')}}">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <select class="form-control" id="genre" name="sexe" value="{{old('sexe')}}">
              <option>Homme</option>
              <option>Femme</option>
              <option>Autre</option>
            </select>
        </div>
        <div class="form-group">
            <label for="genre">Pays</label>
            <select class="form-control" id="genre" name="country" value="{{old('country')}}">
                <option>Belgique</option>
              <option>France</option>
              <option>Luxembourg</option>
            </select>
        </div>
        <div class="form-group">
            <label for="team">Team</label>
            <select class="form-control" id="team" name="team" value="{{old('team')}}">
              <option>Team 1</option>
              <option>Team 2</option>
              <option>Team 3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="job" value="{{old('job')}}">
              <option>role 1</option>
              <option>role 2</option>
              <option>role 3</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>
</div>