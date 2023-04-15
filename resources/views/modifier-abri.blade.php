<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form method="POST" action="{{ route('abris.update', $abri->code_Abris) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="nom_Abris">Nom de l'abri :</label>
        <input type="text" id="nom_Abris" name="nom_Abris" value="{{ $abri->nom_Abris }}">
    </div>
    <div>
        <label for="type_Abris">Type de l'abri :</label>
        <input type="text" id="type_Abris" name="type_Abris" value="{{ $abri->type_Abris }}">
    </div>
    <div>
        <label for="altitude_Abris">Altitude de l'abri :</label>
        <input type="text" id="altitude_Abris" name="altitude_Abris" value="{{ $abri->altitude_Abris }}">
    </div>
    <div>
        <label for="places_Abris">Nombre de places :</label>
        <input type="text" id="places_Abris" name="places_Abris" value="{{ $abri->places_Abris }}">
    </div>
    <div>
        <label for="prixNuit_Abris">Prix par nuit :</label>
        <input type="text" id="prixNuit_Abris" name="prixNuit_Abris" value="{{ $abri->prixNuit_Abris }}">
    </div>
    <div>
        <label for="prixRepas_Abris">Prix du repas :</label>
        <input type="text" id="prixRepas_Abris" name="prixRepas_Abris" value="{{ $abri->prixRepas_Abris }}">
    </div>
    <div>
        <label for="telGardien_Abris">Téléphone du gardien :</label>
        <input type="text" id="telGardien_Abris" name="telGardien_Abris" value="{{ $abri->telGardien_Abris }}">
    </div>
    <div>
        <label for="code_Vallees">Code de la vallée :</label>
        <input type="text" id="code_Vallees" name="code_Vallees" value="{{ $abri->code_Vallees }}">
    </div>
    <button type="submit">Modifier</button>
</form>

</html>