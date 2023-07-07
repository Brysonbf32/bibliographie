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

    <style>
      .trsh_icon{
  color: red,!important;
}
    </style>
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
              <span class="logo-text ms-2">
                <p class="pt-2">RH</p>
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
                    type="text" id="searchda"
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
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
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
                  href="encadreur.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account \f103"></i
                  ><span class="hide-menu">Encadreur</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="domaine.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-bubble"></i
                  ><span class="hide-menu">Departement</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="cours.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-content-paste \f288"></i
                  ><span class="hide-menu">Cours</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="enca_depart.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-arrow-right-bold \f150"></i
                  ><span class="hide-menu">Les Affectations</span></a
                >
              </li>
              <!-- <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="cours_formateur.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-book-open-variant \f1b4"></i
                  ><span class="hide-menu">A.Cours & Formateur</span></a
                >
              </li> -->
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
                  href="conge.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-remove \f114"></i
                  ><span class="hide-menu">Conge</span></a
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
            $cou_formateur=current($my_bd->query("SELECT COUNT(*) FROM tbl_affecta_cou_encdr")->fetch());
            $Depart_formateur=current($my_bd->query("SELECT COUNT(*) FROM tbl_affecta_enca_depart")->fetch());
          ?>
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <?=$Depart_formateur?>
                </h1>
                  <h6 class="text-white">Departements et Formateur</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <?=$cou_formateur?>
                  </h1>
                  <h6 class="text-white">Formateurs et cours</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <div class="row">
              <div class="col-12 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="titre_affect">Affectation Deprtement et Formateur</h5>
                    <p>
                      <button type="button" class="btn btn-secondary btn-sm add_itemsrh" data-bs-toggle="modal" data-bs-target="#addformat_departemnt" data-bs-whatever="@mdo">Ajouter</button>
                    </p>
                  </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="th_tableenca" scope="col">Reference</th>
                          <th class="th_tableenca" scope="col">Encadreur</th>
                          <th class="th_tableenca" scope="col">Departement</th>
                          <th class="th_tableenca" scope="col">Action</th>
                        </tr>
                      </thead>
                      <?php
                              $sql="SELECT 
                                id_endep,
                                refere_endep,
                                en.nom_enca,
                                dpt.nom_depart
                               FROM tbl_affecta_enca_depart AS enca INNER JOIN tbl_encadreur AS en ON(enca.id_enca=en.id_enca) INNER JOIN tbl_departement AS dpt ON(enca.id_depart=dpt.id_depart) ORDER BY id_endep DESC";
                               $recupdata=$my_bd->prepare($sql);
                               $recupdata->execute();
                               $affectcouform=$recupdata->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                      <tbody id="searchosx">
                        <?php
                        foreach($affectcouform as $affect){
                        ?>
                        <tr>
                          <td class="td_table"><?=$affect['refere_endep']?></td>
                          <td class="td_table"><?=$affect['nom_enca']?></td>
                          <td class="td_table"><?=$affect['nom_depart']?></td>
                          <td><i class="mdi mdi-pencil \f4da" data-bs-toggle="modal" data-bs-target="#modif<?=$affect['id_endep']?>"></i>&nbsp;     <i class="fa fa-trash" data-bs-toggle="modal" data-bs-target="#suprim<?=$affect['id_endep']?>"></i></td>
                        </tr>
                      </tbody>
                            <!-- Modifier Formteur et departemt -->
                        <div class="modal fade" id="modif<?=$affect['id_endep']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header modal_foterbar">
                                  <h5 class="modal_labeltext" id="exampleModalLabel">Affecter Formateur et Departement</h5>
                                  <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                    <form method="POST">
                                      <div class="row">
                                      <div class="mb-3">
                                          <label for="recipient-name" class="modal_labeltext">Reference:</label>
                                          <input type="text" class="modal_input" name="input_reference" value="<?=$affect['refere_endep']?>">
                                          <input type="hidden" name="id_affect" value="<?=$affect['id_endep']?>">
                                      </div>
                                      <div class="col-12 col-lg-6">
                                          <label for="recipient-name" class="modal_labeltext">Formateur:</label>
                                          <select name="input_formateur" class="modal_input">
                                            <option>Choisie formateur</option>
                                              <?php
                                                $recudata=$my_bd->query("SELECT * FROM tbl_encadreur ORDER BY id_enca DESC");
                                                if($recudata->rowCount()>0){
                                                  while($checkdata=$recudata->fetch()){
                                                    $id_enca=$checkdata['id_enca'];
                                                    $nom_encaa=$checkdata['nom_enca'];
                                                ?>
                                                <option value="<?=$id_enca?>"><?=$nom_encaa?></option>
                                                <?php
                                                    }
                                                  }
                                              ?>
                                          </select>
                                        </div>
                                      <div class="col-12 col-lg-6">
                                          <label for="recipient-name" class="modal_labeltext">Departement:</label>
                                          <select name="input_depart" class="modal_input">
                                            <option>Choisie Encadreurrs</option>
                                            <?php
                                                $recudata=$my_bd->query("SELECT * FROM tbl_departement ORDER BY id_depart DESC");
                                                if($recudata->rowCount()>0){
                                                  while($checkdata=$recudata->fetch()){
                                                    $id_depa=$checkdata['id_depart'];
                                                    $nom_depa=$checkdata['nom_depart'];
                                                ?>
                                                <option value="<?=$id_depa?>"><?=$nom_depa?></option>
                                                <?php
                                                    }
                                                  }
                                            ?>
                                          </select>
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
                              <!-- Delete Formteur et departemt -->
                          <div class="modal fade bd-example-modal-sm" id="suprim<?=$affect['id_endep']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog bd-example-modal-sm">
                              <div class="modal-content">
                                <div class="modal-header modal_foterbar">
                                    <h5 class="modal_labeltext" id="exampleModalLabel">Suprimer cette Affectation</h5>
                                    <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                      <form method="POST">
                                        <h2 class="modal_suprimtitre">Veux-tu suprimer Cette affectation <span class="span_nomutil"><?=$affect['refere_endep']?></span></h2>
                                        <input type="hidden" name="id_affect" value="<?=$affect['id_endep']?>">
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

              <div class="col-12 col-lg-6">
                <div class="card">
                  <div class="card-body">
                  <h5>Affectation Formateur et Cours</strong></h5>
                    <p>
                      <button type="button" class="btn btn-secondary btn-sm add_itemsrh" data-bs-toggle="modal" data-bs-target="#affectation_cour_format" data-bs-whatever="@mdo">Ajouter</button>
                    </p>
                  </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="th_tableenca" scope="col">Formateur</th>
                          <th class="th_tableenca" scope="col">Cours</th>
                          <th class="th_tableenca" scope="col">Reference</th>
                          <th class="th_tableenca" scope="col">Debut</th>
                          <th class="th_tableenca" scope="col">Fin</th>
                          <th class="th_tableenca" scope="col">Action</th>
                        </tr>
                      </thead>
                          <?php
                              $sql="SELECT 
                                id_couen,
                                c.titre_cou,
                                nom_enca, 
                                ref_affect,                             
                                datedb_affect,
                                datefin_affect
                               FROM tbl_affecta_cou_encdr AS af INNER JOIN tbl_cours AS c ON(af.id_cou=c.id_cou) INNER JOIN tbl_encadreur AS enc ON(af.user_id=enc.user_id)";
                               $recupdata=$my_bd->prepare($sql);
                               $recupdata->execute();
                               $affectcouform=$recupdata->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                      <tbody id="searchosx">
                        <?php
                        foreach($affectcouform as $affect){
                        ?>
                        <tr>
                          <td class="td_table"><?=$affect['nom_enca']?></td>
                          <td class="td_table"><?=$affect['titre_cou']?></td>
                          <td class="td_table"><?=$affect['ref_affect']?></td>
                          <td class="td_table"><?=$affect['datedb_affect']?></td>
                          <td class="td_table"><?=$affect['datefin_affect']?></td>
                          <td><i class="mdi mdi-pencil \f4da" data-bs-toggle="modal" data-bs-target="#modif<?=$affect['id_couen']?>"></i>&nbsp;
                          <i class="fa fa-trash" data-bs-toggle="modal" data-bs-target="#suprim<?=$affect['id_couen']?>"></i></td>
                        </tr>
                      </tbody>
                            <!-- Modifier user -->
                          <div class="modal fade" id="modif<?=$affect['id_couen']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header modal_foterbar">
                                    <h5 class="modal_labeltext" id="exampleModalLabel">Affecter Cours au Formateur</h5>
                                    <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <form method="POST">
                                        <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Cours:</label>
                                            <select name="input_cours" class="modal_input">
                                                <option>Choisie Cours</option>
                                                <?php
                                                    $recudata=$my_bd->query("SELECT * FROM tbl_cours ORDER BY id_cou DESC");
                                                    if($recudata->rowCount()>0){
                                                    while($checkdata=$recudata->fetch()){
                                                        $id_cours=$checkdata['id_cou'];
                                                        $nom_cours=$checkdata['titre_cou'];
                                                    ?>
                                                    <option value="<?=$id_cours?>"><?=$nom_cours?></option>
                                                    <?php
                                                        }
                                                    }
                                                ?>
                                            </select>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Formateur:</label>
                                            <input type="hidden" name="id_affect" value="<?=$affect['id_couen']?>">
                                            <select name="input_formateur" class="modal_input">
                                                <option>Choisie formateur</option>
                                                    <?php
                                                      $recudata=$my_bd->query("SELECT * FROM tbl_affecta_enca_depart ORDER BY id_endep DESC");
                                                      if($recudata->rowCount()>0){
                                                        while($checkdata=$recudata->fetch()){
                                                          $id_enca=$checkdata['id_endep'];
                                                          $nom_encaa=$checkdata['refere_endep'];
                                                    ?>
                                                    <option value="<?=$id_enca?>"><?=$nom_encaa?></option>
                                                    <?php
                                                          }
                                                        }
                                                    ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="modal_labeltext">Reference:</label>
                                            <input type="text" class="modal_input" name="input_reference" value="<?=$affect['ref_affect']?>">
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Date Debut:</label>
                                            <input type="date" class="modal_input" name="input_dtedb" value="<?=$affect['datedb_affect']?>">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                            <label for="recipient-name" class="modal_labeltext">Date Fin:</label>
                                            <input type="date" class="modal_input" name="input_dtefin" value="<?=$affect['datefin_affect']?>">
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
                              <!-- Delete user -->
                          <div class="modal fade bd-example-modal-sm" id="suprim<?=$affect['id_couen']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog bd-example-modal-sm">
                              <div class="modal-content">
                                <div class="modal-header modal_foterbar">
                                    <h5 class="modal_labeltext" id="exampleModalLabel">Suprimer cette Affectation</h5>
                                    <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                      <form method="POST">
                                        <h2 class="modal_suprimtitre">Veux-tu suprimer l'utilisateur <span class="span_nomutil"><?=$affect['ref_affect']?></span></h2>
                                        <input type="hidden" name="id_affect" value="<?=$affect['id_couen']?>">
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

      <!-- Add Affectation formateur et Cours -->
      <div class="modal fade" id="affectation_cour_format" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header modal_foterbar">
                <h5 class="modal_labeltext" id="exampleModalLabel">Affecter Cours au Formateur</h5>
                <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <form method="POST">
                    <div class="row">
                      <div class="col-12 col-lg-6">
                        <label for="recipient-name" class="modal_labeltext">Formateur:</label>
                        <select name="input_formateur" class="modal_input">
                          <option>Choisie formateur</option>
                            <?php
                              $recudata=$my_bd->query("SELECT * FROM tbl_encadreur");
                              if($recudata->rowCount()>0){
                                while($checkdata=$recudata->fetch()){
                                  $id_enca=$checkdata['user_id'];
                                  $nom_encaa=$checkdata['nom_enca'];
                              ?>
                              <option value="<?=$id_enca?>"><?=$nom_encaa?></option>
                              <?php
                                  }
                                }
                            ?>
                        </select>
                      </div>
                      <div class="col-12 col-lg-6">
                        <label for="recipient-name" class="modal_labeltext">Cours:</label>
                        <select name="input_cours" class="modal_input">
                          <option>Choisie Cours</option>
                          <?php
                              $recudata=$my_bd->query("SELECT * FROM tbl_cours ORDER BY id_cou DESC");
                              if($recudata->rowCount()>0){
                                while($checkdata=$recudata->fetch()){
                                  $id_cours=$checkdata['id_cou'];
                                  $nom_cours=$checkdata['titre_cou'];
                              ?>
                              <option value="<?=$id_cours?>"><?=$nom_cours?></option>
                              <?php
                                  }
                                }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="modal_labeltext">Reference:</label>
                        <input type="text" class="modal_input" name="input_reference">
                    </div>
                    <div class="row">
                      <div class="col-12 col-lg-6">
                        <label for="recipient-name" class="modal_labeltext">Date Debut:</label>
                        <input type="date" class="modal_input" name="input_dtedb">
                      </div>
                      <div class="col-12 col-lg-6">
                        <label for="recipient-name" class="modal_labeltext">Date Fin:</label>
                        <input type="date" class="modal_input" name="input_dtefin">
                      </div>
                      <p><?=$inferiordat?></p>
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
                  <!-- Ajouter Formateur et Departement -->
  <div class="modal fade" id="addformat_departemnt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modal_foterbar">
            <h5 class="modal_labeltext" id="exampleModalLabel" align="center">Affecter Formateur et Departement</h5>
            <button type="button" class="btn-close btn_modalclose" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <form method="POST">
                <div class="row">
                <div class="mb-3">
                    <label for="recipient-name" class="modal_labeltext">Reference:</label>
                    <input type="text" class="modal_input" name="input_reference">
                </div>
                <div class="col-12 col-lg-6">
                    <label for="recipient-name" class="modal_labeltext">Formateur:</label>
                    <select name="input_formateur" class="modal_input">
                      <option>Choisie formateur</option>
                        <?php
                          $recudata=$my_bd->query("SELECT * FROM tbl_encadreur ORDER BY id_enca DESC");
                          if($recudata->rowCount()>0){
                            while($checkdata=$recudata->fetch()){
                              $id_enca=$checkdata['id_enca'];
                              $nom_encaa=$checkdata['nom_enca'];
                          ?>
                          <option value="<?=$id_enca?>"><?=$nom_encaa?></option>
                          <?php
                              }
                            }
                        ?>
                    </select>
                  </div>
                <div class="col-12 col-lg-6">
                    <label for="recipient-name" class="modal_labeltext">Departement:</label>
                    <select name="input_depart" class="modal_input">
                      <option>Choisie Encadreurrs</option>
                      <?php
                          $recudata=$my_bd->query("SELECT * FROM tbl_departement ORDER BY id_depart DESC");
                          if($recudata->rowCount()>0){
                            while($checkdata=$recudata->fetch()){
                              $id_depa=$checkdata['id_depart'];
                              $nom_depa=$checkdata['nom_depart'];
                          ?>
                          <option value="<?=$id_depa?>"><?=$nom_depa?></option>
                          <?php
                              }
                            }
                      ?>
                    </select>
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
