# Africa-gèo

## Description

Ce projet permet de gérer les pays africains et leurs villes clés, avec la possibilité d’ajouter, modifier, supprimer et afficher des informations sur ces pays et villes. site web inclut une base de données relationnelle avec les entités suivantes : Pays et Villes. Le but de ce projet est d’offrir une interface dynamique pour gérer les pays africains et leurs villes avec des actions CRUD (Create, Read, Update, Delete).

## User Stories

### En tant que concepteur, je vais réaliser un diagramme de cas d’utilisation pour identifier les fonctionnalités principales :

1. **Ajout d’un pays africain avec ses villes clés, population, et langues officielles.**
2. **Modification ou suppression des informations d’un pays existant.**
3. **Affichage des pays du continent AFRIQUE avec leurs détails.**

### En tant que concepteur, je vais modéliser la base de données avec un diagramme relationnel (ERD) illustrant :

1. **Les relations entre les pays et leurs villes phares.**
2. **Les attributs des entités (population, langue, etc.).**

### En tant que développeur Back-End, je vais concevoir une base de données relationnelle pour gérer les entités suivantes :

- **Pays :** ID, Nom, Population, Langue(s) officielle(s), Continent
- **Villes :** ID, Nom, Description, Type (capitale ou autre)

### En tant que développeur Back-End, je vais écrire des requêtes SQL permettant de :

1. **Ajouter un pays africain avec ses informations (population, langue, villes).**
2. **Modifier les détails d’un pays ou d’une ville.**
3. **Supprimer un pays et toutes ses villes associées.**
4. **Afficher la liste des pays africains et leurs détails.**

### En tant que développeur Back-End, je vais développer un script en PHP pour :

1. **Effectuer les actions CRUD (Create, Read, Update, Delete) sur les pays et leurs villes.**
2. **Connecter la base de données pour afficher dynamiquement les informations des pays.**

## Fonctionnalités

- **Ajout de pays et villes :** Permet aux administrateurs d'ajouter un pays et ses villes dans la base de données.
- **Modification des informations :** Permet de modifier les informations sur un pays ou une ville.
- **Suppression des pays et villes :** Permet de supprimer un pays et toutes les villes associées.
- **Affichage des pays africains :** Affiche la liste des pays africains avec leurs informations détaillées.

## Installation

### Prérequis

- PHP 7.4 ou version supérieure
- Serveur MySQL ou MariaDB
- Serveur Web (Apache ou Nginx)

### Étapes d'installation

1. Clonez ce dépôt sur votre machine locale :
   ```bash
   git clone https://github.com/votre-utilisateur/nom-du-repository.git
