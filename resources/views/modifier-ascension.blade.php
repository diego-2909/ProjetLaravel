<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'une ascension</title>
</head>

<body>
    <h1>Modification d'un ascension</h1>
    <form method="POST" action="{{ route('ascension.update', [$ascension->code_Sommets,$ascension->code_Abris]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="code_Sommets">Nom :</label>
            <input type="text" id="code_Sommets" name="code_Sommets" value="{{ $ascension->code_Sommets }}">
        </div>
        <div>
            <label for="code_Abris">Prénom :</label>
            <input type="text" id="code_Abris" name="code_Abris" value="{{ $ascension->code_Abris }}">
        </div>
        <div>
            <label for="email_Guides">Adresse e-mail :</label>
            <input type="difficulte_Ascension" id="email_Guides" name="difficulte_Ascension" value="{{ $ascension->difficulte_Ascension }}">
        </div>
        <div>
            <label for="motdepasse_Guides">Mot de passe :</label>
            <input type="duree_Ascension" id="duree_Ascension" name="duree_Ascension" value="{{ $ascension->duree_Ascension }}">
        </div>
        <button type="submit">Modifier</button>
    </form>
</body>

</html>