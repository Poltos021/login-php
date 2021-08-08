<?php
$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

$pass = md5($pass. "3213dfdfdfd");

$db = new mysqli('localhost', 'root', 'root', 'user');

$result = $db->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0){
    echo '<p>Введены не верные данные!</p>
       <a href="../index.php">На главную</a>';
    exit();
}

setcookie('user', $user['login'], time() + 3600, "/");


header('Location: /PHP/');

