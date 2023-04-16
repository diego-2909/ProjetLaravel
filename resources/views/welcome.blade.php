<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .liste {
            list-style: none;
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;
        }

        .liste>li {
            margin: 20px 15px 0px 15px;
        }

        .liste>li>a {
            padding: 10px 30px 10px 30px;
        }

        .titreactivite {
            margin-top: 50px;
            margin-left: 30px;
        }
    </style>
</head>


<body>
    @extends('layouts.app')
    @section('content')
    <ul class="liste">
        <li><a class="btn btn-outline-primary" href="/abris" role="button">Abris</a></li>
        <li><a class="btn btn-outline-primary" href="/guides" role="button">Guides</a></li>
        <li><a class="btn btn-outline-primary" href="/sommets" role="button">Sommets</a></li>
        <li><a class="btn btn-outline-primary" href="/vallees" role="button">Vallées</a></li>
        <li><a class="btn btn-outline-primary" href="/ascensions" role="button">Ascensions</a></li>
    </ul>

    <h4 class="titreactivite">Liste des Randonnées</h4>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre de personne</th>
                <th scope="col">Début</th>
                <th scope="col">Fin</th>
                <th scope="col">N° du Guide</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($randonnees as $randonnee)
            <tr>
                <th scope="row">{{ $randonnee->code_Randonnees }}</th>
                <td>{{ $randonnee->nbPersonnes_Randonnees }}</td>
                <td>{{ $randonnee->dateDebut_Randonnees }}</td>
                <td>{{ $randonnee->dateFin_Randonnees }}</td>
                <td>{{ $randonnee->code_Guides }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endsection
</body>

</html>