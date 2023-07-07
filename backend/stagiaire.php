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


// if(isset($_POST['ajouter'])){
//     $nomstag=htmlspecialchars($_POST['input_nomstagiare']);
//     $domaine=htmlspecialchars($_POST['input_domaine']);
//     $datanaista=htmlspecialchars($_POST['input_datenaissa']);
//     $mailsta=htmlspecialchars($_POST['input_email']);
//     $matricule=htmlspecialchars($_POST['input_matri']);
//     $unive=htmlspecialchars($_POST['input_univ']);
//     // $image=htmlspecialchars($_POST['input_image']);
//     $sexe=htmlspecialchars($_POST['input_sexe']);
//     if(isset($nomstag) and !empty($domaine) and !empty($datanaista) and !empty($mailsta) and !empty($matricule) and !empty($unive) and !empty($sexe)){
//         $recupdata=$my_bd->prepare("SELECT * FROM tbl_etudiant WHERE Email_Etu=? AND Matricule_Etu=?");
//         $recupdata->execute(array($mailsta,$matricule));
//         $recupdata->rowCount();
//         $checkdata=$recupdata->fetch();
//         if($checkdata >0){

//         }
//         else{
//             $file_name=$_FILES['input_image']['name'];
//             $file_extension=strrchr($file_name, ".");
//             $file_tmp_name=$_FILES['input_image']['tmp_name'];
//             $path='../photos/'.'-'.$file_name;
//             $extension_allowed=array('.jpg','.png','.jpeg');
//             if(in_array($file_extension,$extension_allowed)){
//             if(move_uploaded_file($file_tmp_name, $path)){
//             $insert_sta=$my_bd->prepare("INSERT INTO tbl_etudiant(id_domaine,Nom_Etu,date_nai,Email_Etu,Matricule_Etu,univ_etu,Image_Etu,sexe_etu)VALUE(?,?,?,?,?,?,?,?)");
//             $insert_sta->execute(array($domaine,$nomstag,$datanaista,$mailsta,$matricule,$unive,$path,$sexe));
//         }
//     }
// }
//     }
// }
// if(isset($_POST['modifier'])){
//     $idstag=htmlspecialchars($_POST['id_stag']);
//     $nomstag=htmlspecialchars($_POST['input_nomstagiare']);
//     $domaine=htmlspecialchars($_POST['input_domaine']);
//     $datanaista=htmlspecialchars($_POST['input_datenaissa']);
//     $mailsta=htmlspecialchars($_POST['input_email']);
//     $matricule=htmlspecialchars($_POST['input_matri']);
//     $unive=htmlspecialchars($_POST['input_univ']);
//     // $image=htmlspecialchars($_POST['input_image']);
//     $sexe=htmlspecialchars($_POST['input_sexe']);
//     if(isset($idstag)){
//         $logs=$my_bd->prepare("SELECT * FROM tbl_etudiant WHERE id_etu=?");
// 		$logs->execute(array($idstag));
// 		$logs->rowCount();
// 		$checks=$logs->fetch();
//         if($checks >0){
//             $file_name=$_FILES['input_image']['name'];
//             $file_extension=strrchr($file_name, ".");
//             $file_tmp_name=$_FILES['input_image']['tmp_name'];
//             $path='../photos/'.'-'.$file_name;
//             $extension_allowed=array('.jpg','.png','.jpeg');
//             if(in_array($file_extension,$extension_allowed)){
//             if(move_uploaded_file($file_tmp_name, $path)){
//             $update_sta=$my_bd->prepare("UPDATE tbl_etudiant SET id_domaine=?,Nom_Etu=?,date_nai=?,Email_Etu=?,Matricule_Etu=?,univ_etu=?,Image_Etu=?,sexe_etu=? WHERE id_etu='$idstag'");
//             $update_sta->execute(array($domaine,$nomstag,$datanaista,$mailsta,$matricule,$unive,$path,$sexe));
//         }
//     }
//     }
// }
// }

if(isset($_POST['delete'])){
    $idstag=htmlspecialchars($_POST['id_stag']);
    if(isset($idstag)){
        $recupdeletdata=$my_bd->prepare("SELECT * FROM tbl_etudiant WHERE id_etu=?");
        $recupdeletdata->execute(array($idstag));
        $recupdeletdata->rowCount();
        $check=$recupdeletdata->fetch();
        if($check >0){
            $deleteuser=$my_bd->prepare("DELETE FROM tbl_etudiant WHERE id_etu=?");
            $deleteuser->execute(array($idstag));
        }

    }
}

if($my_bd){
    if(isset($admincokies) and !empty($idsessio)){
        require_once('view/stagiaire.view.php');
    }
    else{
        header('location: ../logout.php');
    }
}

?>