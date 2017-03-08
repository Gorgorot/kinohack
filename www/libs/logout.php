<?php
session_start();
    unset ($_SESSION['mes']);
	$_SESSION['yes_enter']=0;
    unset ($_SESSION['login']);
    header("Location: ".$_SERVER['HTTP_REFERER']);
?>