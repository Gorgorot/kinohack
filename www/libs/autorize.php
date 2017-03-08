<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "films_hack") or die(mysqli_error());
$mysqli->query("SET NAMES 'utf8'");
$data=$_POST;
if(isset($data['enter']))
{
    $e_pass=md5($data['pass']);
    $e_login=$data['login'];
    $res=$mysqli->query("SELECT logins FROM users WHERE logins='$e_login'");
    $users_login=mysqli_fetch_array($res);
    if ($e_login==$users_login[0])
    {
        $res1=$mysqli->query("SELECT password FROM users WHERE logins='$e_login'");
        $users_password=mysqli_fetch_array($res1);
        if($e_pass==$users_password[0])
        {
            $_SESSION['msg']="Доброй пожаловать, $e_login";
            $_SESSION['login']=$e_login;
            $_SESSION['yes_enter']=1;
            $_SESSION['inform']="Вы вошли как: ";
  		    header("Location: http://kinohack.den/main_1.php");
        }
        else
        {
            $_SESSION['msg']="Неверный логин или пароль!";
        }        
    }
    else
    {
        $_SESSION['msg']="Неверный логин или пароль!";
    }
    if(isset($_SESSION['msg']))
    {
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }
}
?>
<form action="autorize.php" method="post">
<label>Ваш логин</label><br /><input type="text" name="login" /><br /><br />
<label>Ваш пароль</label><br /><input type="password" name="pass"/><br />
<input type="submit" value="Войти" name="enter"/>

</form>