<?php
try{
    $my_bd=NEW PDO('mysql:host=localhost;dbname=bibliographie','root','');
}
catch(Exception $e){
    header('location: ../error.php');
}
?>