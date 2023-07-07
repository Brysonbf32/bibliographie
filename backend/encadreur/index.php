<?php
include('../../config/databases.php'); 
error_reporting(0);
session_start();
$idsessio=$_SESSION['id_utilis'];
$admincokies=$_COOKIE['alluser_email'];
if(isset($admincokies)){
    $connecterrh=$my_bd->prepare("SELECT * FROM utilisateur WHERE Email_utilis=?");
    $connecterrh->execute(array($admincokies));
    $connecterrh->rowCount();
    $checkrh=$connecterrh->fetch();
    if($checkrh >0){
        $access=$checkrh['role_utilis'];
		$idfo=$checkrh['id_utilis'];
        $usernamerh=$checkrh['Nom_utilis'];
        $passwordrh=$checkrh['Password_utilis'];
        $mailrh=$checkrh['Email_utilis'];
        $rolerh=$checkrh['role_utilis'];
        $image=$checkrh['img_util'];

    }
    else{
        header('location: index.php');
    }
}
if($my_bd == true){
	if(isset($admincokies) and !empty($idsessio)){
		require('view/index.view.php');
	}
	else
	{
		header('location: ../../logout.php');
	}
}
?>