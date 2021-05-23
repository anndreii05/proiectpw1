<?php
session_start();
$user = 'admin';
$pass = 'admin';
$message="";
if((!(empty($_POST["username"])))||(!(empty($_POST["password"])))){
    if(($_POST["username"]==$user)&&($_POST["password"]==$pass)){
        if ($_POST['captcha']==$_POST['correctsum']){
        $_SESSION["username"] = $_POST["username"];
        header("Location:ura.php");
        if (isset($_POST['rememberme'])){
          setcookie('username', $_POST['username'], time()+3600);
          setcookie('password', md5($_POST['password']),time()+3600);  
        }
        else{
          setcookie('username',$_POST['username'],false);
          setcookie('password',md5($_POST['password']),false);        
        }
        }
        else{
            header("location:captcha.php");
        }
    } else {
        header("location:oops.php");
    }
}else{
    header("location:index.php");
}
echo $message;
?>