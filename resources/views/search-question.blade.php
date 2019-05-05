@extends('layout.master')

@section('content')

    @if(count($questions) < 1 )
        <div class="alert alert-info" role="alert">
            La recherche n'a donnée aucun résultat.
        </div>
    @else
        <p> {{count($questions)}} questions trouvées</p>

        <button id="t1" onclick="myFunction('Demo1')" class="w3-button w3-block  w3-left-align">Type 1<span style="float:right">+</span></button>
        <div id="Demo1" class="w3-hide w3-animate-zoom">
            @foreach($questions as $question)
                @if($question->type == 1)
                    <li style="margin-top:20px;" class="list-group-item list-group-item-secondary">{{ $question->question }}</li>
                    <li class="list-group-item list-group-item-light">{{ $question->reponse }}</li>
                    <li class="list-group-item list-group-item-light" style="font-size:12px; font-style:italic;">Posée le {{ $question->date_creation }}</li>
                @endif
            @endforeach
        </div>

        <button id="t2"  onclick="myFunction('Demo2')" class="w3-button w3-block w3-black w3-left-align" style="margin-top:2vh;">Type 2<span style="float:right">+</span></button>
        <div id="Demo2" class="w3-hide w3-animate-zoom">
            @foreach($questions as $question)
                @if($question->type == 2)
                    <li style="margin-top:20px;" class="list-group-item list-group-item-secondary">{{ $question->question }}</li>
                    <li class="list-group-item list-group-item-light">{{ $question->reponse }}</li>
                    <li class="list-group-item list-group-item-light" style="font-size:12px; font-style:italic;">Posée le {{ $question->date_creation }}</li>
                @endif
            @endforeach
        </div>

        <button id="t3"  onclick="myFunction('Demo3')" class="w3-button w3-block w3-black w3-left-align" style="margin-top:2vh;">Type 3<span style="float:right">+</span></button>
        <div  id="Demo3" class="w3-hide w3-animate-zoom">
            @foreach($questions as $question)
                @if($question->type == 3)
                    <li style="margin-top:20px;" class="list-group-item list-group-item-secondary">{{ $question->question }}</li>
                    <li class="list-group-item list-group-item-light">{{ $question->reponse }}</li>
                    <li class="list-group-item list-group-item-light" style="font-size:12px; font-style:italic;">Posée le {{ $question->date_creation }} </li>
                @endif
            @endforeach
        </div>


        <p id="page-name" style="opacity: 0">Liste des questions</p>

        <script>
            function myFunction(id) {
                var x = document.getElementById(id);
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                    } else {
                        x.className = x.className.replace(" w3-show", "");
                    }
            }


        </script>
    @endif
@endsection


