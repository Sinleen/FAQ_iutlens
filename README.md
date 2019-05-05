# Foire aux Questions de l'IUT de Lens

Projet réalisé en 8 heures en groupe de 5 personnes (utilisation de la méthode AGILE)
Rôle attribué : Scrum master

### Les fonctionnalités

- Système de login / register avec roles (Admin / User)
- Liste de toutes les questions avec la date et l'utilisateur qui l'a créée
- Possibilité pour l'admin de supprimer des questions dans la liste des questions validées
- Fonction de recherche (dans la liste des questions)
- Ajout d'une question (qui apparait dans la liste une fois celle-ci répondue par un admin dans Manage Questions) (requiert l'authentification)
- Management des questions (pour répondre aux questions ou en supprimer si elles ne sont pas pertinentes) (requiert l'authentification et le groupe Admin)
- Page d'aide aux utilisateurs

Quand un utilisateur veut s'inscrire, il est par défaut dans le groupe User.

### Logs de connexion

- Compte utilisateur : {email: user@example.com, passwd: secret}
- Compte administrateur : {email: admin@example.com, passwd: secret}


### Lancement de l'application

- ajouter et configurer un .env à partir du .env.example
- composer install
- php artisan migrate:fresh --seed
- php artisan serve
