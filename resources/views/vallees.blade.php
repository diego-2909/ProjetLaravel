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
    <h1>Liste des vallees</h1>
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
</body>

</html>