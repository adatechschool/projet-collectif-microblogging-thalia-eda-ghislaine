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
![App Screenshot](/react-app/src/assets/images/page_accueil.jpg)

*Une page de profil de l'utilisateur connecté*
![App Screenshot](/react-app/src/assets/images/page_details_produit.jpg)

*Un formulaire d'ajout de post*
![App Screenshot](/react-app/src/assets/images/page_admin.jpg)

*Une page présentant les personnes auxquelles l'utilisateur est abonné*
![App Screenshot](/react-app/src/assets/images/formulaire_creation_compte.jpg)

## Tech Stack

- **Langages:** PHP, SQL
- **Framework / Library:** Laravel
- **Serveur:** Node.js, Express
- **Database:** PostGreSQL

## Fonctionnalités ajoutées

- [X] utilisation d'un framework (React),
- [X] utilisation d'une bibliothèque CSS (Bootstrap),
- [X] conception d'une base de données non relationnelle (MongoDB),
- [X] utilisation d'un framework pour la gestion de la base de données (Mongoose),
- [X] page principale qui regroupe les meubles en vente,
- [X] encarts produits cliquables regroupant une photo, le type de meuble, le prix et un bouton pour l’acheter,
- [X] page détails produits regroupant une série de photos du meuble et les informations (type, prix, dimensions, couleurs, matières et un bouton d'achat),
- [X] page de connexion (non fonctionnelle),
- [X] page d'inscription utilisateurs (non fonctionnelle) avec email / mot de passe / types de meubles recherchés,
- [X] sécurisation des mots de passe (hashage),
- [X] page de gestion des produits présentant la liste des meubles,
- [X] page panier (non fonctionnelle),

## Reste à implémenter

- [ ] relier la page de connexion FRONT avec l'authentification côté BACK,
- [ ] relier la page d'inscription utilisateurs avec le BACK (base de données, hashage mot de passe)
- [ ] fonctionnalité permettant de modifier les informations des produits à l'aide d'un bouton / de supprimer les produits (page de gestion des produits),
- [ ] rendre la page panier fonctionnelle,
- [ ] création d'une page qui permettent aux utilisateurs connectés de proposer des meubles à la vente,
- [ ] fonctionnalité permettant de valider les meubles proposés par les utilisateurs / ajout d'un statut pour les meubles (page de gestion de produits),
- [ ] affichage de la page principale qui s’adapte en fonction des profils utilisateurs (types de meubles cochés dans la page d'inscription en premier sur la page),
- [ ] mise en place d'un calendrier qui permette de visualiser tous les évènements créés par les personnes suivies par son compte,
      
## Lancement du projet

Lancement serveur :

```bash
php artisan serve --port=8080
```
