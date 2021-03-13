<div class="container mt-5">
    <div class="d-flex align-items-center">
        <H1 class=" m-3">{{$show->equipe}}</H1>
        <h4 class=" m-3">{{$show->countries->country}}</h4>
        <h4 class=" m-3">{{$show->countries->continent}}</h4>
        <h4 class=" m-3">{{$show->number}}</h4>
    </div>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Poste</th>
            <th scope="col">Show</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($joueur as $item)
          <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->firstname}}</td>
            <td>{{$item->roles->role}}</td>
            <td><a class="btn btn-success" href="/ShowMembre/{{$item->id}}">Show</a></td> 
          </tr>
          @endforeach
        </tbody>
    </table>
</div>