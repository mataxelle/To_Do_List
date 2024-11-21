<?php

namespace Config\Superglobals;

class Environnement
{
    /**
     * Tableau des variables d'environnement.
     *
     * @var array $envs
     */
    private array $envs;

    /**
     * Constructeur.
     *
     * @param array $envs Tableau des variables d'environnement.
     */
    public function __construct(array $envs)
    {
        $this->envs = $envs;
    }

    /**
     * Récupérer une variable d'environnement.
     *
     * @param string $key Clé de la variable.
     * @param mixed|null $default Valeur par défaut si la clé n'existe pas.
     * @return mixed Valeur associée à la clé ou la valeur par défaut.
     */
    public function get(string $key, mixed $default = null): mixed
    {
        // Retourne la valeur si elle existe, sinon retourne la valeur par défaut.
        return $this->envs[$key] ?? $default;
    }
}
