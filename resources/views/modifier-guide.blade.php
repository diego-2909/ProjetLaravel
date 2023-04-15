<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un guide</title>
</head>

<body>
    <h1>Modification d'un guide</h1>
    <form method="POST" action="{{ route('guides.update', $guide->code_Guides) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nom_Guides">Nom :</label>
            <input type="text" id="nom_Guides" name="nom_Guides" value="{{ $guide->nom_Guides }}">
        </div>
        <div>
            <label for="prenom_Guides">Prénom :</label>
            <input type="text" id="prenom_Guides" name="prenom_Guides" value="{{ $guide->prenom_Guides }}">
        </div>
        <div>
            <label for="email_Guides">Adresse e-mail :</label>
            <input type="email" id="email_Guides" name="email_Guides" value="{{ $guide->email_Guides }}">
        </div>
        <div>
            <label for="motdepasse_Guides">Mot de passe :</label>
            <input type="password" id="motdepasse_Guides" name="motdepasse_Guides" value="{{ $guide->motdepasse_Guides }}">
        </div>
        <button type="submit">Modifier</button>
    </form>
</body>

</html>