<?php

require_once __DIR__ . '/../../firebase/firebase.php';

class UserModel
{
    private $database;

    public function __construct()
    {
        global $database;
        $this->database = $database;
    }

    public function createUser($userData)
    {
        return $this->database
            ->getReference('users')
            ->push($userData);
    }

    public function getAllUsers()
    {
        return $this->database
            ->getReference('users')
            ->getValue();
    }
}