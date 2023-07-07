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
                        <a class="nav-link active line_color" aria-current="page" href="#">Accueil</a>
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

        <div class="continer-fluid zone_banniere py-3">
            <div class="">
                <div class="zone_contenu">
                <div class="contenu">
                    <h1>Tao Business</h1>
                    
                    <p>Bienvenue à TAO Business.</p>
                </div>
                </div>
            </div>
        </div>
        <section class="section1 py-3 bg-cl">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-4 coloffre">
                        <p class="offre">Ce que nous offrons</p>
                    </div>
                    <div class="col-12 col-lg-8 pt-4">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <p class=""><i class="fa-regular fa-square squara_icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span class="titre_offrons">STAGE ACADEMIQUE ET PROFESSIONNEL</span></p>
                                <p class="para_offrons">Nous ouvrons nos portes a tout etudiant et toute personne désirant s'ameliorée dans son domaine
                              
                                </p> <br> <br>
                                <p class=""><i class="fa-regular fa-square squara_icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span class="titre_offrons">MARKETING DIGITAL</span></p>
                                <p class="para_offrons">Offrez une meilleure visibilité à votre marque ! Nos services en marketing digital ont pour objectif d’aider les PME etTPE à développer leurs activités.</p>
                                <p class=""><i class="fa-regular fa-square squara_icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span class="titre_offrons">CONCEPTION GRAPHIQUE</span></p>
                                <p class="para_offrons">Nous vous aidons à réaliser des supports graphiques variés pour la présentation de votre projet, la vente de votre image de marque.</p>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p class=""><i class="fa-solid fa-square squara_icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span class="titre_offrons">DÉVELOPPEMENT WEB</span></p>
                                <p class="para_offrons">Nous réalisons le développement des solutions web sur-mesure : application web, sites e-commerce et des sites internet personnalisés qui reflètent votre image de marque.</p>
                                <p class=""><i class="fa-regular fa-square squara_icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span class="titre_offrons">SUPPORT ET MAINTENANCE</span></p>
                                <p class="para_offrons">Obtenez un plan de maintenance de votre site Web personnalisé au meilleur prix. Nous offrons aussi des services d'hébergement web et d'espace de stockage.</p>
                                <p class=""><i class="fa-regular fa-square squara_icon"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span class="titre_offrons">FORMATIONS PROFESSIONNELLES</span></p>
                                <p class="para_offrons">Notre équipe d'encadreurs professionnels vous accompagne dans l'acquisition et le renforcement des compétences dans les différents domaines des NTIC.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bgcolorse">
            <div class="container ">
                <div class="row">
                    <h2 class="projet_titre py-5" align="center">Nos différents domaines D'interventions</h2>
                    <?php
                    $recupdata=$my_bd->query("SELECT * FROM tbl_domaine");
                    if($recupdata->rowCount()>0){
                        while($fetchdata=$recupdata->fetch()){
                            $iddomaine=$fetchdata['id_domaine'];
                            $nomdomaine=$fetchdata['nom_domaine'];
                            $image_domain=$fetchdata['image_dom'];
                            $descri_domain=$fetchdata['desc_domaine'];                                             
                    ?>
                    <div class="col-12 col-lg-3">
                        <div class="card" style="width: 18rem;">
                         <img src="backend/image/<?=$image_domain?>" class="img-fluid imag_card1" alt="...">
                         <div class="card-body">
                           <h5 class="card-title card_titre"><?=$nomdomaine?></h5>
                           <p class="card_para"><?=$descri_domain?></p>
                           <p ><button class="button_savoir"><a href="domaine.php?domaine_projets=<?=$iddomaine?>" class="a_sav">Savoir Plus</a></button></p>
                         </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
         </section> 
    </body><br>
    <footer class="footer_web">
        <div class="row py-3">
            <div class="col-12 col-lg-6">
                <h2 class="footer_title_left">COPYRIGHT TAO BUSINESS 2023. ALL RIGHTS RESERVED.</h2>
            </div>
            <div class="col-12 col-lg-6">
                <p class="footer_title_right"><i class="fa-brands fa-whatsapp"></i>&nbsp;&nbsp; 257 61 44 73 37 / 257 61 86 74 06 &nbsp;&nbsp;<i class="fa-solid fa-envelope"></i>&nbsp;&nbsp; <a href="mailto:delsegiroelnevada243@gmail.com" > DELSEGIROELNEVADA243@GMAIL.COM&nbsp;</a></p>
            </div>
        </div>
</footer>

</html>
