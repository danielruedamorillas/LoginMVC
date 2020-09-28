<?php
include '../Model/user.php';
include '../Model/conexion.php';
$femail=$_POST['femail'];
$fpassword=$_POST['fpassword'];
//echo "El email es {$femail} <br>";
//echo "La contraseña es {$fpassword}";
//Crea el objeto a traves de la clase
$user=new User($femail, $fpassword);
echo $user->getEmail();
echo $user->getPassword();

$sql="SELECT * FROM tbl_user WHERE email=? AND password=?";
$smt=$pdo->prepare ($sql);
$smt->bindParam (1,$femail);
$smt->bindParam (2,$fpassword);
$smt->execute();
$numpersons=$smt->rowCount();
if($numpersons==1){
    header("location:../View/home.php");
}
else{
    header("location:../View/vista_login.html");
}