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
        $rolerh=$checkrh['role_utilis'];
        $image=$checkrh['img_util'];
        
        $recupada=$my_bd->query(" SELECT * FROM tbl_projets");
        if($recupada->rowCount() >0){
            while($checkda=$recupada->fetch()){
                //$iddo=$checkda['dr_id'];
                $dtdebi=$checkda['datedb_pro'];
                $datfin=$checkda['datefn_pro'];
                $today_d=new DateTime($dtdebi);
                $expi_d=new Datetime($datfin);
        
                $year_d=$today_d->diff($expi_d);
                $month_d=$today_d->diff($expi_d);
                $day_d=$today_d->diff($expi_d);
                $yyy=$year_d->format('%y');
                $mmm=$year_d->format('%m');
                $ddd=$year_d->format('%d');

             }
            }
    }
    else{
        header('location: index.php');
    }
}
if(isset($_POST['ajouter'])){
    $datepu=htmlspecialchars($_POST['input_datepub']);
    $etudi=htmlspecialchars($_POST['input_etudi']);
    $proje=htmlspecialchars($_POST['input_proje']);
    // $travail=htmlspecialchars($_POST['input_tavail']);
    if(isset($datepu) and !empty($etudi) and !empty($proje)){
        $recupdata=$my_bd->prepare("SELECT * FROM tbl_stagiaire_projet WHERE id_etu=? AND id_projet=?");
        $recupdata->execute(array($etudi,$proje));
        $recupdata->rowCount();
        $checkdata=$recupdata->fetch();
        if($checkdata >0){
            ?>
            <script>
                alert("Cette affectation exist deja");
            </script>
            <?php
        }
        else{
            $insert=$my_bd->prepare("INSERT INTO tbl_stagiaire_projet(id_etu,id_projet,date_pub)VALUE(?,?,?)");
            $insert->execute(array($etudi,$proje,$datepu));
            }
        }
    }

if(isset($_POST['modifier'])){
    $idpub=htmlspecialchars($_POST['id_pub']);
    $datepu=htmlspecialchars($_POST['input_datepub']);
    $etudi=htmlspecialchars($_POST['input_etudi']);
    $proje=htmlspecialchars($_POST['input_proje']);
    if(isset($idpub)){
        $logs=$my_bd->prepare("SELECT * FROM tbl_stagiaire_projet WHERE id_sta_pro=?");
		$logs->execute(array($idpub));
		$logs->rowCount();
		$checks=$logs->fetch();
        if($checks >0){
            $file_name=$_FILES['input_tavail']['name'];
            $file_extension=strrchr($file_name, ".");
            $file_tmp_name=$_FILES['input_tavail']['tmp_name'];
            $path='../../photos/Allprojet'.'-'.$file_name;
            $extension_allowed=array('.zip','.pdf');
            if(in_array($file_extension,$extension_allowed)){
            if(move_uploaded_file($file_tmp_name, $path)){
            $update_sta=$my_bd->prepare("UPDATE tbl_stagiaire_projet SET id_etu=?,id_projet=?,date_pub=?,travaile_pro=? WHERE id_sta_pro='$idpub'");
            $update_sta->execute(array($etudi,$proje,$datepu,$path));
            }
    }}}
    }
if(isset($_POST['delete'])){
    $idpub=htmlspecialchars($_POST['id_pub']);
    if(isset($idpub)){
        $recupdeletdata=$my_bd->prepare("SELECT * FROM tbl_stagiaire_projet WHERE id_sta_pro=?");
        $recupdeletdata->execute(array($idpub));
        $recupdeletdata->rowCount();
        $check=$recupdeletdata->fetch();
        if($check >0){
            $deleteuser=$my_bd->prepare("DELETE FROM tbl_stagiaire_projet WHERE id_sta_pro=?");
            $deleteuser->execute(array($idpub));
        }

    }
}

if($my_bd == true){
	if(isset($admincokies) and !empty($idsessio)){
		require('view/proje_etudiant.view.php');
	}
	else
	{
		header('location: ../../logout.php');
	}
}
?>
?>