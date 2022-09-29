<?php
namespace models;

use models\base\SQL;

class LoginModel extends SQL
{
    public function __construct()
    {
        parent::__construct('users', 'idUsers');
    }

    public function connexion($nom,$mdp)
    {
        $stmt = $this->pdo->prepare("SELECT idUsers FROM {$this->tableName} WHERE Login = ? and mdp = PASSWORD(?) LIMIT 1");
        $stmt->execute([$nom,$mdp]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function verifLogin($nom)
    {
        $stmt = $this->pdo->prepare("SELECT idUsers FROM {$this->tableName} WHERE Login = ? LIMIT 1");
        $stmt->execute([$nom]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function verifMdp($mdp)
    {
        $stmt = $this->pdo->prepare("SELECT idUsers FROM {$this->tableName} WHERE mdp = PASSWORD(?) LIMIT 1");
        $stmt->execute([$mdp]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function New($nom,$mdp)
    {
        $stmt = $this->pdo->prepare("INSERT INTO `users`( `Login`, `mdp`) VALUES (?,PASSWORD(?))");
        $stmt->execute([$nom,$mdp]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}