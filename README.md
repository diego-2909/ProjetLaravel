
# Diego CORTES - Marion SERRENI - Klervi LE MONTREER

------------------------------------------------------

Pour la partie back-office en **Laravel**, ayant un système d'authentification qui hashe les mots de passe, on ne peut pas le récupérer via la base de données. Nous avons donc crée deux comptes de test pour se connecter :

Un compte Admin :

Adresse e-mail : admin@gmail.com
Mot de passe : 123laravel


Un compte Utilisateur ( n'a accès à rien) :
Adresse e-mail : user@gmail.com
Mot de passe : 123laravel


# Procédure pour créer un Admin :

- Lancer le site
- Appuyer sur Register en haut à droite
- mettre le nom, l'adresse mail et le mot de passe
- S'enregistrer.

Nous avons mit par défaut que chaque utilisateur enregistré est un utilisateur ( trop simple d'accéder aux paramètrage d'admin).

Il faut donc :

- Aller dans la base de données.
- Dans la table Users, Basculer le rôle du compte créé à "Admin".

Plus qu'à se déconnecter, se reconnecter, et il sera possible d'accéder au panneau d'administration.

