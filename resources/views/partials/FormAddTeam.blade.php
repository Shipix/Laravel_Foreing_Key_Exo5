<div class="container mt-5">
    <form action="/addTeam" method="POST">
      @csrf
        <div class="form-group">
          <label for="nom">Nom de team</label>
          <input type="texte" class="form-control" id="nom" name="equipe">
        </div>
        <div class="form-group">
            <label for="joueur">Nombre max de joueur</label>
            <input type="number" class="form-control" id="nom" name="number">
        </div>
        <div class="form-group">
            <label for="country">Pays</label>
            <input type="text" class="form-control" id="nom" name="country">
        </div>
        <div class="form-group">
            <label for="joueur">Continent</label>
            <input type="text" class="form-control" id="nom" name="continent">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>