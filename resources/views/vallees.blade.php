<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .table {
        width: 80%;
    }
</style>
</head>

<body>
    @extends('layouts.app')
    @section('content')
    <h4 class="titreactivite">Liste des vallees</h4>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vallees as $vallee)
            <tr>
                <th scope="row">{{ $vallee->code_Vallees }}</th>
                <td>{{ $vallee->nom_Vallees }}</td>
                <td><a href="/vallees/modifier/{{ $vallee->code_Vallees }}">Modifier</a></td>
                <td><a href="/vallees/supprimer/{{ $vallee->code_Vallees }}">Supprimer</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>

</html>