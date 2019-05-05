@extends('layout.master')

@section('content')


    <center><h2> {{$question -> question}}</h2></center>
    <form action="{{route('createReponse', $question->id)}}" method="POST">
        {{csrf_field()}}
        <center><div class="form-group row">
            <div class="col-md-3"></center>
                <textarea name="reponse" id="reponse" rows="1" class="form-control"
                          value="{{ old('reponse') }}" placeholder="Ajouter une réponse"></textarea>
            </div>
        </div></center>
        </div>
        <div class="text-center">
            <button class="btn btn-success" type="submit">Valide</button>
        </div>
    </form>
    <p id="page-name" style="opacity: 0">Modifier Etat</p>
@endsection