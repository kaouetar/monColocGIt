# Application Laravel : Gestion Club V1.0
![Gestion Club](https://cdn-images-1.medium.com/max/1600/1*fN6SmVkrWyBLZi4UvRHdgA.jpeg)
Une Application Laravel qui permet gérer un Espace membre utilisant MySQL, Inscription/Connexion des membres, Publication des postes/annonces avec commentaires, Blog avec les opérations CRUD géré par plusieurs admin.

**Developpé Par :**
  - KHALIKINE Noueman
  - EL BANI Ilyas
  - EL MERSS Abdelkrim
  - GHLIEL Hatim
  - FETTOUKH MOHAMED AMINE
  - BOUJIDA YASSINE

# Requis 
* `PHP >= 7.1.3`
* `OpenSSL PHP Extension`
* `PDO PHP Extension`
* `Mbstring PHP Extension`
* `Tokenizer PHP Extension`
* `XML PHP Extension`
* `Ctype PHP Extension`
* `JSON PHP Extension`

# Installation 

* `cd /NomDuDossier`

* `composer install`

* `Create a Database named "YOUR_DB_NAME" in mysql`

* `Create the .env file, from the .env.example with database "YOUR_DB_NAME"` 

* `php artisan key:generate`

* `php artisan migrate`

<img src="https://i.imgur.com/yGzJh7z.png" width="400" />

* `Done !`

# Fonctionnalités
  - Inscription/Connexion des membres.
  - Ajout/Suppression de membre.
  - Publication d'articles.
  - Commenter un article.
  - Gestion des membres et leurs activité ( via un Score ).

# A venir 
  - Ajout d'un système de vérification par email pour l'inscription des membres.
  - Ajout d'un espace de partage de fichiers.
  - Ajout de la fonctionnalité Pouce Haut / Bas pour les publications.
  - Ajout d'un compteurs de visiteurs.
  - ...

# License
This project and the underlying Laravel framework are open-sourced software licensed under the MIT license
