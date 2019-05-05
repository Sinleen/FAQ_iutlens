@extends('layout.master')

@section('content')
    <h1>Guide de l'utilisateur</h1>

    <p>Ce site consiste en une foire aux questions sur les services proposés par l'IUT de Lens<br>
    Il est composé de 3 grandes parties :</p>

    <ul>
        <li>Liste questions</li>
        <li>Ajout questions</li>
        <li>Manage questions</li>
    </ul>
    <hr>
    <p>La page Liste questions rassemble toutes les questions avec leur réponse séparées par catégories
    <br><br>
    La page Ajout questions permet à un utilisateur de soumettre une nouvelle question à la base de données
    <br><br>
    La page Manage questions est réservée aux Admins : elle permet de vérifier les questions ajoutées par les utilisateurs et de leur fournir une réponse pour qu'elles s'affichent dans la liste, ou bien de simplement les supprimer</p>
    <p id="page-name" style="opacity: 0">Aide</p>
@endsection