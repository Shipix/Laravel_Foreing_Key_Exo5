<div class="container mt-5 ">
    <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/img/'.$show->src)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h1 class="card-title">{{$show->name}}</h1>
          <h1 class="card-title">{{$show->firstname}}</h1>
        </div>
        <ul class="list-group list-group-flush">
            <h4 class="list-group-item">Age: {{$show->age}} <h4>
            <h4 class="list-group-item">Tel: {{$show->number}}<h4>
            <h4 class="list-group-item">Mail: {{$show->mail}}<h4>
            <h4 class="list-group-item">Genre: {{$show->genders->gender}}<h4>
            <h4 class="list-group-item">Pays: {{$show->country}}<h4>
            <h4 class="list-group-item">Team: {{$show->teams->equipe}}<h4> 
            <h4 class="list-group-item">Poste: {{$show->roles->role}}<h4>
          </ul>
          <a href="#" class="btn btn-primary">Edit</a>
    </div>
</div>