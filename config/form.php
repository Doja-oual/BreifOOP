
<?php
//Inclure le fichier de la classe Database
require_once 'config.php';

// Créer une instance de la classe Database
$database = new Database();

// Obtenir la connexion
$db = $database->getConnection();

// Vérifier si la connexion est établie
if ($db) {
    echo "Connexion réussie!";
} else {
    echo "Erreur de connexion.";
}
?>