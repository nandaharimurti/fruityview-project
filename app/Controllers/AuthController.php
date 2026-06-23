<?php

session_start();

require_once '../Models/UserModel.php';

$userModel = new UserModel();
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';

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

                if ($isAjax) {
                    header('Content-Type: application/json');
                    echo json_encode([
                        'success' => true,
                        'message' => 'Login berhasil',
                        'redirect' => '../Views/home/index.php'
                    ]);
                } else {
                    header('Location: ../Views/home/index.php');
                }
                exit;
            }
        }

        if ($isAjax) {
            header('Content-Type: application/json');
            http_response_code(401);
            echo json_encode([
                'success' => false,
                'message' => 'Email atau password salah'
            ]);
        } else {
            echo "Email atau password salah!";
        }
        exit;
    }
}