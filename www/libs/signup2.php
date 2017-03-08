<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "films_hack") or die(mysqli_error());
$mysqli->query('SET names "utf8"');
$data=$_POST;
$data2=$_SESSION;
if(isset($data['register']))
{
    if(trim($data['login'])!='')
    {
        if(strlen($data['login'])>3) 
        {
            if(strlen($data['password'])>6)
            {
                if(trim($data['password'])!='') 
                {
                    if($data['password2'] == $data['password'])
                    {
                        $enter_mail=$data['email'];
                        $mails=$mysqli->query("SELECT email FROM users WHERE email='$enter_mail'");
                        $row=mysqli_fetch_array($mails);
                        if($row[0]!=$data['email'])
                        {
                            $next=true;
                            $enter_login=$data['login'];
                            $logins=$mysqli->query("SELECT logins FROM users");
                            do
                            {
                                if($enter_login==$row[0])
                                {
                                    $next=false;
                                    break;
                                }                              
                            }while($row=mysqli_fetch_array($logins));
                            
                            if($next==true)
                            {
                                $login=$_POST['login'];
                                $password=md5($_POST['password']);
                                $email=$_POST['email'];
                                $query=$mysqli->query("INSERT INTO users VALUES ('$login','$password','$email','')");
                                $_SESSION['reg_sucssess']=1;
                            }
                            else
                            {
                                $_SESSION['msg']="Пользователь с таким логином уже зарегистрирован!";  
                            }
                        }
                        else
                        {
                            $_SESSION['msg']="Пользователь с такой почтой уже зарегистрирован!";
                        }
                    }
                    else
                    {
                        $_SESSION['msg']="Введенные пароли не совпадают!";   
                    }
                }
                else
                {
                    $_SESSION['msg']="Некорректный пароль!";
                }
            }
            else
            {
               $_SESSION['msg']="Слишком короткий пароль!";
            }
        }   
        else
        {
            $_SESSION['msg']="Слишком короткий логин!";    
        }
    }
    else
    {
        $_SESSION['msg']="Некорректный логин!";
    }
    if(isset($_SESSION['msg']))
    {
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
</head>

<body>
<div id="inform"></div>
<div id="message"></div>
<form action="signup2.php" method="POST">
<p>
<p><strong>Ваш логин</strong></p><input type="text" name="login"/></p>
<p>
<p><strong>Ваш e-mail</strong></p><input type="email" name="email"/></p>
<p>
<p><strong>Ваш пароль</strong></p><input type="password" name="password" /></p>
<p>
<p><strong>Повторите пароль</strong></p><input type="password" name="password2" /></p>
<p><input type="submit" name="register" /></p>
</form>
</body>
<script type="text/javascript">
var reg="<?php echo $_SESSION['reg_sucssess']; ?>";
console.log(reg);
console.log(123123);
if(reg=="1")
{
    var time=5;
    document.getElementById('inform').innerHTML="Регистрация завершена!";
    document.getElementById('message').innerHTML="Вы будете перенаправлены на главную страницу через:"+time;
    var interval_id=setInterval(function(){
        time--;
        if (time!=0)
        {
            document.getElementById('message').innerHTML="Вы будете перенаправлены на главную страницу через:"+time;
            
        }
        else if (time==0)
        {
            document.location.href="http://kinohack.den/main_1.php";
        }
        else
        {
            clearInterval(interval_id);
        }
    },1000);
}
</script>
</html>