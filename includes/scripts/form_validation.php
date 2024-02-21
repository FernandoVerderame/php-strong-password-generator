<?php

require_once __DIR__ . '/../utils/functions.php';

// Form validation
// Get sent data
$password_length = $_GET['password-length'] ?? '';

if($password_length) {
    $is_password_valid = generate_password($password_length);

    if ($is_password_valid) {

        session_start();
        $_SESSION['password'] = $is_password_valid;

        header('Location: ./success.php');
    }

    $alert_class = 'alert-danger';
    $alert_message = ' DEVI inserire la lunghezza della password!';
}

?>