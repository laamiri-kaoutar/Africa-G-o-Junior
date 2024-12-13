# Jeu Éducatif Interactif - Connaissances Géographiques sur l'Afrique  

## Description  
Ce projet a pour objectif de développer un **site web éducatif interactif** permettant aux élèves d'apprendre et de tester leurs connaissances sur le continent **Afrique** : ses pays, leurs capitales, et leurs villes importantes.  

L'outil vise à enrichir le programme pédagogique en offrant une expérience ludique et interactive.  

## Fonctionnalités  
### Principales  
- **Ajout de pays africains** :  
  - Ajouter les villes clés, la population, et les langues officielles d’un pays.  
- **Modification ou suppression** des informations d’un pays existant.  
- **Affichage des pays** du continent avec leurs détails complets (capitale, population, langues, villes importantes).  

### Bonus (Facultatives)  
- **Filtres avancés** : Rechercher des pays par langue ou par population.  
- **Visualisation des données** : Générer des graphiques pour afficher des statistiques sur les pays.  
- **Option multilingue** : Permettre de changer la langue du site (français/anglais).  

## Architecture  
### Diagramme de Cas d'Utilisation  
Un diagramme UML identifie les interactions entre les utilisateurs et le système, en se concentrant sur les fonctionnalités principales.  

### Modélisation de la Base de Données  
Un diagramme relationnel (ERD) détaille :  
- Les relations entre les **pays** et leurs **villes phares**.  
- Les attributs des entités, tels que la population et les langues officielles.  

### Entités  
- **Pays** :  
  - Attributs : `ID`, `Nom`, `Population`, `Langue(s) officielle(s)`, `Continent`.  
- **Villes** :  
  - Attributs : `ID`, `Nom`, `Description`, `Type` (capitale ou autre).  

## Développement  
### Back-End  
- Base de données relationnelle conçue pour gérer les entités pays et villes.  
- Requêtes SQL pour :  
  - Ajouter, modifier, ou supprimer des pays et leurs villes.  
  - Afficher les pays africains et leurs détails.  

### Front-End  
- Interfaces utilisateur intuitives pour :  
  - Ajouter ou gérer les données des pays et villes.  
  - Afficher dynamiquement les informations des pays.  

### Langages et Technologies  
- **Base de données** : MySQL  
- **Back-End** : PHP  
- **Front-End** : HTML, CSS, JavaScript  

## Instructions d’Installation  
1. Clonez le dépôt : https://github.com/laamiri-kaoutar/Africa-G-o-Junior.git
