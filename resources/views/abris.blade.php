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
    <h4 class="titreactivite">Liste des abris</h4>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Type</th>
                <th scope="col">altitude</th>
                <th scope="col">places</th>
                <th scope="col">Prix/nuit</th>
                <th scope="col">Prix/Repas</th>
                <th scope="col">Tel. Gardien</th>
                <th scope="col">Code vallées</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abris as $abri)
            <tr>
                <th scope="row">{{ $abri->code_Abris }}</th>
                <td>{{ $abri->nom_Abris }}</td>
                <td>{{ $abri->type_Abris }}</td>
                <td>{{ $abri->altitude_Abris }}</td>
                <td>{{ $abri->places_Abris }}</td>
                <td>{{ $abri->prixNuit_Abris }}</td>
                <td>{{ $abri->prixRepas_Abris }}</td>
                <td>{{ $abri->telGardien_Abris }}</td>
                <td>{{ $abri->code_Vallees }}</td>
                <td><a href="/abris/modifier/{{ $abri->code_Abris }}">Modifier</a></td>
                <td><a href="/abris/supprimer/{{ $abri->code_Abris }}">Supprimer</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>

</html>