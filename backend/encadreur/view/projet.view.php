<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="Jassa, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, jassa lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, jassa admin lite design, jassa admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="jassa Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Bibliographie</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../dist/css/Manstyle.css" rel="stylesheet" />
    <link href="../../dist/css/style.min.css" rel="stylesheet" />
  </head>

  <body>
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
    <style>
      .imagepro{
        width: 50px!important;
        height: 50px!important;

      }
      .imagepro{
        width: 60px!important;
        height: 50px!important;
      }
      .dtaregle{
        color: #00B6D7!important;
      }
    </style>
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="index.html">
              <b class="logo-icon ps-2">
                <i class="mdi mdi-content-save-all \f28a light-logo" width="25"></i>

              </b>
              <span class="logo-text ms-2">
                <p class="pt-3">Bibliographie</p>
              </span>
            </a>
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-4"></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control" id="searchda"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav float-end">
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                <img
                    src="../image/<?=$image?>"
                    alt="<?=$rolerh?>"
                    class="img-fluid"
                    width="50px" height="50px"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                  >
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <div class="scroll-sidebar">
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-crop-landscape \f295"></i
                  ><span class="hide-menu">Accueil</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="stagiaire.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-multiple-plus \f10f"></i
                  ><span class="hide-menu">Stagiaires</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="projet.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-briefcase \f1cc"></i
                  ><span class="hide-menu">Projets</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="proje_etudiant.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-calendar-multiple-check \f1e8"></i
                  ><span class="hide-menu">Publications</span></a
                >
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <div class="page-wrapper">
        <div class="container-fluid">
          <div class="row">
            <?php
               $projet=current($my_bd->query("SELECT COUNT(*) FROM tbl_projets")->fetch());
            ?>
            <div class="col-md-6 col-lg-12 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <?=$projet?>
                  </h1>
                  <h6 class="text-white">Projets</h6>
                </div>
              </div>
            </div>
          </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <style>
                    </style>
                   <p> <button type="button" class="btn btn-secondary btn-sm add_itemsrh" data-bs-toggle="modal" data-bs-target="#adduser" data-bs-whatever="@mdo">Ajouter</button>  <span class="add_itemsrh_textdroite" align="right">Tout Les Projets</span></p>
                  </div>
                    <table class="table">
                      <thead>
                        <span class="dtaregle"><?=$dateregl?></span>
                        <tr>
                          <th class="" scope="col">Photo</th>
                          <th class="" scope="col">Domaine</th>
                          <th class="" scope="col">Titre</th>
                          <th class="" scope="col">Projet</th>
                          <th class="" scope="col">Duree</th>
                          <th class="" scope="col">Description</th>
                          <th class="" scope="col">Action</th>
                        </tr>
                      </thead>
                      <?php
                          $sql="SELECT 
                          id_projet,
                          nom_domaine,
                          nom_projet,
                          datedb_pro,
                          projet_realise,
                          datefn_pro,
                          image_pro,
                          Description_pro
                          FROM tbl_projets AS pro INNER JOIN tbl_domaine AS do ON(pro.id_domaine=do.id_domaine) ORDER BY id_projet DESC";
                          $recupdata=$my_bd->prepare($sql);
                          $recupdata->execute();
                          $projets=$recupdata->fetchAll(PDO::FETCH_ASSOC);
                      ?>
                      <tbody id="searchosx">
                        <?php 
                        foreach($projets as $pro){
                          $dtdebi=$pro['datedb_pro'];
                          $datfin=$pro['datefn_pro'];
                          $today_d=new DateTime($dtdebi);
                          $expi_d=new Datetime($datfin);
                  
                          $year_d=$today_d->diff($expi_d);
                          $month_d=$today_d->diff($expi_d);
                          $day_d=$today_d->diff($expi_d);
                          $yyy=$year_d->format('%y');
                          $mmm=$year_d->format('%m');
                          $ddd=$year_d->format('%d');
          
                        ?>
                        <tr>
                          <td class=""><img src="../image/<?=$pro['image_pro']?>" class="imagepro"></td>
                          <td class=""><?=$pro['nom_domaine']?></td>
                          <td class=""><?=$pro['nom_projet']?></td>
                          <td class=""><?=$pro['projet_realise']?></td>
                          <td class="">
                          <?php 
                            ?>
                            <?php
                            if($forma['status_cong']==" "){
  
                            }
                            else{
                              if($yyy != "0")
                              {?>
                              <strong><?=$yyy?></strong>&nbsp;ans
                              <?php
  
                              }
                              ?>
                              <?php
                              if($mmm != "0")
                              {?>
                              <strong><?=$mmm?></strong>&nbsp;mois
                              <?php
  
                              }
                              ?>
                              <?php
                              if($ddd != "0")
                              {?>
                              <strong><?=$ddd?></strong>&nbsp;jours
                              <?php
  
                              }
                            }
                            ?>
                          </td>
                          <td>
                            <details data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                <div style="min-height: 120px;">
                                <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                    <div class="card card-body" style="width: 300px;">
                                    <?=$pro['Description_pro']?>
                                    </div>
                                </div>
                                </div>
                            </details>
                          </td>
                          <td>
                            <button type="button" class="btn btn-secondary btn-sm edit_itemsrh" data-bs-toggle="modal" data-bs-target="#modif<?=$pro['id_projet']?>">Edit</button>&nbsp;
                            <button type="button" class="btn btn-primary btn-sm delete_itemsrs" data-bs-toggle="modal" data-bs-target="#suprim<?=$pro['id_projet']?>">Supprimer</button>
                          </td>
                        </tr>
                                                      <!-- Delete user -->
                          <div class="modal fade bd-example-modal-sm" id="suprim<?=$pro['id_projet']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog bd-example-modal-sm">
                              <div class="modal-content">
                                <div class="modal-header modal_foterbar">
                                    <h5 class="modal_labeltext" id="exampleModalLabel">Suprimer Utilisateur</h5>
                                    <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                      <form method="POST">
                                        <h2 class="modal_suprimtitre">Veux-tu suprimer le  <span class="span_nomutil"><?=$pro['nom_projet']?></span></h2>
                                        <input type="hidden" name="idpro" value="<?=$pro['id_projet']?>">
                                        <div class="modal-footer modal_foterbar">
                                          <button type="submit" name="delete" class="btn btn-secondary btn-sm suprim_modalitemsrh">Supprimer</button>
                                          <button type="button" class="btn btn-secondary btn-sm close_modal" data-bs-dismiss="modal">Close</button>
                                        </div>
                                      </form>
                              </div>
                            </div>
                          </div>
                      </tbody>
                            <!-- Modifier user -->
                          <div class="modal fade" id="modif<?=$pro['id_projet']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header modal_foterbar">
                                    <h5 class="modal_labeltext" id="exampleModalLabel">Ajouter Projet</h5>
                                    <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form method="POST" enctype="multipart/form-data">
                                <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Titre:</label>
                                            <input type="text" class="modal_input" name="input_titre" value="<?=$pro['nom_projet']?>">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Domaine:</label>
                                            <select name="input_domaine" class="modal_input">
                                            <option>Choisie Domaine</option>
                                            <?php
                                            $recudata=$my_bd->query("SELECT * FROM tbl_domaine ORDER BY id_domaine DESC");
                                            if($recudata->rowCount()>0){
                                                while($checkdata=$recudata->fetch()){
                                                $id_dp=$checkdata['id_domaine'];
                                                $nom_depa=$checkdata['nom_domaine'];
                                            ?>
                                            <option value="<?=$id_dp?>"><?=$nom_depa?></option>
                                            <?php
                                                }
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="hidden" name="idpro" value="<?=$pro['id_projet']?>">
                                            <label for="recipient-name" class="modal_labeltext">Date Debut:</label>
                                            <input type="date" class="modal_input" name="input_datedb" value="<?=$pro['datedb_pro']?>">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Date Fin:</label>
                                            <input type="date" class="modal_input" name="input_datefn" value="<?=$pro['datefn_pro']?>">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Image:</label>
                                            <input type="file" class="modal_input" name="input_image">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Description:</label>
                                            <textarea name="input_desc" class="modal_input" cols="30" rows="2" value="<?=$pro['Description_pro']?>"><?=$pro['Description_pro']?></textarea>
                                        </div>
                                    </div>
                                  </div>    
                                  <div class="modal-footer modal_foterbar">
                                    <button type="submit" name="modifier" class="btn btn-secondary btn-sm add_modalitemsrh">Modifier</button>
                                    <button type="button" class="btn btn-secondary btn-sm delete_modalitemsrh"  data-bs-dismiss="modal">Close</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>                
                      <?php
                        }
                      ?>
                    </table>
                </div>
              </div>
            </div>
    </div>
  </div>
      <!-- Add pro -->
  <div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modal_foterbar">
            <h5 class="modal_labeltext" id="exampleModalLabel">Ajouter Projet</h5>
            <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <label for="recipient-name" class="modal_labeltext">Titre:</label>
                    <input type="text" class="modal_input" name="input_titre">
                  </div>
                  <div class="col-12 col-lg-6">
                    <label for="recipient-name" class="modal_labeltext">Domaine:</label>
                    <select name="input_domaine" class="modal_input">
                    <option>Choisie Domaine</option>
                      <?php
                      $recudata=$my_bd->query("SELECT * FROM tbl_domaine ORDER BY id_domaine DESC");
                      if($recudata->rowCount()>0){
                          while($checkdata=$recudata->fetch()){
                          $id_dp=$checkdata['id_domaine'];
                          $nom_depa=$checkdata['nom_domaine'];
                      ?>
                      <option value="<?=$id_dp?>"><?=$nom_depa?></option>
                      <?php
                          }
                          }
                    ?>
                    </select>
                  </div>
                  <div class="col-12 col-lg-6">
                    <label for="recipient-name" class="modal_labeltext">Date Debut:</label>
                    <input type="date" class="modal_input" name="input_datedb">
                  </div>
                  <div class="col-12 col-lg-6">
                    <label for="recipient-name" class="modal_labeltext">Date Fin:</label>
                    <input type="date" class="modal_input" name="input_datefn">
                  </div>
                  <div class="col-12 col-lg-6">
                    <label for="recipient-name" class="modal_labeltext">Image:</label>
                    <input type="file" class="modal_input" name="input_image">
                  </div>
                  <div class="col-12 col-lg-6">
                    <label for="recipient-name" class="modal_labeltext">Projet Realiser:</label>
                    <input type="file" class="modal_input" name="input_projetrealise">
                  </div>
                  <div class="col-12 col-lg-12">
                    <label for="recipient-name" class="modal_labeltext">Description:</label>
                    <textarea name="input_desc" class="modal_input" cols="30" rows="2"></textarea>
                  </div>
              </div>
          </div>    
          <div class="modal-footer modal_foterbar">
            <button type="submit" name="ajouter" class="btn btn-secondary btn-sm add_modalitemsrh">Ajouter</button>
            <button type="button" class="btn btn-secondary btn-sm delete_modalitemsrh"  data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div> 
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../../assets/libs/flot/excanvas.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>
  </body>
  <script>
      $(document).ready(function(){
        $("#searchda").on("keyup", function(){
          var value = $(this).val().toLowerCase();
          $("#searchosx tr").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
  </script>
</html>
