@extends('layout.master')

@section('content')

    @if(count($questions) < 1)
        <div class="alert alert-warning" role="alert">
            Il n'y a actuellement pas de question sans réponse !
        </div>
    @endif

    <hr>

    @foreach($questions as $question)

        <h4> {{$question -> question}}</h4>
        <p>Posée le {{$question->date_creation}} par {{$question->user->name}}</p>
        <a href="{{route('editReponse',['id'=>$question->id])}}"><button class="manageBtn w3-button w3-tiny" style="background-color:rgb(41, 128, 185);color:white">Editer</button></a>
        <a href="{{route('deleteReponse',['id'=>$question->id])}}"><button class="manageBtn w3-button w3-tiny" style="background-color:rgb(41, 128, 185);color:white">Supprimer</button></a>


        <hr>

    @endforeach
    <p id="page-name" style="opacity: 0">Gérer les questions</p>
@endsection





