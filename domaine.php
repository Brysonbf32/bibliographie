<?php
include('config/databases.php');
error_reporting(0);
session_start();
$admincokies=$_COOKIE['alluser_email']; 
$idsessio=$_SESSION['id_utilis'];
if($_GET['domaine_projets']){
        $iddomaine=$_GET['domaine_projets'];
        if(isset($iddomaine)){
                $domaine=$my_bd->prepare("SELECT * FROM tbl_domaine WHERE id_domaine=?");
                $domaine->execute(array($iddomaine));
                $domaine->rowCount();
                $checkdo=$domaine->fetch();
                if($checkdo >0){
                        $dom_name=$checkdo['nom_domaine'];
                }
                else{

                }
        }
}
if(isset($_POST['ajouter'])){
        $nom_cli=htmlspecialchars($_POST['nom_cli']);
        $prenom_cli=htmlspecialchars($_POST['prenom_cli']);
        $phone_cli=htmlspecialchars($_POST['phone_cli']);
        $mail_cli=htmlspecialchars($_POST['mail_cli']);
        $age_cli=htmlspecialchars($_POST['age_cli']);
        $univ_cli=htmlspecialchars($_POST['univ_cli']);
        $nivo_cli=htmlspecialchars($_POST['nivo_cli']);
        $domaine_cli=htmlspecialchars($_POST['domaine_cli']);
        if(isset($nom_cli) and !empty($mail_cli) and !empty($phone_cli)){
            $recupdata=$my_bd->prepare("SELECT * FROM tbl_client WHERE email_cli=? AND phone_cli=?");
            $recupdata->execute(array($mail_cli,$phone_cli));
            $recupdata->rowCount();
            $checkdata=$recupdata->fetch();
            if($checkdata >0){
                ?>
                <script>
                    alert("Deja enregistrer");
                </script>
                <?php
            }
            else{
                $etat_inscriptio=1;
                $insertdata=$my_bd->prepare("INSERT INTO tbl_client(nom_cli,prenom_cli,phone_cli,email_cli,age_cli,university_cli,niveau_cli,domaine_cli,etat_inscri)VALUES(?,?,?,?,?,?,?,?,?)");
                $insertdata->execute(array($nom_cli,$prenom_cli,$phone_cli,$mail_cli,$age_cli,$univ_cli,$nivo_cli,$domaine_cli,$etat_inscriptio));

            }
        }
}

if(isset($my_bd)){
        require('view/domaine.view.php');
}

?>