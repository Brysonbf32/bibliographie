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
    <title>RH</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/Manstyle.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
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
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="../assets/images/logo-icon.png"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                <p class="pt-2">Ressource Humaine</p>
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-4"></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text" id="searchda"
                    class="form-control" 
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              </li>
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
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
                    src="../assets/images/users/1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../logout.php"
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
                  href="utilisateurs.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-key"></i
                  ><span class="hide-menu">Users</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="domaine.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-bubble"></i
                  ><span class="hide-menu">Domaines</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="sous_domaine.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-blur-linear"></i
                  ><span class="hide-menu">Sous_domaines</span></a
                > 
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="enca_depart.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-calendar-multiple-check \f1e8"></i
                  ><span class="hide-menu">Publications</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="stagiaire.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-multiple-plus \f10f"></i
                  ><span class="hide-menu">Stagiaire</span></a
                >
              </li>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <div class="page-wrapper">

        <div class="container-fluid">
          <div class="row">
            <!-- Column -->
            <?php
                $totadepart=current($my_bd->query("select count(*) from tbl_encadreur")->fetch());
            $sql="SELECT
                  nom_depart
            FROM tbl_encadreur as en INNER JOIN tbl_departement as dpt ON(en.id_depart=dpt.id_depart)";
            $recudata=$my_bd->prepare($sql);
            $recudata->execute();
            if($recudata >0){
              $encadre=$recudata->fetchAll(PDO::FETCH_ASSOC);
            }
            ?>
            <?php
            foreach($encadre as $enc){

            ?>
            <div class="col-md-6 col-lg-3 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                 <h6 class="text-white">Departemt: <?=$enc['nom_depart']?></h6> &nbsp;
                  <h6 class="text-white">Formateur: <?=$totadepart?></h6>

                </div>
              </div>
            </div>
            <?php
              }
            ?>
            <!-- Column -->
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                  </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="th_tableenca" scope="col">Nom & PostNom</th>
                          <th class="th_tableenca" scope="col">E-mail</th>
                          <th class="th_tableenca" scope="col">Phone</th>
                          <th class="th_tableenca" scope="col">Addresse</th>
                          <th class="th_tableenca" scope="col">Etude nv</th>
                          <th class="th_tableenca" scope="col">Action</th>
                        </tr>
                      </thead>
                          <?php
                              $sql="SELECT 
                                id_enca,
                                user_uname,
                                user_email,
                                nom_enca,
                                phone_enca,
                                address_enca,
                                sexe_enca,
                                nivoetud_enca,
                                descri_enca
                               FROM tbl_encadreur AS f INNER JOIN tbl_users AS u ON(f.user_id=u.user_id)";
                               $recupdata=$my_bd->prepare($sql);
                               $recupdata->execute();
                               $encadreur=$recupdata->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                      <tbody id="searchosx">
                        <?php
                        foreach($encadreur as $formateur){
                        ?>
                        <tr>
                          <td class="td_table"><?=$formateur['nom_enca']?></td>
                          <td class="td_table"><?=$formateur['user_email']?></td>
                          <td class="td_table"><?=$formateur['phone_enca']?></td>
                          <td class="td_table"><?=$formateur['address_enca']?></td>
                          <td class="td_table"><?=$formateur['nivoetud_enca']?></td>
                          <td><button type="button" class="btn btn-secondary btn-sm edit_itemsrh" data-bs-toggle="modal" data-bs-target="#modif<?=$formateur['id_enca']?>">Edit</button> &nbsp;
                          <button type="button" class="btn btn-primary btn-sm delete_itemsrs" data-bs-toggle="modal" data-bs-target="#suprim<?=$formateur['id_enca']?>">Supprimer</button></td>
                        </tr>
                      </tbody>
                            <!-- Modifier user -->
                          <div class="modal fade" id="modif<?=$formateur['id_enca']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header modal_foterbar">
                                    <h5 class="modal_labeltext" id="exampleModalLabel">Ajouter Formateur</h5>
                                    <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="POST">
                                        <div class="row">
                                          <div class="col-12 col-lg-6">
                                              <label for="recipient-name" class="modal_labeltext">Nom Departement:</label>
                                              <select name="input_depart" class="modal_input">
                                                <option>Choisie Departemetnt</option>
                                                <?php
                                                    $recudata=$my_bd->query("SELECT * FROM tbl_departement ORDER BY id_depart DESC");
                                                    if($recudata->rowCount()>0){
                                                      while($checkdata=$recudata->fetch()){
                                                        $id_depart=$checkdata['id_depart'];
                                                        $nom_depart=$checkdata['nom_depart'];
                                                    ?>
                                                    <option value="<?=$id_depart?>"><?=$nom_depart?></option>
                                                    <?php
                                                        }
                                                      }
                                                ?>
                                              </select>
                                          </div>
                                          <div class="col-12 col-lg-6">
                                                <label for="recipient-name" class="modal_labeltext">Nom Formateur:</label>
                                                <input type="text" class="modal_input" name="input_nomformat" value="<?=$formateur['nom_enca']?>">
                                              </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-12 col-lg-6">
                                          <?php
                                            $log=$my_bd->query("SELECT * FROM tbl_users");
                                            $log->rowCount();
                                            $check=$log->fetch();
                                              if($check >0){
                                                $iduser= $check['user_id'];
                                              }
                                          ?>
                                            <input type="hidden" class="modal_input" name="input_iduser" value="<?=$iduser?>"> 
                                            <input type="hidden" class="modal_input" name="input_idformat" value="<?=$formateur['id_enca']?>"> 
                                            <label for="recipient-name" class="modal_labeltext">Niveau Etude:</label>
                                            <input type="text" class="modal_input" name="input_nivetud" value="<?=$formateur['nivoetud_enca']?>">
                                          </div>
                                          <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Phone Formateur:</label>
                                            <input type="text" class="modal_input" name="input_phonformat" value="<?=$formateur['phone_enca']?>">
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Address Formateur:</label>
                                            <input type="text" class="modal_input" name="input_addrsforma" value="<?=$formateur['address_enca']?>">
                                          </div>
                                          <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Sexe Formateur:</label>
                                            <select name="input_sexeformat" class="modal_input">
                                              <option value="M">Masculin</option>
                                              <option value="F">Feminin</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="modal_labeltext">Description:</label>
                                            <textarea name="input_descform" class="modal_input" cols="13" rows="3" value="<?=$formateur['descri_enca']?>"><?=$formateur['descri_enca']?></textarea>
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
                              <!-- Delete user -->
                          <div class="modal fade bd-example-modal-sm" id="suprim<?=$formateur['id_enca']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog bd-example-modal-sm">
                              <div class="modal-content">
                                <div class="modal-header modal_foterbar">
                                    <h5 class="modal_labeltext" id="exampleModalLabel">Suprimer le Formateur</h5>
                                    <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                      <form method="POST">
                                        <h2 class="modal_suprimtitre">Veux-tu suprimer l'utilisateur <span class="span_nomutil"><?=$formateur['nom_enca']?></span></h2>
                                        <input type="hidden" name="id_enca" value="<?=$formateur['id_enca']?>">
                                        <div class="modal-footer modal_foterbar">
                                          <button type="submit" name="suprimer" class="btn btn-secondary btn-sm suprim_modalitemsrh">Supprimer</button>
                                          <button type="button" class="btn btn-secondary btn-sm close_modal" data-bs-dismiss="modal">Close</button>
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
      <!-- Add user -->
  <div class="modal fade" id="addencafreur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modal_foterbar">
            <h5 class="modal_labeltext" id="exampleModalLabel">Ajouter Formateur</h5>
            <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <form method="POST">
                <div class="row">
                    <div class="col-12 col-lg-6">
                      <label for="recipient-name" class="modal_labeltext">Nom Departement:</label>
                      <select name="input_depart" class="modal_input">
                        <option>Choisie Departemetnt</option>
                        <?php
                            $recudata=$my_bd->query("SELECT * FROM tbl_departement ORDER BY id_depart DESC");
                            if($recudata->rowCount()>0){
                              while($checkdata=$recudata->fetch()){
                                $id_depart=$checkdata['id_depart'];
                                $nom_depart=$checkdata['nom_depart'];
                            ?>
                            <option value="<?=$id_depart?>"><?=$nom_depart?></option>
                            <?php
                                }
                              }
                        ?>
                      </select>
                    </div>
                    <div class="col-12 col-lg-6">
                      <label for="recipient-name" class="modal_labeltext">Nom Formateur:</label>
                      <input type="text" class="modal_input" name="input_nomformat">
                    </div>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-6">
                          		<?php
                                $log=$my_bd->query("SELECT * FROM tbl_users");
                                $log->rowCount();
                                $check=$log->fetch();
                                  if($check >0){
                                    $namcce= $check['user_id'];
                                   }
                              ?>
                    <input type="hidden" class="modal_input" name="input_iduser" value="<?=$namcce?>">
                    <label for="recipient-name" class="modal_labeltext">Niveau Etude:</label>
                      <input type="text" class="modal_input" name="input_nivetud">
                  </div>
                  <div class="col-12 col-lg-6">
                    <label for="recipient-name" class="modal_labeltext">Phone Formateur:</label>
                    <input type="text" class="modal_input" name="input_phonformat">
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <label for="recipient-name" class="modal_labeltext">Address Formateur:</label>
                    <input type="text" class="modal_input" name="input_addrsforma">
                  </div>
                  <div class="col-12 col-lg-6">
                    <label for="recipient-name" class="modal_labeltext">Sexe Formateur:</label>
                    <select name="input_sexeformat" class="modal_input">
                      <option value="M">Masculin</option>
                      <option value="F">Feminin</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="modal_labeltext">Description:</label>
                    <textarea name="input_descform" class="modal_input" cols="13" rows="3"></textarea>
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
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../assets/libs/flot/excanvas.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../dist/js/pages/chart/chart-page-init.js"></script>
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
