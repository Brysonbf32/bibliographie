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
        $usernamerh=$checkrh['Nom_utilis'];
        $passwordrh=$checkrh['Password_utilis'];
        $mailrh=$checkrh['Email_utilis'];
        $image=$checkrh['img_util'];
        $rolerh=$checkrh['role_utilis'];

        
        $recupada=$my_bd->query(" SELECT * FROM tbl_projets");
        if($recupada->rowCount() >0){
            while($checkda=$recupada->fetch()){
                //$iddo=$checkda['dr_id'];
             }
            }
    }
    else{
        header('location: index.php');
    }
}
if(isset($_POST['ajouter'])){
    $titre=htmlspecialchars($_POST['input_titre']);
    $domaine=htmlspecialchars($_POST['input_domaine']);
    $datedb=htmlspecialchars($_POST['input_datedb']);
    $datefn=htmlspecialchars($_POST['input_datefn']);
    $descri=htmlspecialchars($_POST['input_desc']);
    if(isset($titre) and !empty($domaine) and !empty($datedb) and !empty($datefn) and !empty($descri)){
        $recupdata=$my_bd->prepare("SELECT * FROM tbl_projets WHERE id_domaine=? AND nom_projet=?");
        $recupdata->execute(array($domaine,$titre));
        $recupdata->rowCount();
        $checkdata=$recupdata->fetch();
        if($checkdata >0){
            ?>
            <script>
                alert("Ce Projet exist deja");
            </script>
            <?php
        }
        else{
            if($datefn <= $datedb){
                $dateregl="Date debut ne peut pas etre superieure ou egale au date fin ";
            }
            else{
                $file_name=$_FILES['input_image']['name'];
                $file_extension=strrchr($file_name, ".");
                $file_tmp_name=$_FILES['input_image']['tmp_name'];
                $path='../image/'.$file_name;
                $extension_allowed=array('.jpg','.png','.jpeg');
                if(in_array($file_extension,$extension_allowed)){
                if(move_uploaded_file($file_tmp_name, $path)){
                    $file_proreali=$_FILES['input_projetrealise']['name'];
                    $file_extension=strrchr($file_proreali, ".");
                    $file_tmp_name=$_FILES['input_projetrealise']['tmp_name'];
                    $path='../image/'.$file_proreali;
                    $extension_allowed=array('.pdf','.zip');
                    if(in_array($file_extension,$extension_allowed)){
                    if(move_uploaded_file($file_tmp_name, $path)){
                $insert_sta=$my_bd->prepare("INSERT INTO tbl_projets(id_domaine,nom_projet,datedb_pro,datefn_pro,image_pro,projet_realise,Description_pro)VALUE(?,?,?,?,?,?,?)");
                $insert_sta->execute(array($domaine,$titre,$datedb,$datefn,$file_name,$file_proreali,$descri));
            }
        }
    }
}
            }
            
}
    }
}
if(isset($_POST['modifier'])){
    $idpro=htmlspecialchars($_POST['idpro']);
    $titre=htmlspecialchars($_POST['input_titre']);
    $domaine=htmlspecialchars($_POST['input_domaine']);
    $datedb=htmlspecialchars($_POST['input_datedb']);
    $datefn=htmlspecialchars($_POST['input_datefn']);
    $descri=htmlspecialchars($_POST['input_desc']);
    if(isset($idpro)){
        $logs=$my_bd->prepare("SELECT * FROM tbl_projets WHERE id_projet=?");
		$logs->execute(array($idpro));
		$logs->rowCount();
		$checks=$logs->fetch();
        if($checks >0){
            if($datefn <= $datedb){
                $dateregl="Date debut ne peut pas etre superieure ou egale au date fin ";
            }
            else{
            $file_name=$_FILES['input_image']['name'];
            $file_extension=strrchr($file_name, ".");
            $file_tmp_name=$_FILES['input_image']['tmp_name'];
            $path='../photos/'.'-'.$file_name;
            $extension_allowed=array('.jpg','.png','.jpeg');
            if(in_array($file_extension,$extension_allowed)){
            if(move_uploaded_file($file_tmp_name, $path)){
            $update_sta=$my_bd->prepare("UPDATE tbl_projets SET id_domaine=?,nom_projet=?,datedb_pro=?,datefn_pro=?,image_pro=?,Description_pro=? WHERE id_projet='$idpro'");
            $update_sta->execute(array($domaine,$titre,$datedb,$datefn,$path,$descri));
            }
    }
    }
}
}
}

if(isset($_POST['delete'])){
    $idpro=htmlspecialchars($_POST['idpro']);
    if(isset($idpro)){
        $recupdeletdata=$my_bd->prepare("SELECT * FROM tbl_projets WHERE id_projet=?");
        $recupdeletdata->execute(array($idpro));
        $recupdeletdata->rowCount();
        $check=$recupdeletdata->fetch();
        if($check >0){
            $deleteuser=$my_bd->prepare("DELETE FROM tbl_projets WHERE id_projet=?");
            $deleteuser->execute(array($idpro));
        }

    }
}

if($my_bd == true){
	if(isset($admincokies) and !empty($idsessio)){
		require('view/projet.view.php');
	}
	else
	{
		header('location: ../../logout.php');
	}
}
?>
?>