# Besti-blog - site de microblogging dédié aux animaux

Le projet consiste à développer une plateforme de *micro-blogging* de photos, type Instagram. 
Less utilisateurs peuvent :
- créer des posts associant une image et un texte,
- les retrouver regroupés au sein d’une page personnelle,
- voir les posts des autres membres.
Ils disposent également pour cela : 
- d’une page de connexion,
- d’une page de profil éditable.

## Groupe de 3 personnes - 6 jours

Eda OZDEMIR - Thalia WOODS - Ghislaine AYBRAM

## Aperçu du projet

*La page d'accueil du blog*
![App Screenshot](/public/images/page_accueil_non_connecte.png)

*Une page de profil de l'utilisateur connecté*
![App Screenshot](/public/images/page_profil_connecte_site.png)

*Un formulaire d'ajout de post*
![App Screenshot](/public/images/formulaire_nouveau_post_mobile.png)

*Une page présentant les personnes auxquelles l'utilisateur est abonné*
à venir

## Tech Stack

- **Langages:** PHP, HTML, CSS, SQL
- **Framework / Library:** Laravel, Tailwind
- **Database:** PostgreSQL
- **Environnement:** Docker

## Fonctionnalités ajoutées

- [X] utilisation d'un framework full-stack (Laravel),
- [X] utilisation d'un framework CSS (Tailwind),
- [X] conception d'une base de données relationnelle (PostgreSQL),
- [X] page d'inscription et de connexion,
- [X] page principale qui regroupe les posts de tous les utilisateurs,
- [X] page de profil éditable avec informations utilisateur (avatar, biographie, nombre de posts / de followers / de personnes suivies) et l'ensemble des posts de l'utilisateur connecté (avec possibilité de suppression des posts),
- [X] page listant les membres auxquels l’utilisateur connecté est abonné,
- [X] page utilisateur sur le même format que la page de profil mais non éditable,
- [X] formulaire de création de nouveaux posts associant une image, un titre et un texte,
- [X] gestion de l'authentification (via Laravel Breeze),
- [X] génération de fausses données (via DatabaseSeeder),


## Reste à implémenter

- [ ] implémenter les tests (objectif = au moins 50% de couverture de tests automatisés),
- [ ] implémenter une pagination à la liste des posts,
- [ ] rendre la barre de recherche fonctionnelle (filtre avec les champs description des posts, nom / biographie de l'utilisateur),
- [ ] terminer la fonctionnalité des likes (ajout et suppresion des likes),
- [ ] ajout de commentaires sous les posts (par les utilisateurs connectés),
- [ ] ajout de hashtags qui donnent lieu à une recherche du terme lorsque l’on clique dessus,
- [ ] implémenter un lazy loading,
- [ ] terminer la fonctionnalité d'abonnement de personnes (ajout et suppresion des abonnements),
- [ ] création d'un feed personnel (page listant uniquement les posts des membres auxquels l’utilisateur est abonné),

      
## Lancement du projet

Lancement serveur :

```bash
php artisan serve --port=8080
```
