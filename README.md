# Projet ABC Legremain
## Contexte
Dans le cadre de nos études, nous avons du réaliser un site web pour un artisant en utilisant le framework symfony et les différentes librairies qui l'accompagnent. 
## Configuration
Avant toute chose, clonnez le projet sur votre machine.<br>
Tapez `composer install` dans votre terminal pour installer les différents vendors.<br>
Ouvrez XAMPP<br>
Tapez `php bin/console doctrine:migrations:migrate` dans votre terminal afin de récupérer la base de donnée<br>
Tapez `php bin/console doctrine:fixtures:load`dans votre terminal afin de charger les fixtures. <br>
Si vous rencontrez des problèmes, essayez la commande suivante `php bin/console doctrine:schema:update --force`<br>
## Utilisation
Commencez par taper dans votre terminal `symfony serve`<br>
Pour pouvoir utiliser notre site, rendez-vous <a href="https://127.0.0.1:8000/acceuil/new">ici</a> puis cliquez sur le bouton `Save`<br>
Une fois cela fait, rendez-vous <a href="https://127.0.0.1:8000/">ici</a><br>
Pour avoir accès aux différentes parties du site, nous avons créé des utilisateurs :<br>
  -ADMIN  : <br>
email : yahya_admin@example.com<br>
mdp   : 1234<br>
  -USER : <br>
email : lucas_user@example.com<br>
mdp   : 1234<br>
Vous avez également la possibilité de créer des comptes pour vous balader en tant qu'USER et accéder à certaines de nos fonctionnalités<br>
