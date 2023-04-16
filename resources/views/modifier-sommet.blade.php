<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un sommet</title>
</head>

<body>
    @extends('layouts.app')
    @section('content')
    <h1>Modification d'un sommet</h1>
    <form method="POST" action="{{ route('sommets.update', $sommet->code_Sommets) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nom_Sommets">Nom :</label>
            <input type="text" id="nom_Sommets" name="nom_Sommets" value="{{ $sommet->nom_Sommets }}">
        </div>
        <div>
            <label for="altitude_Sommets">Prénom :</label>
            <input type="text" id="altitude_Sommets" name="altitude_Sommets" value="{{ $sommet->altitude_Sommets }}">
        </div>
        <button type="submit">Modifier</button>
    </form>
    @endsection
</body>

</html>