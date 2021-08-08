
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='media/style.css'>

</head>
<body>
<?php
if($_COOKIE['user'] == ''):
?>
    <section>
        <div class="menu">
            <button id="go" href="php/reg.php" >Регистрация</button>
            <form action="includes/auth.php" id="register" method="post" class="login-box">
            <h1 id="Register">Регистрация</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input id="userreg" name="login" type="text" placeholder="Логин">
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input id="passreg" name="password" type="password" placeholder="Пароль">
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input id="repeat" name="repeat" type="password" placeholder="Повтор пароля">
            </div>
            <input type="submit" class="go"  value="Зарегистрироваться">
            </form>
        </div>
            <div class="menu">

            <button id="login">Войти</button>
            <form action="includes/db.php" id="Login" method="post" class="login-box">
                <h1 id="login1">Войти в аккаунт</h1>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input id="userreg" name="login" type="text" placeholder="Логин">
                </div>
                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input id="passreg" name="password" type="password" placeholder="Пароль">
                </div>
                <input type="submit" class="go" id="go" value="Войти">
            </form>

        </div>
    </section>
<?php else: ?>
    <section id="User">
    <h1 id="user">Привет <?=$_COOKIE['user']?>!<span><a id="exit" href="includes/exit.php"><h3>Выйти</h3></a></span></h1>
        <a href="includes/function.php" id="delete">Удалить пользователя!</a>
    </section>
<? endif;?>
    <script src='js/main.js'></script>
</body>
</html>