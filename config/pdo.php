<?php 
// Inclure le fichier de configuration contenant les constantes de connexion à la base de données
require_once __DIR__ . '/var.php';

// Construire la chaîne de connexion (DSN) pour PDO en utilisant les constantes définies dans 'var.php'
$dsn = "mysql:host=" . APP_DB_HOST . ";port=3306" . APP_DB_PORT . ";dbname=" . APP_DB_NAME;

// Créer une nouvelle instance de PDO pour se connecter à la base de données
// Utiliser le DSN, le nom d'utilisateur et le mot de passe définis dans 'var.php'
$pdo = new PDO($dsn, APP_DB_USER, APP_DB_PASSWORD);


?>