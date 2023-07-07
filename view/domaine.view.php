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
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    
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
        <?php
        if($etat_inscriptio == 0){
            ?>
            <section>
                <div class="container py-5">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <form method="POST">
                                <div class="row">
                                    <div class="col-12 col-lg-6 py-2">
                                        <input type="text" name="nom_cli" class="form-control fom_input" placeholder="Nom">
                                    </div>
                                    <div class="col-12 col-lg-6 py-2">
                                        <input type="text" name="prenom_cli" class="form-control fom_input" placeholder="Prenom">
                                    </div>
                                    <div class="col-12 col-lg-6 py-2">
                                        <input type="text" name="phone_cli" class="form-control fom_input" placeholder="Telephome">
                                    </div>
                                    <div class="col-12 col-lg-6 py-2">
                                        <input type="mail" name="mail_cli" class="form-control fom_input" placeholder="E-mail">
                                    </div>
                                    <div class="col-12 col-lg-6 py-2"> 
                                        <input type="text" name="age_cli" class="form-control fom_input" placeholder="Age">
                                    </div>
                                    <div class="col-12 col-lg-6 py-2"> 
                                        <input type="text" name="univ_cli" class="form-control fom_input" placeholder="Universite">
                                    </div>
                                    <div class="col-12 col-lg-6 py-2"> 
                                        <input type="text" name="nivo_cli" class="form-control fom_input" placeholder="Niveau Etude">
                                    </div>
                                    <div class="col-12 col-lg-6 py-2">
                                        <select name="domaine_cli" class="form-control fom_input">
                                            <option value="">Choisie Ton Domaine</option>
                                            <option value="Informatique">Informatique</option>
                                            <option value="Business">Business</option>
                                            <option value="Autres">Autres</option>
                                        </select>
                                    </div>
                                        <button type="submit" name="ajouter" class="btn_inscrit">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
        else{
            ?>
                <section>
        <div class="container">
            <div class="row">
                <h2 class="projet_titre py-5" >Nos projets deja realiser dans le domaine <?=$dom_name?></h2>
                    <?php
                        $recupdata=$my_bd->query("SELECT * FROM tbl_projets WHERE id_domaine='$iddomaine'");
                        if($recupdata->rowCount()>0){
                            while($fetchdata=$recupdata->fetch()){
                                $id_proj=$fetchdata['id_projet'];
                                $nom_proj=$fetchdata['nom_projet'];
                                $image_pro=$fetchdata['image_pro'];
                    ?>
                <div class="col-12 col-lg-3 ">
                    <!-- <a  data-toggle="modal" data-target="#exampleModal"> -->
                        <a href="projet.php?projet_perso=<?=$id_proj?>">
                        <div class="card" style="width: 18rem;">
                            <img src="backend/image/<?=$image_pro?>" class="card-img-top image" alt="...">
                            
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-lg-3"> <img src="backend/image/<?=$image_pro?>" class="card-img-top image" alt="..."></div>
                                    <div class="col-12 col-lg-9">
                                        <h5 class="card-title card_titre1"><?=$nom_proj?></h5></div>                                  
                                </div>                
                                <p class="card-text"></p>                               
                            </div>
                        </div>                       
                    </a>
                </div>  
                <?php
                   }
                }
                ?>            
            </div>
        </div>
    </section>
            <?php
        }
        ?>
    <div class="espa py-5"></div>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inscrivez-Vous</h5>
            </div>
                <div class="modal-body">
                    <div class="row">
                            <div class="col-12 col-lg-6 py-2">
                                <input type="text" name="nom_cli" class="form-control fom_input" placeholder="Nom">
                            </div>
                            <div class="col-12 col-lg-6 py-2">
                                <input type="text" name="prenom_cli" class="form-control fom_input" placeholder="Prenom">
                            </div>
                            <div class="col-12 col-lg-6 py-2">
                                <input type="text" name="phone_cli" class="form-control fom_input" placeholder="Telephome">
                            </div>
                            <div class="col-12 col-lg-6 py-2">
                                <input type="mail" name="mail_cli" class="form-control fom_input" placeholder="E-mail">
                            </div>
                            <div class="col-12 col-lg-6 py-2"> 
                                <input type="text" name="age_cli" class="form-control fom_input" placeholder="Age">
                            </div>
                            <div class="col-12 col-lg-6 py-2"> 
                                <input type="text" name="univ_cli" class="form-control fom_input" placeholder="Universite">
                            </div>
                            <div class="col-12 col-lg-6 py-2"> 
                                <input type="text" name="nivo_cli" class="form-control fom_input" placeholder="Niveau Etude">
                            </div>
                            <div class="col-12 col-lg-6 py-2">
                                <select name="domaine_cli" class="form-control fom_input">
                                    <option value="">Choisie Ton Domaine</option>
                                    <option value="Informatique">Informatique</option>
                                    <option value="Business">Business</option>
                                    <option value="Autres">Autres</option>
                                </select>
                            </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="submit" name="ajouter" class="btn_inscrit">Enregistrer</button>
                <button type="button" class="btn_closes" data-bs-dismiss="modal">&nbsp;Close&nbsp;</button>
            </div>
        </form>           
        <div class="espa pt-4"></div>
    </div>
</div>
    </body>
</html>
