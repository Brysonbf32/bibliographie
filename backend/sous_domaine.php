<?php
include('../config/databases.php');
error_reporting(0);
session_start();
$admincokies=$_COOKIE['alluser_email'];
$idsessio=$_SESSION['id_utilis'];
if(isset($admincokies)){
    $connecterrh=$my_bd->prepare("SELECT * FROM utilisateur WHERE Email_utilis=?");
    $connecterrh->execute(array($admincokies));
    $connecterrh->rowCount();
    $checkrh=$connecterrh->fetch();
    if($checkrh >0){
       // $access=$checkrh['role_utilis'];
        $userid=$checkrh['id_utilis'];
        $usernamerh=$checkrh['Nom_utilis'];
        $passwordrh=$checkrh['Password_utilis'];
        $mailrh=$checkrh['Email_utilis'];
        $image=$checkrh['img_util'];

        $rolerh=$checkrh['role_utilis'];
    }
    else{
        header('location: ../logout.php');
    }
}

if(isset($_POST['ajouter'])){
    $depart=htmlspecialchars($_POST['input_depart']);
    $titrecours=htmlspecialchars($_POST['input_sousdo']);
    $langage=htmlspecialchars($_POST['input_langage']);
    if(isset($titrecours) and !empty($depart) and !empty($langage)){
        $recupdata=$my_bd->prepare("SELECT * FROM tbl_sous_domaine WHERE nom_sdo=? AND id_domaine=?");
        $recupdata->execute(array($titrecours,$depart));
        $recupdata->rowCount();
        $checkdata=$recupdata->fetch();
        if($checkdata >0){
            ?>
            <script>
                alert("Ce Sous Domaine existe deja");
            </script>
            <?php
        }
        else{
            $insertdata=$my_bd->prepare("INSERT INTO tbl_sous_domaine(nom_sdo,id_domaine,langage)VALUES(?,?,?)");
            $insertdata->execute(array($titrecours,$depart,$langage));
        }
    }
}
if(isset($_POST['modifier'])){
    $id_soudo=htmlspecialchars($_POST['id_soudo']);
    $depart=htmlspecialchars($_POST['input_depart']);
    $titrecours=htmlspecialchars($_POST['input_sousdo']);
    $langage=htmlspecialchars($_POST['input_langage']);
        $logs=$my_bd->prepare("SELECT * FROM tbl_sous_domaine WHERE id_sdo=?");
		$logs->execute(array($id_soudo));
		$logs->rowCount();
		$checks=$logs->fetch();
        if($checks >0){
            $modifier=$my_bd->prepare("UPDATE tbl_sous_domaine SET nom_sdo=?,id_domaine=?,langage=? WHERE id_sdo='$id_soudo'");
            $modifier->execute(array($titrecours,$depart,$langage));
        }

}
if(isset($_POST['suprimer'])){
    $id_soudo=htmlspecialchars($_POST['id_soudo']);
    if(isset($id_soudo)){
        $recupdeletdata=$my_bd->prepare("SELECT * FROM tbl_sous_domaine WHERE id_sdo=?");
        $recupdeletdata->execute(array($id_soudo));
        $recupdeletdata->rowCount();
        $check=$recupdeletdata->fetch();
        if($check >0){
            $deleteuser=$my_bd->prepare("DELETE FROM tbl_sous_domaine WHERE id_sdo=?");
            $deleteuser->execute(array($id_soudo));
        }

    }
}
if($my_bd){
    if(isset($admincokies) and !empty($idsessio)){
        require_once('view/sous_domaine.view.php');
    }
    else{
        header('location: ../logout.php');
    }
}

?>