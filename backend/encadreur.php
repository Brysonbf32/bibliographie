<?php
include('../config/databases.php');
error_reporting(0);
session_start();

$admincokies=$_COOKIE['alluser_email'];
$idsessio=$_SESSION['user_id'];
if(isset($admincokies)){
    $connecterrh=$my_bd->prepare("SELECT * FROM tbl_users WHERE user_email=?");
    $connecterrh->execute(array($admincokies));
    $connecterrh->rowCount();
    $checkrh=$connecterrh->fetch();
    if($checkrh >0){
        $access=$checkrh['user_role'];
        $userid=$checkrh['user_id'];
        $usernamerh=$checkrh['user_uname'];
        $passwordrh=$checkrh['user_password'];
        $mailrh=$checkrh['user_email'];
        $image=$checkrh['img_util'];
        $rolerh=$checkrh['user_role'];
    }
    else{
        header('location: ../logout.php');
    }
}

if(isset($_POST['ajouter'])){
    $departement=htmlspecialchars($_POST['input_depart']);
    $userid=htmlspecialchars($_POST['input_iduser']);
    $nomformat=htmlspecialchars($_POST['input_nomformat']);
    $phoneformat=htmlspecialchars($_POST['input_phonformat']);
    $addressforma=htmlspecialchars($_POST['input_addrsforma']);
    $sexeformat=htmlspecialchars($_POST['input_sexeformat']);
    $niveauetuda=htmlspecialchars($_POST['input_nivetud']);
    $descripfo=htmlspecialchars($_POST['input_descform']);
    if(isset($departement) and !empty($userid) and !empty($nomformat) and !empty($phoneformat) and !empty($addressforma) and !empty($sexeformat) and !empty($niveauetuda) and !empty($descripfo)){
        $recupdata=$my_bd->prepare("SELECT * FROM tbl_encadreur WHERE nomformat=?");
        $recupdata->execute(array($nomformat));
        $recupdata->rowCount();
        $checkdata=$recupdata->fetch();
        if($checkdata >0){
            ?>
            <script>
                alert("Formateur  existe deja");
            </script>
            <?php
        }
        else{
            $insertdata=$my_bd->prepare("INSERT INTO tbl_encadreur(id_depart,user_id,nom_enca,phone_enca,address_enca,sexe_enca,nivoetud_enca,descri_enca)VALUES(?,?,?,?,?,?,?,?)");
            $insertdata->execute(array($departement,$userid,$nomformat,$phoneformat,$addressforma,$sexeformat,$niveauetuda,$descripfo));
        }
    }
}
if(isset($_POST['modifier'])){
        $idformat=htmlspecialchars($_POST['input_idformat']);
        $nomdepart=htmlspecialchars($_POST['input_depart']);
        $iduse=htmlspecialchars($_POST['input_iduser']);
        $nomforma=htmlspecialchars($_POST['input_nomformat']);
        $phonform=htmlspecialchars($_POST['input_phonformat']);
        $addresformat=htmlspecialchars($_POST['input_addrsforma']);
        $sexeformat=htmlspecialchars($_POST['input_sexeformat']);
        $nivoetufo=htmlspecialchars($_POST['input_nivetud']);
        $descform=htmlspecialchars($_POST['input_descform']);
        if(isset($nomdepart) and !empty($iduse) and !empty($nomforma) and !empty($phonform) and !empty($addresformat) and !empty($sexeformat) and !empty($nivoetufo) and !empty($descform)){
            $logs=$my_bd->prepare("SELECT * FROM tbl_encadreur WHERE id_enca=?");
            $logs->execute(array($idformat));
            $logs->rowCount();
            $checks=$logs->fetch();
            if($checks >0){
                $updateuser=$my_bd->prepare("UPDATE tbl_encadreur SET id_depart=?,user_id=?,nom_enca=?,phone_enca=?,address_enca=?,sexe_enca=?,nivoetud_enca=?,descri_enca=? WHERE id_enca='$idformat'");
                $updateuser->execute(array($nomdepart,$iduse,$nomforma,$phonform,$addresformat,$sexeformat,$nivoetufo,$descform));
            }
        }
}
if(isset($_POST['suprimer'])){
    $idfo=htmlspecialchars($_POST['id_enca']);
    if(isset($idfo)){
        $recupdeletdata=$my_bd->prepare("SELECT * FROM tbl_encadreur WHERE id_enca=?");
        $recupdeletdata->execute(array($idfo));
        $recupdeletdata->rowCount();
        $check=$recupdeletdata->fetch();
        if($check >0){
            $deleteuser=$my_bd->prepare("DELETE FROM tbl_encadreur WHERE id_enca=?");
            $deleteuser->execute(array($idfo));
        }

    }
}

if($my_bd){
    if(isset($admincokies) and !empty($idsessio)){
        require_once('view/encadreur.view.php');
    }
    else{
        header('location: ../logout.php');
    }
}
?>