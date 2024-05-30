# Projet de Site E-commerce pour une Boucherie

Ce projet est un site e-commerce développé pour une boucherie, permettant aux clients de passer des commandes en ligne. Il a été réalisé en PHP avec une base de données PostgreSQL et est hébergé sur Vercel.

## Table des matières

- [Fonctionnalités](#fonctionnalités)
- [Technologies utilisées](#technologies-utilisées)
- [Installation](#installation)
- [Configuration de la base de données](#configuration-de-la-base-de-données)
- [Déploiement sur Vercel](#déploiement-sur-vercel)
- [Tests et Maintenance](#tests-et-maintenance)
- [Contributeurs](#contributeurs)

## Fonctionnalités
- Présentation de la boucherie avec des informations sur les produits et services offerts.
- Formulaire de commande avec les champs : nom, prénom, numéro de téléphone, adresse, code postal, ville et commentaires pour la commande.
- Stockage des données utilisateurs et des commandes dans une base de données PostgreSQL.
- Affichage des catégories disponibles.
- Déploiement continu sur Vercel.

## Technologies utilisées

- PHP
- HTML/CSS
- PostgreSQL
- Vercel

## Installation

1. Clonez le dépôt GitHub :
    ```bash
    git clone https://github.com/nonolv33/site-commerce
    ```
2. Accédez au répertoire du projet :
    ```bash
    cd site-commerce
    ```
3. Assurez-vous d'avoir PHP et PostgreSQL installés sur votre machine.

## Configuration de la base de données

1. Créez la base de données PostgreSQL :
    ```sql
    CREATE DATABASE db_boucherie;
    ```
2. Créez les tables nécessaires :
    ```sql
    CREATE TABLE utilisateur (
        id_utilisateur SERIAL PRIMARY KEY,
        nom VARCHAR(50),
        prenom VARCHAR(50),
        telephone VARCHAR(15),
        adresse VARCHAR(100),
        code_postal VARCHAR(10),
        ville VARCHAR(50)
    );

    CREATE TABLE commande (
        id_commande SERIAL PRIMARY KEY,
        id_utilisateur INT REFERENCES utilisateur(id_utilisateur),
        commentaire TEXT,
        date_retrait DATE
    );

     CREATE TABLE categorie (
        id_categorie SERIAL PRIMARY KEY,
        boucherie BOOLEAN,
        charcuterie BOOLEAN,
        traiteur BOOLEAN,
        autres BOOLEAN
    );
    ```

## Déploiement sur Vercel

1. Connectez-vous à votre compte GitHub et assurez-vous que le code source du site web est dans un repository.
2. Connectez-vous à Vercel et sélectionnez le repository contenant votre projet.
3. Configurez les paramètres de déploiement, y compris la connexion à votre base de données PostgreSQL.
4. Déployez votre application en suivant les instructions de Vercel.
5. Modifiez le nom de domaine si nécessaire, tout en laissant "vercel.app" à la fin.

## Tests et Maintenance

### Tests

1. Testez chaque modification du code localement avant de la pousser sur GitHub.
2. Vérifiez le bon fonctionnement du formulaire de commande et l'insertion des données dans la base de données.
3. Assurez-vous que les pages s'affichent correctement et que les fonctionnalités du site sont opérationnelles.

### Maintenance

1. Surveillez régulièrement les journaux de Vercel pour détecter d'éventuelles erreurs.
2. Mettez à jour la documentation technique en cas de modifications majeures.
3. Sauvegardez régulièrement la base de données.


