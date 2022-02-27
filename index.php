<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mainor Admin Dashboard">
    <meta name="keywords" content="admin,mainor">
    <meta name="author" content="Mainor Aguilar">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Seguridad Computacional | Mainor Aguilar</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />

    <!-- ================== BEGIN PAGE LEVEL CSS START ================== -->
    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/libs/wave-effect/css/waves.min.css" />
    <link rel="stylesheet" href="assets/libs/owl-carousel/css/owl.carousel.min.css" />
    <!-- ================== BEGIN PAGE LEVEL END ================== -->
    <!-- ================== Plugins CSS  ================== -->
    <link rel="stylesheet" href="assets/libs/flatpicker/css/flatpickr.min.css">
    <link href="assets/libs/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- ================== Plugins CSS ================== -->
    <!-- ================== BEGIN APP CSS  ================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <!-- ================== END APP CSS ================== -->

    <!-- ================== BEGIN POLYFILLS  ================== -->
    <!--[if lt IE 9]>
      <script src="assets/libs/html5shiv/js/html5shiv.js"></script>
      <script src="assets/libs/respondjs/js/respond.min.js"></script>
   <![endif]-->
    <!-- ================== END POLYFILLS  ================== -->

    <?php
    include 'database.php';
    ?>
</head>

<body>
    <div class="page-wrapper">

        <header id="page-topbar" class="topbar-header">
            <div class="navbar-header">
                <div class="left-bar">
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo logo-dark">
                            <span class="logo-sm"><img src="assets/images/logo-white-sm.png"
                                    alt="Lettstart Admin"></span>
                            <span class="logo-lg"><img src="assets/images/logo-white.png" alt="Lettstart Admin"></span>
                        </a>
                        <a href="index.php" class="logo logo-light">
                            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="Lettstart Admin"></span>
                            <span class="logo-lg"><img src="assets/images/logo.png" alt="Lettstart Admin"></span>
                        </a>
                    </div>
                    <button type="button" id="vertical-menu-btn" class="btn hamburg-icon">
                        <i class="mdi mdi-menu"></i>
                    </button>

                </div>
                <div class="right-bar">

                    <div class="d-none d-lg-inline-flex ml-2">
                        <button type="button" data-toggle="fullscreen" class="btn header-item notify-icon"
                            id="full-screen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>

                    <div class="d-inline-flex">
                        <button type="button" id="layout" class="btn header-item notify-icon">
                            <i class="bx bx-cog bx-spin"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <aside class="side-navbar">
            <div class="scroll-content" id="metismenu">
                <ul id="side-menu" class="metismenu list-unstyled">
                    <li class="side-nav-title side-nav-item menu-title">Menu</li>
                    <li>
                        <a href="crear-riesgo.php" class="side-nav-link" aria-expanded="false">
                            <i class="bx bx-home-circle"></i>
                            <span> Crear riesgo</span>
                            <span class="menu-arrow"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
                            <i class="bx bx-layout"></i>
                            <span> Reportes</span>
                            <span class="menu-arrow"></span>
                        </a>

                    </li>

                    <li>
                        <a href="javascript:void(0)" class="side-nav-link" aria-expanded="false">
                            <i class="bx bx-file"></i>
                            <span> Documentation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="main-content">
            <div class="page-content">
                <div class="page-title-box">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-sm-5 col-xl-6">
                                <div class="page-title">
                                    <h3 class="mb-1 font-weight-bold">Dashboard</h3>
                                    <ol class="breadcrumb mb-3 mb-md-0">
                                        <li class="breadcrumb-item active">Dashboard | departamento de desarrollo</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-sm-7 col-xl-6">
                                <form class="form-inline justify-content-sm-end">
                                    <div class="d-inline-flex mr-2 input-date input-date-sm">
                                        <input class="form-control form-control-sm" type="text" id="dashdaterange"
                                            placeholder="03-10-19 To 04-06-20">
                                        <div class="date-icon">
                                            <i class="bx bx-calendar fs-sm"></i>
                                        </div>
                                    </div>
                                    <div class="btn-group dropdown">
                                        <button type="button" data-toggle="dropdown"
                                            class="btn btn-light dropdown-toggle">
                                            <i class="bx bx-download mr-1"></i> Download <i
                                                class="bx bx-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu-right dropdown-menu">
                                            <a href="javascript: void(0);" class="dropdown-item">
                                                <i class="bx bx-mail-send mr-1"></i> Email
                                            </a>
                                            <a href="javascript: void(0);" class="dropdown-item">
                                                <i class="bx bx-printer mr-1"></i> Print
                                            </a>
                                            <a href="javascript: void(0);" class="dropdown-item">
                                                <i class="bx bx-file mr-1"></i> Re-Generate
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page content -->
                <div class="page-content-wrapper mt--45">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="card">
                                    <div class="card-header dflex-between-center">
                                        <h5 class="card-title">Tareas agregadas</h5>
                                        <div class="export-fnc">
                                            <button class="btn btn-primary btn-sm mr-3 ml-1" data-effect="wave">
                                                <i class="bx bx-export"></i> Export
                                            </button>
                                            <div class="arrow-pagination">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item disabled"><a class="page-link"
                                                            data-effect="wave" href="javascript:void(0)"><i
                                                                class="bx bx-chevron-left"></i></a></li>
                                                    <li class="page-item"><a class="page-link" data-effect="wave"
                                                            href="javascript:void(0)"><i
                                                                class="bx bx-chevron-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <?php
                                                $sql = "SELECT * FROM create_task";
                                                if($result = mysqli_query($link, $sql)){
                                                    if(mysqli_num_rows($result) > 0) {
                                                        while($row = mysqli_fetch_array($result)){
                                    ?>

                                    <?php
                                                    }
                                                    mysqli_free_result($result);
                                                    } else{
                                                    echo "No se encontró Categoria.";
                                                    }
                                                    } else{
                                                    echo "ERROR: No pudo ejecutarse $sql. " . mysqli_error($link);
                                                    }
                                    ?>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Amenaza</th>
                                                        <th>Responsable</th>
                                                        <th>Costo</th>
                                                        <th>Nivel de riesgo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                                $sql = "SELECT id_task,nombre_task,encargado_task,costo_task,frecuencia_task,impacto_task FROM create_task";
                                                                if($result = mysqli_query($link, $sql)){
                                                                    if(mysqli_num_rows($result) > 0) {
                                                                        while($row = mysqli_fetch_array($result)){
                                                                            $id = $row['id_task'];
                                                                            
                                                    ?>
                                                    <tr>
                                                        <td># <?php echo $row['id_task'] ?></td>
                                                        <td>
                                                            <?php  
                                                        
                                                        if($row['nombre_task']=='A1'){
                                                            echo 'Catástrofes naturales';
                                                        }else if($row['nombre_task']=='A2'){
                                                            echo 'Robo de equipo de computo';
                                                        }else if($row['nombre_task']=='A3'){
                                                            echo 'Malware en el equipo de Computo';
                                                        }else if($row['nombre_task']=='A4'){
                                                            echo 'Corte de internet';
                                                        }else if($row['nombre_task']=='A5'){
                                                            echo 'Escritorios en mal estado';
                                                        }else if($row['nombre_task']=='A6'){
                                                            echo 'Poca ventilacion';
                                                        }else if($row['nombre_task']=='A7'){
                                                            echo 'Contaminacion auditiva';
                                                        }else if($row['nombre_task']=='A8'){
                                                            echo 'Equipo de trabajo en mal estado';
                                                        }else if($row['nombre_task']=='A9'){
                                                            echo 'Fallas en el suministro de servicios públicos';
                                                        }else if($row['nombre_task']=='A10'){
                                                            echo 'Incumplimiento del marco legal';
                                                        }else if($row['nombre_task']=='A11'){
                                                            echo 'Delitos informáticos, ciberataques';
                                                        }else if($row['nombre_task']=='A12'){
                                                            echo 'Alta rotación de talento humano';
                                                        }else if($row['nombre_task']=='A13'){
                                                            echo 'Accidentes laborales';
                                                        }else if($row['nombre_task']=='A14'){
                                                            echo 'Ransomware en servidor de respaldos';
                                                        }else if($row['nombre_task']=='A15'){
                                                            echo 'Malware en Time-Capsule';
                                                        }
                                                        
                                                        ?></td>
                                                        <td><?php echo $row['encargado_task'] ?></td>
                                                        <td><?php echo $row['costo_task'] ?></td>
                                                        <td>
                                                            <span class="badge py-1 badge-soft-<?php 
                                                            if($row['frecuencia_task']== "F1" && ($row['impacto_task']== "I1" || $row['impacto_task']== "I2" || $row['impacto_task']== "I3")){
                                                                echo 'success';
                                                            } else if($row['frecuencia_task']== "F1" && $row['impacto_task']== "I4"){
                                                                echo 'warning';
                                                            }else if($row['frecuencia_task']== "F1" && $row['impacto_task']== "I5"){
                                                                echo 'danger';
                                                            }else if($row['frecuencia_task']== "F2" && ($row['impacto_task']== "I1" || $row['impacto_task']== "I2")){
                                                                echo 'success';
                                                            }else if($row['frecuencia_task']== "F2" && ($row['impacto_task']== "I3" || $row['impacto_task']== "I4")){
                                                                echo 'warning';
                                                            }else if($row['frecuencia_task']== "F2" && $row['impacto_task']== "I5" ){
                                                                echo 'danger';
                                                            }else if($row['frecuencia_task']== "F3" && $row['impacto_task']== "I1" ){
                                                                echo 'success';
                                                            }else if($row['frecuencia_task']== "F3" && ($row['impacto_task']== "I2" || $row['impacto_task']== "I3")){
                                                                echo 'warning';
                                                            }else if($row['frecuencia_task']== "F3" && ($row['impacto_task']== "I4" || $row['impacto_task']== "I5")){
                                                                echo 'danger';
                                                            }else if($row['frecuencia_task']== "F4" && $row['impacto_task']== "I1" ){
                                                                echo 'success';
                                                            }else if($row['frecuencia_task']== "F4" && ($row['impacto_task']== "I2" || $row['impacto_task']== "I3") ){
                                                                echo 'warning';
                                                            }else if($row['frecuencia_task']== "F4" && ($row['impacto_task']== "I4" || $row['impacto_task']== "I5") ){
                                                                echo 'danger';
                                                            }else if($row['frecuencia_task']== "F5" && ($row['impacto_task']== "I1" || $row['impacto_task']== "I2") ){
                                                                echo 'warning';
                                                            }else if($row['frecuencia_task']== "F5" && ($row['impacto_task']== "I3" || $row['impacto_task']== "I4"|| $row['impacto_task']== "I5") ){
                                                                echo 'danger';
                                                            }
                                                            ?>">

                                                                Nivel riesgo
                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <?php
                                                                    }
                                                                    mysqli_free_result($result);
                                                                    } else{
                                                                    echo "No se encontró info.";
                                                                    }
                                                                    } else{
                                                                    echo "ERROR: No pudo ejecutarse $sql. " . mysqli_error($link);
                                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Amenazas registradas</h5>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div id="quartly-sale"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row 4-->
                        <div class="row">

                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Total Amenazas</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-container">
                                            <div class="chart">
                                                <canvas id="total-sale"></canvas>
                                            </div>
                                            <div class="center-text">
                                                <p class="text-muted mb-1 font-weight-600">Total amenazas </p>
                                                <h4 class="mb-0 font-weight-bold">5</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header dflex-between-center">
                                        <h5 class="card-title">Estadisticas de amenazas</h5>
                                        <div class="btn-group earningTabs">
                                            <button class="btn btn-primary btn-sm" data-effect="wave"
                                                data-type="weekly">
                                                Weekly
                                            </button>
                                            <button class="btn btn-outline-primary btn-sm" data-effect="wave"
                                                data-type="monthly">
                                                Monthly
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div id="sales-order"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="card revenue-card">
                                    <div class="card-header bg-info">
                                        <h5 class="card-title text-white">Costo total</h5>
                                    </div>
                                    <div class="card-body bg-info position-relative">
                                        <div class="chart-container">
                                            <div class="chart h-150">
                                                <canvas id="today-revenue"></canvas>
                                            </div>
                                        </div>
                                        <div class="center-text">
                                            <p class="text-light mb-1 font-weight-600">Recuperacion </p>
                                            <h4 class="text-white mb-0 font-weight-bold">$600</h4>
                                        </div>
                                    </div>
                                    <div class="revenue-stats p-4">
                                        <div>
                                            <p class="text-muted">Monto Disponible</p>
                                            <h4>$2000</h4>
                                        </div>
                                        <div>
                                            <p class="text-muted">Monto actual</p>
                                            <h4>$1500</h4>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End today sale -->
                        </div>
                        <!-- Row 5 -->

                        <div class="row">
                            <!-- Begin recent orders -->
                            <div class="col-12 col-lg-12" style="text-align:center">
                                <img src="assets/images/matriz.png" alt="" class="img-fluid">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Resumen de la mitigación </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Amenaza</th>
                                                        <th>Fecha de gestion</th>
                                                        <th>Encargado</th>
                                                        <th>Frecuencia</th>
                                                        <th>Impacto</th>
                                                        <th>Costo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 mb-1 mb-md-0">
                        <span>2022 &copy; Mainor.</span>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <span>Design and Develop By <span class="text-primary font-weight-500">Nor01
                            </span></span>
                    </div>
                </div>
            </div>
        </footer>

        <div class="setting-sidebar">
            <div class="card mb-0">
                <div class="card-header">
                    <h5 class="card-title dflex-between-center">
                        Informaci&oacute;n extra
                        <a href="javascript:void(0)"><i class="mdi mdi-close fs-sm"></i></a>
                    </h5>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
    <!-- Page End -->
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="assets/libs/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/flatpicker/js/flatpickr.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/libs/ckeditor4/ckeditor.js"></script>
    <script src="assets/libs/jquery-validation/js/jquery.validate.min.js"></script>
    <script src="assets/libs/jquery-validation/js/additional-methods.min.js"></script>
    <script src="assets/libs/chartjs/js/Chart.bundle.min.js"></script>
    <script src="assets/js/utils/colors.js"></script>
    <script src="assets/js/pages/dashboard.init.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    <!-- ================== BEGIN PAGE JS ================== -->
    <script src="assets/js/pages/create-task.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- ================== END PAGE JS ================== -->


</body>

</html>