<?php
require_once "connection.php";
$msg="";
if(isset($_POST['upload'])){
    $categorie = $_POST['categorie'];
$target="assets/images/". md5(uniqid(time())). basename($_FILES['image']['name']);
   $text=$_POST['nume'];
    $sql="INSERT INTO atestat(nume, categorie, imagine)VALUES('$text','$categorie','$target')";
    mysqli_query($con,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
       header('location:ura.php');
    }else{
        $msg="Vai! Vai! Vai!!!";
    }
}