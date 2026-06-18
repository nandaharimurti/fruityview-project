<?php

session_start();

require_once '../Models/UserModel.php';

$userModel = new UserModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // LOGIN
    if (isset($_POST['action']) && $_POST['action'] == 'login') {

        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $users = $userModel->getAllUsers();

        foreach ($users as $id => $user) {

            if (
                $user['email'] === $email &&
                password_verify($password, $user['password'])
            ) {

                $_SESSION['user_id'] = $id;
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];

                header('Location: ../Views/home/index.php');
                exit;
            }
        }

        echo "Email atau password salah!";
    }
}