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
    <h4 class="titreactivite">Liste des guides</h4>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">Mot de passe</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guides as $guide)
            <tr>
                <th scope="row">{{ $guide->code_Guides }}</th>
                <td>{{ $guide->nom_Guides }}</td>
                <td>{{ $guide->prenom_Guides }}</td>
                <td>{{ $guide->email_Guides }}</td>
                <td>{{ $guide->motdepasse_Guides }}</td>
                <td><a href="/guides/modifier/{{ $guide->code_Guides }}">Modifier</a></td>
                <td><a href="/guides/supprimer/{{ $guide->code_Guides }}">Supprimer</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>

</html>