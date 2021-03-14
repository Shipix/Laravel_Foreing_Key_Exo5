<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('partials.header')
    <section>
        <div class="container mt-5 text-center">
            <h1>2 Equipe Remplies au hasard :</h1>
            <div>
                @foreach ($teamHasard as $item)
                    <h5>{{$item->equipe}}</h5>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5 text-center">
            <h1>4 Joueurs sans équipes :</h1>
            <div>
                @foreach ($sansEquipe as $item)
                    <h5>{{$item->name}} {{$item->firstname}}</h5>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5 text-center">
            <h1>4 Joueurs avec équipes :</h1>
            <div>
                @foreach ($avecEquipe as $item)
                    <h5>{{$item->name}} {{$item->firstname}}</h5>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5 text-center">
            <h1>équipes non remplies :</h1>
            <div>
                {{-- @foreach ($collection as $item)
                    <h5></h5>
                @endforeach --}}
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5 text-center">
            <h1>équipes d'europes :</h1>
            <div>
                {{-- @foreach ($collection as $item)
                    <h5></h5>
                @endforeach --}}
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5 text-center">
            <h1>équipes hors Europe :</h1>
            <div>
                {{-- @foreach ($collection as $item)
                    <h5></h5>
                @endforeach --}}
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5 text-center">
            <h1></h1>
            <div>
                {{-- @foreach ($collection as $item)
                    <h5></h5>
                @endforeach --}}
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5 text-center">
            <h1>Joueuses féminines qui ont une équipe :</h1>
            <div>
                {{-- @foreach ($collection as $item)
                    <h5></h5>
                @endforeach --}}
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5 text-center">
            <h1>Joueurs hommes qui ont une équipe :</h1>
            <div>
                {{-- @foreach ($collection as $item)
                    <h5></h5>
                @endforeach --}}
            </div>
        </div>
    </section>
    
	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>