<div class="container mt-5" action="/add-membre" method="POST" >
    @csrf
    <form>
        <div class="form-group">
          <label for="nom">Nom de team</label>
          <input type="texte" class="form-control" id="nom" name="name">
        </div>
        <div class="form-group">
            <label for="pays">Pays</label>
            <select class="form-control" id="pays" name="country">
                <option>Belgique</option>
              <option>France</option>
              <option>Luxembourg</option>
            </select>
        </div>
        <div class="form-group">
            <label for="city">Ville</label>
            <select class="form-control" id="city" name="city">
              <option>city 1</option>
              <option>city 2</option>
              <option>city 3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="joueur">Nombres de joueurs</label>
            <select class="form-control" id="joueur" name="player">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>