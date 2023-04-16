<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<style>
    .table {
        width: 80%;
    }
</style>
</head>

<body>
    @extends('layouts.app')
    @section('content')
    <h4>Liste des Randonnées</h4>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nbPersonnes_Randonnees</th>
                <th scope="col">dateDebut_Randonnees</th>
                <th scope="col">dateFin_Randonnees</th>
                <th scope="col">code_guides</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($randonnees as $randonnee)
            <tr>
                <th scope="row">{{ $randonnee->code_Randonnees }}</th>
                <td>{{ $randonnee->nbPersonnes_Randonnees }}</td>
                <td>{{ $randonnee->dateDebut_Randonnees }}</td>
                <td>{{ $randonnee->dateFin_Randonnees }}</td>
                <td>{{ $randonnee->code_guides }}</td>
                <td><a href="/randonnees/modifier/{{ $randonnee->code_randonnees }}">Modifier</a></td>
                <td><a href="/randonnees/supprimer/{{ $randonnee->code_randonnees }}">Supprimer</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>

</html>