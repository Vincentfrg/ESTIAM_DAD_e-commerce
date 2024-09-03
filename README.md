# PROJET - E-commerce | ESTIAM (E3 - DAD & CyberSécurité)

<h2 align="center">Technologies Utilisées</h2>
<p align="center">
    <img alt="php" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
    <img alt="css" src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>
    <img alt="javascript" src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white"/>
    <img alt="nodejs" src="https://img.shields.io/badge/Node.js-43853D?style=for-the-badge&logo=node.js&logoColor=white"/>
    <img alt="laravel" src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
    <img alt="vue" src="https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vue.js&logoColor=4FC08D"/>
    <br>
    <img alt="mysql" src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white"/>
    <img alt="tailwindcss" src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white"/>
    <img alt="github" src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white"/>
    <img alt="stripe" src="https://img.shields.io/badge/Stripe-626CD9?style=for-the-badge&logo=Stripe&logoColor=white"/>
</p>

---

**Pré-Configuration :**

Pour commencer, vous devez mettre en place un serveur **Apache/MySQL** en utilisant **WAMPServer/XAMPP/MAMPP/LAMPP**. 

Ensuite, récupérez un clone du projet et placez-le dans le répertoire par défaut utilisé pour le développement local de vos applications.

*Exemple pour XAMPP : `/htdocs`*

---

**Configuration :**

Une fois le projet cloné, avant toute chose, assurez-vous de configurer **PhpMyAdmin** (sinon, l'application ne fonctionnera pas correctement) :

Vous devrez créer **manuellement** les bases de données suivantes :
- `laravel_ecommerce`
- `laravel_vue_ecommerce`

*(Cela créera automatiquement un dossier `laravel`)*

Ensuite, placez les fichiers `.env` dans le dossier parent `/laravel-vue-ecommerce` et un autre dans `/laravel-vue-ecommerce/backend`.

*Vous trouverez ces fichiers sur le Discord du projet.*

À partir de là, ouvrez votre **Terminal** et ouvrez **4 fenêtres** :
1. Utilisez cette fenêtre pour les commandes. Placez-vous dans le répertoire du projet `C:\xampp\htdocs\ESTIAM_DAD_e-commerce\` et allez dans le dossier `/laravel-vue-ecommerce`. Exécutez les commandes suivantes dans l'ordre :
    - `composer update` : Installez tous les packages **Laravel** utilisés,
    - `npm install` : Installez tous les packages **Vue.js** utilisés,
    - `php artisan migrate:fresh --seed` : Chargez toutes les tables de données pré-configurées avec le module **Migrate Laravel** (vérifiez dans PhpMyAdmin l'apparition des tables dans `laravel_vue_ecommerce`).
    - Laissez cette fenêtre ouverte pour d'éventuelles manipulations futures.
2. Dans `C:\xampp\htdocs\ESTIAM_DAD_e-commerce\laravel-vue-ecommerce`, lancez cette commande : `php artisan serve`. Cela démarrera la première application (e-commerce) à l'adresse : `http://127.0.0.1:8000`.
3. Toujours dans le même répertoire : `C:\xampp\htdocs\ESTIAM_DAD_e-commerce\laravel-vue-ecommerce`, exécutez cette commande : `npm run dev`. Cela activera le serveur `Laravel & Vue.js`, mais il n'est pas nécessaire d'y accéder directement.
4. Dans la dernière fenêtre, accédez au dossier `/backend` via ce chemin : `C:\xampp\htdocs\ESTIAM_DAD_e-commerce\laravel-vue-ecommerce\backend` et exécutez ces deux commandes :
    - `npm install` : Installez tous les packages **Vue.js** utilisés,
    - `npm run dev` : Pour lancer la deuxième application (dashboard).

À partir de là, vous devriez voir les pages d'accueil des deux applications. Bravo, vous y êtes presque ! 🥳

---

**Premiers Pas**

Par défaut, la migration des données a restauré l'application à son état initial, avec un seul profil utilisateur **ADMINISTRATEUR**. Cela suffit pour débuter dans le projet. Voici ses identifiants :
- **Email :** `admin@dusche.com` / **Mot de Passe :** `admin123`

L'utilisation de ce profil est particulièrement utile pour le `Dashboard`, car cet environnement est réservé aux membres avec un statut admin.

Concernant le `E-Commerce`, vous pouvez effectuer les actions disponibles sur la page (Ajout aux Favoris/Panier, Connexion/Inscription, etc.).

Pour l'inscription, vous pouvez tester cette fonctionnalité. Au cours du processus, vous passerez par une étape de `Vérification de l'email`. Pour valider cette vérification, connectez-vous à mon compte `Mailtrap` (un site qui permet de gérer une fausse boîte mail). Même chose pour la `Réinitialisation du mot de passe`.

**Informations Supplémentaires**

Les produits présents dans l'application `E-Commerce` sont gérés dans l'application `Dashboard`. Vous avez la possibilité d'ajouter, de supprimer, de modifier, etc.

Concernant les profils créés, vous pouvez les vérifier dans les tables `users` ou `customers`.

---

**Des Questions ? Contactez-moi !**

<p align="center">
    <a href="mailto: maquenhem.jonathan@gmail.com">
        <img alt="email" src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white"/>
    </a>
    <a href="#">
        <img alt="discord" src="https://img.shields.io/badge/Discord-7289DA?style=for-the-badge&logo=discord&logoColor=white"/>
    </a>
</p>
