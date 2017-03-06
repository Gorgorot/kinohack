<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "films_hack") or die(mysqli_error());
$mysqli->query('SET names "utf8"');
$data=$_POST;
$data2=$_SESSION;
if(isset($data['register']))
{
	$bad=false;
    $errors=array();
	$result1 = $mysqli->query ("SELECT * FROM users"); 
	$myrow1 = mysqli_fetch_array($result1);
	if ($result1)
        {   
        
            do
            {
            $mail = $myrow1[1];
			if($_POST['email']==$mail)
			{
				$_SESSION['error_mail']=1;
				$bad=true;
			}
             }while($myrow1 = mysqli_fetch_array($result1));
        }
            else {echo "<p>Error</p>";}
	if(strlen($data['login'])<3)
	{
		$bad=true;
		$errors='Слишком короткий логин';
	}
    $result1 = $mysqli->query ("SELECT * FROM users"); 
	$myrow1 = mysqli_fetch_array($result1);
	if ($result1)
        {   
        
            do
            {
            $e_login = $myrow1[3];
			if($_POST['login']==$e_login)
			{
				$bad=true;
				$_SESSION['error_login']=1;
			}
             }while($myrow1 = mysqli_fetch_array($result1));
        }
            else {echo "<p>Error</p>";}
	if(strlen($data['password'])<6)
	{
		$bad=true;
		$errors='Слишком короткий логин';
	}
    if(trim($data['login'])=='')
    {
        $bad=true;
        $errors[]='Введите логин'; 
    }
    if(trim($data['email'])=='')
    {
	  $bad=true;
      $errors[]='Введите e-mail'; 
    }
    if($data['password']=='')
    {
	  $bad=true;
      $errors[]='Введите пароль'; 
    }
    if($data['password2'] != $data['password'])
    {
		$bad=true;
    }
	
    if(!$bad)
    {
        $login=$_POST['login'];
        $password=md5($_POST['password']);
        $email=$_POST['email'];
        $query=$mysqli->query("INSERT INTO users VALUES ('$login','$password','$email','')");
        session_start();
        $_SESSION['reg_sucssess']=1;
        header("Location: http://kinohack.den/libs/signup.php");
	}

    else{
        session_start();
        $_SESSION['errors']=$errors;
        header("Location: http://kinohack.den/libs/signup.php?fatal_reg=true");
    }
}
if(isset($data2['errors']))
{
   echo "Всё плохо<br>";
   $count=count($data2['errors']);
   $arr=$data2['errors'];
   for ($i=0;$i<$count;$i++)
   {
        echo $arr[$i];
   }
   unset($_SESSION);   
}

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
</head>

<body>
<div id="inform"></div>
<div id="message"></div>
<form action="signup.php" method="POST">
<p>
<p><strong>Ваш логин</strong></p><input type="text" name="login" value=" <?php echo @$data['login'];?>" /></p>
<p>
<p><strong>Ваш e-mail</strong></p><input type="email" name="email" value="<?php echo @$data['email'];?>" /></p>
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