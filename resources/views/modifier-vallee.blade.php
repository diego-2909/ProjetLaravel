<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un vallee</title>
</head>

<body>
    <h1>Modification d'un vallee</h1>
    <form method="POST" action="{{ route('vallees.update', $vallee->code_Vallees) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nom_Vallees">Nom :</label>
            <input type="text" id="nom_Vallees" name="nom_Vallees" value="{{ $vallee->nom_Vallees }}">
        </div>
        <button type="submit">Modifier</button>
    </form>
</body>

</html>