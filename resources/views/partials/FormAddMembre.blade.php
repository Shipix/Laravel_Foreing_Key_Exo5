@if ($errors->any())
    <div class="alert alert-danger container mt-5">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="container mt-5 mb-5">
    <form action="/add-membre" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="Nom" class="form-label">Nom</label>
          <input type="texte" class="form-control" id="nom" name="name" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Prénom</label>
            <input type="texte" class="form-control" id="prenom" name="firstname" value="{{old('firstname')}}">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" name="age" value="{{old('age')}}">
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">Photo</label>
            <input type="file" class="form-control" id="src" name="src" value="{{old('src')}}">
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Telephone</label>
            <input type="texte" class="form-control" id="telephone" name="number" value="{{old('number')}}">
        </div>
        <div class="mb-3">
            <label for="Mail" class="form-label">Mail</label>
            <input type="text" class="form-control" id="mail" name="mail" value="{{old('mail')}}">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <select class="form-control" id="genre" name="gender_id">
              @foreach ($gender as $item)
                <option value="{{$item->id}}">{{$item->gender}}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="genre">Pays</label>
            <input type="text" class="form-control" id="mail" name="country" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="team">Team</label>
            <select class="form-control" id="team" name="team_id">
              @foreach ($team as $item)
                {{-- @if ($item->get()->count() < 6) --}}
                  <option value="{{$item->id}}">{{$item->equipe}}</option>
                {{-- @endif --}}
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>