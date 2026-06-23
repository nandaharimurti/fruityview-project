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

    // REGISTER
    if (isset($_POST['action']) && $_POST['action'] == 'register') {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $dob = trim($_POST['dob'] ?? '');
        $address = trim($_POST['address'] ?? '');
        $zip = trim($_POST['zip'] ?? '');

        if (empty($name) || empty($email) || empty($password) || empty($phone) || empty($dob) || empty($address) || empty($zip)) {
            header('Content-Type: application/json');
            http_response_code(422);
            echo json_encode([
                'success' => false,
                'message' => 'Semua kolom harus diisi.'
            ]);
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header('Content-Type: application/json');
            http_response_code(422);
            echo json_encode([
                'success' => false,
                'message' => 'Email tidak valid.'
            ]);
            exit;
        }

        if (strlen($password) < 8) {
            header('Content-Type: application/json');
            http_response_code(422);
            echo json_encode([
                'success' => false,
                'message' => 'Password harus minimal 8 karakter.'
            ]);
            exit;
        }

        $users = $userModel->getAllUsers() ?: [];
        foreach ($users as $user) {
            if (isset($user['email']) && $user['email'] === $email) {
                header('Content-Type: application/json');
                http_response_code(409);
                echo json_encode([
                    'success' => false,
                    'message' => 'Email sudah terdaftar. Silakan masuk.'
                ]);
                exit;
            }
        }

        $createdUser = $userModel->createUser([
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'phone' => $phone,
            'dob' => $dob,
            'address' => $address,
            'zip' => $zip,
            'created_at' => date('c')
        ]);

        if ($createdUser) {
            header('Content-Type: application/json');
            echo json_encode([
                'success' => true,
                'message' => 'Pendaftaran berhasil. Silakan login.',
                'redirect' => '/app/Views/login/login.php'
            ]);
        } else {
            header('Content-Type: application/json');
            http_response_code(500);
            echo json_encode([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan data pengguna.'
            ]);
        }
        exit;
    }
}
