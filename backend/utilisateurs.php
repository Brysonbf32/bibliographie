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
        $image=$checkrh['img_util'];
        $mailrh=$checkrh['Email_utilis'];
        $rolerh=$checkrh['role_utilis'];
    }
    else{
        header('location: ../logout.php');
    }
}
if(isset($_POST['ajouter'])){
    $us_username=htmlspecialchars($_POST['input_nonutili']);
    $us_password=htmlspecialchars($_POST['input_password']);
    $us_mail=htmlspecialchars($_POST['input_mail']);
    $us_role=htmlspecialchars($_POST['input_role']);
    if(isset($us_username) and !empty($us_password) and !empty($us_mail) and !empty($us_role)){
        $recupdata=$my_bd->prepare("SELECT * FROM utilisateur WHERE Email_utilis=?");
        $recupdata->execute(array($us_mail));
        $recupdata->rowCount();
        $checkdata=$recupdata->fetch();
        if($checkdata >0){
            ?>
            <script>
                alert("Utilisateur exist deja");
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
            $insert_utili=$my_bd->prepare("INSERT INTO utilisateur(Nom_utilis,Password_utilis,Email_utilis,img_util,role_utilis)VALUE(?,?,?,?,?)");
            $insert_utili->execute(array($us_username,$us_password,$us_mail,$file_name,$us_role));
        }
    }
}}
}
if(isset($_POST['modifier'])){
    $us_userid=htmlspecialchars($_POST['input_idutili']);
    $us_username=htmlspecialchars($_POST['input_nonutili']);
    $us_password=htmlspecialchars($_POST['input_password']);
    $us_mail=htmlspecialchars($_POST['input_mail']);
    $us_role=htmlspecialchars($_POST['input_role']);
    if(isset($us_username) and !empty($us_password) and !empty($us_mail) and !empty($us_role)){
        $logs= $my_bd->prepare("SELECT * FROM utilisateur WHERE id_utilis=?");
		$logs->execute(array($us_userid));
		$logs->rowCount();
		$checks=$logs->fetch();
        if($checks >0){
            $updateuser=$my_bd->prepare("UPDATE utilisateur SET Nom_utilis=?,Password_utilis=?,Email_utilis=?,role_utilis=? WHERE id_utilis='$us_userid'");
            $updateuser->execute(array($us_username,$us_password,$us_mail,$us_role));
        }
    }

}

if(isset($_POST['delete'])){
    $us_id=htmlspecialchars($_POST['input_user_id']);
    if(isset($us_id)){
        $recupdeletdata=$my_bd->prepare("SELECT * FROM utilisateur WHERE id_utilis=?");
        $recupdeletdata->execute(array($us_id));
        $recupdeletdata->rowCount();
        $check=$recupdeletdata->fetch();
        if($check >0){
            $deleteuser=$my_bd->prepare("DELETE FROM utilisateur WHERE id_utilis=?");
            $deleteuser->execute(array($us_id));
        }

    }
}

if(isset($my_bd)){
    if(isset($admincokies) and !empty($idsessio))
    {
        require_once('view/utilisateurs.view.php');
    }
    else{
        header('location: ../logout.php');
    }
}

?>