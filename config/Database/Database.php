<?php

namespace config\Database;

use PDO;
use PDOException;
use config\Superglobals\Environnement;

/**
 * Classe Database
 * Gère la connexion à la base de données en héritant de PDO.
 */
class Database extends PDO
{
    /**
     * Constructeur
     * Initialise la connexion à la base de données en utilisant les variables d'environnement.
     *
     * @throws PDOException En cas d'échec de la connexion.
     */
    public function __construct()
    {
        // Options de configuration PDO
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            // Initialiser l'environnement et récupérer les variables
            $env = new Environnement($_ENV);

            // Construire le DSN
            $dsn = 'mysql:host=' . $env->get("DBHOST") . ';dbname=' . $env->get('DBDATABASE') . ';charset=utf8';

            // Appeler le constructeur parent (PDO)
            parent::__construct($dsn, $env->get('DBUSERNAME'), $env->get('DBPASSWORD'), $options);
        } catch (PDOException $e) {
            // Gérer les erreurs de connexion
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }
}
