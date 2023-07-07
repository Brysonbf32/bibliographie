<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
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
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
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
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-4"></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav float-end">
              </li>
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
                <style>
                  .image_heder{

                  }
                </style>
                  <img
                    src="image/<?=$image?>"
                    alt="user"
                    class="image_heder img-fluid"
                    width="50px" height="50px"
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
                  ><span class="hide-menu">Utilisateurs</span></a
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
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <div class="page-wrapper">
        <div class="container-fluid">
          <div class="row">
          <?php
              $totadepart=current($my_bd->query("select count(*) from tbl_domaine")->fetch());
              $moth=current($my_bd->query("select count(*) from tbl_domaine")->fetch());
          ?>
            <!-- Column -->
            <div class="col-lg-3"></div>
            <div class="col-md-6 col-lg-6 col-xlg-3">
              <div class="card card-hover"> 
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                  <?=$totadepart?>
                  </h1>
                  <h6 class="text-white">Tout les departements</h6>
                  <h6 class="text-white"></h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3"></div>

          </div>
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <style>
                    </style>
                   <p>
                    <button type="button" class="btn btn-secondary btn-sm add_itemsrh" data-bs-toggle="modal" data-bs-target="#adduser" data-bs-whatever="@mdo">Ajouter</button>
                   </p>
                  </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="th_table" scope="col">Image</th>
                          <th class="th_table" scope="col">Nom Departement</th>
                          <th class="th_table" scope="col">Description</th>
                          <th class="th_table" scope="col">Action</th>
                        </tr>
                      </thead>
                      <?php
                      $recupedata=$my_bd->query("SELECT * FROM tbl_domaine ORDER BY id_domaine DESC");
                      if($recupedata->rowCount()>0){
                        while($checkdata=$recupedata->fetch()){
                            $id_dom=$checkdata['id_domaine'];
                            $nomdomain=$checkdata['nom_domaine'];
                            $descriform=$checkdata['desc_domaine'];
                            $imagedo=$checkdata['image_dom'];
                      ?>
                      <tbody id="searchosx">
                        <tr class="tr">
                          <td class="td_table"><img src="image/<?=$imagedo?>" class="img-fluid" width="50px" height="50px" alt=""></td>
                          <td class="td_table"><?=$nomdomain;?></td>
                          <td class="td_table">
                          <details data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
														<p>
														<div style="min-height: 120px;">
															<div class="collapse collapse-horizontal" id="collapseWidthExample">
																<div class="card card-body" style="width: 300px;">
																<?=$descriform?>
																</div>
															</div>
														</div>
														</p>
													</details>
                          </td>
                          <td><button type="button" class="btn btn-secondary btn-sm edit_itemsrh" data-bs-toggle="modal" data-bs-target="#modif<?=$id_dom?>">Edit</button> &nbsp;
                          <button type="button" class="btn btn-primary btn-sm delete_itemsrs" data-bs-toggle="modal" data-bs-target="#suprim<?=$id_dom?>">Supprimer</button></td>
                        </tr>
                      </tbody>

                              <!-- Modifier user -->
                        <div class="modal fade" id="modif<?=$id_dom?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header modal_foterbar">
                                    <h5 class="modal_labeltext" id="exampleModalLabel">Modifier Doamine</h5>
                                    <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="modal_labeltext">Nom Departement:</label>
                                            <input type="text" class="modal_input" name="input_nomdomai" value="<?=$nomdomain?>">
                                            <input type="hidden" name="id_dome" value="<?=$id_dom?>">
                                        </div>
                                        <div class="mb-3">
                                          <label for="recipient-name" class="modal_labeltext">Description:</label>
                                          <textarea name="input_descri" class="modal_input" cols="13" rows="3" value="<?=$descriform?>"><?=$descriform?></textarea>
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
                          <div class="modal fade bd-example-modal-sm" id="suprim<?=$id_dom?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog bd-example-modal-sm">
                              <div class="modal-content">
                                <div class="modal-header modal_foterbar">
                                    <h5 class="modal_labeltext" id="exampleModalLabel">Suprimer Utilisateur</h5>
                                    <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                      <form method="POST">
                                        <h2 class="modal_suprimtitre">Veux-tu suprimer l'utilisateur <span class="span_nomutil"><?=$nomdomain?></span></h2>
                                        <input type="hidden" name="id_dome" value="<?=$id_dom?>">
                                        <div class="modal-footer modal_foterbar">
                                          <button type="submit" name="suprimer" class="btn btn-secondary btn-sm edit_itemsrh">Supprimer</button>
                                          <button type="button" class="btn btn-secondary btn-sm delete_itemsrs" data-bs-dismiss="modal">Close</button>
                                        </div>
                                      </form>
                              </div>
                            </div>
                          </div>
                      <?php
                        }
                      }
                      ?>
                    </table>
                </div>
              </div>
              <div class="col-lg-3"></div>
            </div>
    </div>
  </div>
        <!-- Add user -->
    <div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header modal_foterbar">
              <h5 class="modal_labeltext" id="exampleModalLabel">Ajouter Departement</h5>
              <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                      <label for="recipient-name" class="modal_labeltext">Photo</label>
                      <input type="file" class="modal_input" name="input_image">
                  </div>
                  <div class="col-lg-6">
                      <label for="recipient-name" class="modal_labeltext">Nom Departement:</label>
                      <input type="text" class="modal_input" name="input_nomdomai">
                  </div>
                  <div class="mb-3">
                      <label for="recipient-name" class="modal_labeltext">Description:</label>
                      <textarea name="input_descri" class="modal_input" cols="13" rows="3"></textarea>
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
