## Création d'un blog avec Symfony 6


## Introduction
Il s'agit d'un projet visant à créer un blog en utilisant Symfony, un framework PHP populaire. Ce projet vous permet de construire et de gérer facilement un blog simple ou complexe, avec des fonctionnalités telles que la gestion des articles, des commentaires, des utilisateurs et bien plus encore.

## Prérequis
- PHP 7.4 ou supérieur
- Composer
- Symfony CLI

## Installation
    
1. Naviguer jusqu'au répertoire du projet :
    
    cd votreprojet
    

2. Installer les dépendances :
    
    composer install
    

3. Configurer la base de données dans le fichier .env :
    
dotenv
    DATABASE_URL=mysql://votre_utilisateur_bdd:votre_mot_de_passe_bdd@votre_hote_bdd/nom_de_votre_bdd
    

4. Créer la base de données et exécuter les migrations :
    
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    

5. Lancer le projet :
    
    symfony serve
    

6. Ouvrir un navigateur et accéder à http://localhost:8000 pour voir votre blog.

## Utilisation
- Connectez-vous à l'interface d'administration en accédant à http://localhost:8000/admin.
- Utilisez l'interface d'administration pour gérer les articles, les commentaires, les utilisateurs et autres paramètres de votre blog.

## Contribution
Toute contribution est la bienvenue ! Si vous souhaitez contribuer au projet, veuillez créer une pull request et décrire clairement les modifications que vous proposez.


