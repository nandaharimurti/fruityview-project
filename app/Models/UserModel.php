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
        try {
            return $this->database
                ->getReference('users')
                ->push($userData);
        } catch (Exception $e) {
            error_log('Firebase createUser error: ' . $e->getMessage());
            return false;
        }
    }

    public function getAllUsers()
    {
        try {
            return $this->database
                ->getReference('users')
                ->getValue();
        } catch (Exception $e) {
            error_log('Firebase getAllUsers error: ' . $e->getMessage());
            return [];
        }
    }
}