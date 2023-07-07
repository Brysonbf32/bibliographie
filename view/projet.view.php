<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/style.css">
       
        <link rel="stylesheet" href="assets/frameworks/bootstrap-5.1.3-dist/css/bootstrap.min.css">
        <script type="text/css" src="assets/frameworks/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="assets/frameworks/fontawesome-free-6.2.1-web/css/all.css">
    
        <title>Bibliographie</title>
    </head>
    <body>
        <div class="  pb-1 sticky-top">
            <nav class="bannerlob navbar navbar-expand-lg container-fluid">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Biblio<span class="titremenu2">graphie</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                        <a class="nav-link active line_color" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link line_color" href="#">A Propos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link line_color" href="#">Nos Projets</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link line_color" href="#">Contact Nous</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-success butonconnect" type="submit"><a href="login.php" class="btn_connecte">&nbsp;Connectez-Vous&nbsp;</a></button>
                    </form>
                    </div>
                </div>
            </nav>
        </div>

        <div class="continer-fluid zone_bannieredomaine">
            <div class="">
                <div class="zone_contenu">
                <div class="contenu">
                    <h1>Tao Business</h1>
                    
                    <p>Bienvenue Sur notre page des projets deja realiser</p>
                </div>
                </div>
            </div>
        </div>
            <section class="py-5">
                <div class="container ">
                    <div class="row">

                        <h2 class="projet_titre py-5" >En savoir Plus sur le Projet <?=$nomprojet?></h2>
                            <div class="col-12 col-lg-6  py-2">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="card" style="width: 18rem;">
                                            <img src="backend/image/<?=$imgepro?>" class="card-img-top image" alt="...">                                    
                                            <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-lg-6"> <h5 class="card-title card_titre1"><strong>Date Publication :&nbsp;</strong> </h5></div>
                                                <div class="col-12 col-lg-6"> <h5 class="card-title card_titre1" align="right"><strong><?=$dateprojet?></strong> </h5></div>                                        
                                            </div>                                
                                            <p class="card-text"></p>

                                            <a class="btn btn-primary btn_vers" href="backend/image/<?=$projerealiser?>"><strong>Télécharger&nbsp;<i class="fa-solid fa-arrow-up"></i>&nbsp;</strong> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <h5 class=""> <strong> A propos de ce projet</strong></h5> 
                                        <p><?=$descrip?></p>
                                    </div>
                                </div>                        
                            </div>
                        <div class="col-12 col-lg-6">
                            <div class="row">
                            <?php
                                $fetchpublicatiodata=$my_bd->query("SELECT * FROM tbl_stagiaire_projet WHERE id_projet='$idprojet'");
                                if($fetchpublicatiodata->rowCount() >0){
                                    while($chedata=$fetchpublicatiodata->fetch()){
                                        $id_etu=$chedata['id_etu'];
                                        
                                        if(isset($id_etu)){
                                            $fetchprojet=$my_bd->query("SELECT * FROM tbl_etudiant WHERE id_etu='$id_etu'");
                                            $fetchprojet->rowCount();
                                            $checkproje=$fetchprojet->fetch();
                                            if($checkproje >0){
                                                $nometu=$checkproje['Nom_Etu'];
                                                $univ=$checkproje['univ_etu'];
                                                $imagetu=$checkproje['Image_Etu'];

                                            }
                                        }
                            ?>
                                <div class="col-12 col-lg-6 py-2">
                                    <div class="card" style="width: 18rem;">
                                    <img src="backend/image/<?=$imagetu?>" class="card-img-top image_carg" alt="...">                                    
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <h3 class="tittre_etu"><?=$nometu?></h3>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <h3 class="tittre_etu" align="right"><?=$univ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                }
                            ?>
                            </div>
                        </div>
                    </div>
            </section>

    </div>
    </body><br>
    <footer class="footer_web">
        <div class="row py-3">
            <div class="col-12 col-lg-6">
                <h2 class="footer_title_left">COPYRIGHT TAO BUSINESS 2023. ALL RIGHTS RESERVED.</h2>
            </div>
            <div class="col-12 col-lg-6">
                <p class="footer_title_right"><i class="fa-brands fa-whatsapp"></i>&nbsp;&nbsp; 257 61 44 73 37 / 257 61 86 74 06 &nbsp;&nbsp;<i class="fa-solid fa-envelope"></i>&nbsp;&nbsp; <a href="mailto:delsegiroelnevada243@gmail.com" > DELSEGIROELNEVADA243@GMAIL.COM</a></p>
            </div>
        </div>
</footer>

</html>
