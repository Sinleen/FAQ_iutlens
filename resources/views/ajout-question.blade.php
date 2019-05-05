@extends('layout.master')

@section('content')
    <form action="{{route('postQuestion')}}" method="POST">
        {{csrf_field()}}
        <div>
            <h1 class="ajout-title"><i class="far fa-edit"></i> Ajouter votre question </h1>
        </div>
        <div class="form-group row justify-content-center ">
            <div class="col-md-10 area-question">
                <textarea rows="4" name="question" id="question" class="form-control area-style"
                          value="{{ old('question') }}" placeholder="Votre question"></textarea>
            </div>
        </div>
        <div class="text-center">
            <button class="btn bouton-valide" type="submit">Valider</button>
        </div>
    </form>
    <p id="page-name" style="opacity: 0">Ajout de question</p>
@endsection

