<?php
    $db = new mysqli('localhost', 'root', 'root', 'user' );
    $login = $_COOKIE['user'];
   // mysql_query("DELETE FROM `user` WHERE `login` = '$login' ");
    $result = $db->query("DELETE FROM `users` WHERE `login` = '$login' ");

    setcookie('user', $user['login'], time() - 3600, "/");
   header('Location: /PHP/');
 ?>
