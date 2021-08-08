<?php
$db = new mysqli('localhost', 'root', 'root', 'user' );


$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

$passrepeat = filter_var(trim($_POST['repeat']),
    FILTER_SANITIZE_STRING);


$result = $db->query("SELECT * FROM `users` WHERE `login` = '$login'");
$user = $result->fetch_assoc();
if (count($user) != 0){
    echo '<p>Такой пользоваьель уже есть!</p>
       <a href="../index.php">На главную</a>';
    exit();
}
else if (mb_strlen($login) < 2 || mb_strlen($login) > 8) {
    exit();
}
else if(mb_strlen($pass) < 1 || mb_strlen($pass) > 10)
{
    exit();
}
else if ($pass != $passrepeat){
    exit();
}



/*
if(!$_POST || !$_POST['password'] || !$_POST['login'] || !$_POST['repeat']){
	echo 'Вы заполнили не все поля! ';
}else{
	if($_POST['password']!=$_POST['password1']){
		echo 'Пароли не совпадают! ';
	}

	foreach ($logins as $login){
	    if($_POST['login']==$login['login'])
	    {
	        echo 'Такой логин уже существует, введите другой! ';
	    }
	}
}*/

$pass = md5($pass. "3213dfdfdfd");

$db->query("INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$pass')");
$db->close();

header('Location: /	PHP/');

