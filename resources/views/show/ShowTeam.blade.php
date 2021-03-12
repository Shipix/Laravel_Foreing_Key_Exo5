<div class="container mt-5">
    <div class="d-flex align-items-center">
        <H1 class=" m-3">Nom</H1>
        <h4 class=" m-3">Pay</h4>
        <h4 class=" m-3">Ville</h4>
        <h4 class=" m-3">Nombre de joueur</h4>
    </div>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Rôle</th>
          </tr>
        </thead>
        <tbody>
            {{-- for each --}}
          <tr>
            <th scope="row">id</th>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Rôle</td>
            <td><a class="btn btn-success" href="">Show</a></td> 
          </tr>
            {{-- for each --}}
        </tbody>
    </table>
</div>