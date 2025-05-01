# 🗂️ Laravel Task Manager

Ce projet est une application CRUD de gestion de tâches développée avec **Laravel**. L'accès à l'application est restreint aux utilisateurs authentifiés. Chaque utilisateur peut gérer uniquement ses propres tâches (ajout, modification, suppression, visualisation).

---

## 🚀 Fonctionnalités

- Authentification (inscription, connexion, déconnexion)
- Gestion complète des tâches (CRUD)
- Protection des routes avec middleware `auth`

---

## 🧪 Compte de test

Vous pouvez vous connecter avec les identifiants suivants pour tester l'application :

- **Email** : `taskmanager-admin@gmail.com`  
- **Mot de passe** : `Heaving2-Shrunk4-Flanking6-Prelaw3`

## 🛠️ Installation

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/Wanderlust-29/task-manager-laravel.git
   cd task-manager-laravel
   
2. **Installer les dépendances**
   ```bash
   composer install
   npm install && npm run dev
   
3. **Configurer l'environnement**
   ```bash
    cp .env.example .env
    php artisan key:generate
   
4. **Configurer la base de données Modifier les variables DB_* dans .env selon votre configuration locale.**

5. **Migrer les tables**
   ```bash
   php artisan migrate
   
6. **Lancer le serveur**
   ```bash
   php artisan serve