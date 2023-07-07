<?php
include('../config/databases.php');
//error_reporting(0);
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
        $rolerh=$checkrh['role_utilis'];
        $image=$checkrh['img_util'];

    }
    else{
        header('location: ../logout.php');
    }
}
if(isset($_POST['ajouter'])){
    $nomdomaine=htmlspecialchars($_POST['input_nomdomai']);
    $descrdomain=htmlspecialchars($_POST['input_descri']);
    if(isset($nomdomaine) and !empty($descrdomain)){
        $recupdata=$my_bd->prepare("SELECT * FROM tbl_domaine WHERE nom_domaine=?");
        $recupdata->execute(array($nomdomaine));
        $recupdata->rowCount();
        $checkdata=$recupdata->fetch();
        if($checkdata >0){
            ?>
            <script>
                alert("Departement existe deja");
            </script>
            <?php
        }
        else{
            $file_name=$_FILES['input_image']['name'];
            $file_extension=strrchr($file_name, ".");
            $file_tmp_name=$_FILES['input_image']['tmp_name'];
            $path='image/'.$file_name;
            $extension_allowed=array('.jpg','.png','.jpeg');
            if(in_array($file_extension,$extension_allowed)){
            if(move_uploaded_file($file_tmp_name, $path)){
            $insertdata=$my_bd->prepare("INSERT INTO tbl_domaine(nom_domaine,desc_domaine,image_dom)VALUES(?,?,?)");
            $insertdata->execute(array($nomdomaine,$descrdomain,$file_name));
        }
    }
}
    }
}
if(isset($_POST['modifier'])){
    $iddo=htmlspecialchars($_POST['id_dome']);
    $nomdomaine=htmlspecialchars($_POST['input_nomdomai']);
    $descrdomain=htmlspecialchars($_POST['input_descri']);
    if(isset($nomdomaine) and !empty($descrdomain)){
        $logs= $my_bd->prepare("SELECT * FROM tbl_domaine WHERE id_domaine=?");
		$logs->execute(array($iddo));
		$logs->rowCount();
		$checks=$logs->fetch();
        if($checks >0){
            $updateuser=$my_bd->prepare("UPDATE tbl_domaine SET nom_domaine=?,desc_domaine=? WHERE id_domaine ='$iddo'");
            $updateuser->execute(array($nomdomaine,$descrdomain));
        }
    }
}
if(isset($_POST['suprimer'])){
    $iddo=htmlspecialchars($_POST['id_dome']);
    if(isset($iddo)){
        $recupdeletdata=$my_bd->prepare("SELECT * FROM tbl_domaine WHERE id_domaine =?");
        $recupdeletdata->execute(array($iddo));
        $recupdeletdata->rowCount();
        $check=$recupdeletdata->fetch();
        if($check >0){
            $deleteuser=$my_bd->prepare("DELETE FROM tbl_domaine WHERE id_domaine =?");
            $deleteuser->execute(array($iddo));
        }

    }
}

if($my_bd){ 
    if(isset($admincokies) and !empty($idsessio)){
        require_once('view/domain.view.php');
    }
    else{
        header('location: ../logout.php');
    }
}
?>