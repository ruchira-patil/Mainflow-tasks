<?php
session_start();

$users = [
    'admin' => 'password123',
    'user1' => 'password456'
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: index.html');
        exit;
    } else {
        echo 'Invalid username or password';
    }
}
?>
