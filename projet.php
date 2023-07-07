<?php
include('config/databases.php');
error_reporting(0);
session_start();
$admincokies=$_COOKIE['alluser_email'];
$idsessio=$_SESSION['id_utilis'];
if($_GET['projet_perso']){
    $idprojet=$_GET['projet_perso'];
    if(isset($idprojet)){
        $projet=$my_bd->prepare("SELECT * FROM tbl_projets WHERE id_projet=?");
        $projet->execute(array($idprojet));
        $projet->rowCount();
        $checkpro=$projet->fetch();
        if($checkpro >0){
            $nomprojet=$checkpro['nom_projet'];
            $dateprojet=$checkpro['datedb_pro'];
            $imgepro=$checkpro['image_pro'];
            $projerealiser=$checkpro['projet_realise'];
            $descrip=$checkpro['Description_pro'];

        }
    }
}

if(isset($my_bd)){
    if(isset($admincokies) and !empty($idsessio))
    {
        require_once('view/projet.view.php');
    }
    else{
        header('location: view/projet.view.php');
    }
}

?>