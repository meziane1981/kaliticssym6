# Kalitics
Exercice de développement Symfony4Exercice de développement Symfony 4
## Table des matières
<!-- * [Informations générales](#informations-générales) -->
* [Technologies](#technologies)
* [Installation](#installation)
* [Paramétrage de la base de données](#paramétrage-BDD)
* [Création des tables](#Création-des-tables)
* [Mise en place des templates et des assets CSS et JS](#Mise-en-place-des-templates-et-des-assets-CSS-et-JS)
* [Démarrage](#démarrage)
* [Versions](#versions)
* [Auteur](#auteur)
## Technologies
Symfony 6
php 8.1.0

## Instalation 
* Versions de Symfony LTS 
1. par la commande 
```
symfony new --full Kalitics --version=4.4
```
2. Installer toutes les dépendances composer du projet : 
```
composer install
```
## paramétrage de la base de données
1. Les informations de connexion s'inscrivent dans le fichier .env situé à la racine du projet Voici la ligne de ce fichier qui correspond à cette connexion
```
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7&charset=utf8mb4""
DATABASE_URL="mysql://root:@127.0.0.1:3306/kalitics"
```
2. Après avoir mis à jour le fichier .env, nous procédons à la création de la base de données en entrant la commande suivante
```
php bin/console doctrine:database:create
```

## Création des tables
1. Création de l'entité Utilisateurs Chantiers Pointages
       - Pour créer une entité, nous exécutons la commande suivante :
```
php bin/console make:entity
```
2. Générez une nouvelle migration :
```
php bin/console make:migration
```
3. exécute la migrations
```
php bin/console doctrine:migrations:migrate
```
## Mise en place des templates et des assets CSS et JS
1. crée un controller MainController
```
 symfony console make:controller MainController
```
2. installer la dépendance suivante
```
composer require doctrine/annotations
```
## Installation des Forms
1.  installer la fonctionnalité de formulaire 
```
composer require symfony/form
```
2. Création des formulaires Chantiers, Pointages , Utilisateurs 
```
composer require symfony/form
```
