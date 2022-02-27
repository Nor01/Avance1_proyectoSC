<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Mainor Admin is a full featured, multipurpose, premium bootstrap admin template built with Bootstrap 4 Framework, HTML5, CSS and JQuery.">
    <meta name="keywords"
        content="admin, panels, dashboard, admin panel, multipurpose, bootstrap, bootstrap4, all type of dashboards">
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
</head>

<body>
    <!-- Begin Page -->
    <div class="page-wrapper">
        <!-- Begin Header -->
        <!-- Begin Header -->
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
        <!-- Header End -->
        <!-- Header End -->
        <!-- Begin Left Navigation -->
        <!-- Begin Left Navigation -->
        <aside class="side-navbar">
            <div class="scroll-content" id="metismenu">
                <ul id="side-menu" class="metismenu list-unstyled">
                    <li class="side-nav-title side-nav-item menu-title">Menu</li>
                    <li>
                        <a href="javascript:void(0);" class="side-nav-link" aria-expanded="false">
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
                        <a href="javascript:void(0)"  class="side-nav-link"
                            aria-expanded="false">
                            <i class="bx bx-file"></i>
                            <span> Documentation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="main-content">
            <!-- content -->
            <div class="page-content">
                <!-- page header -->
                <div class="page-title-box">
                    <div class="container-fluid">
                        <div class="page-title dflex-between-center">
                            <h3 class="mb-1 font-weight-bold">Crear Riesgo</h3>
                            <ol class="breadcrumb mb-0 mt-1">
                                <li class="breadcrumb-item">
                                    <a href="../index.php">
                                        <i class="bx bx-home fs-xs"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                        Apps
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Crear Riesgo</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- page content -->
                <div class="page-content-wrapper mt--45">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Crear Riesgo</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="assets/bat/create-task.php">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group floating-label enable-floating-label show-label">
                                                    <select class="form-control wide" id="taskTeam2" name="nombre_task">
                                                    <option disabled selected>Seleccionar</option>
                                                    <option value="A1">Catástrofes naturales.</option>
                                                    <option value="A2">Robo de equipo de computo.</option>
                                                    <option value="A3">Malware en el equipo de Computo.</option>
                                                    <option value="A4">Corte de internet.</option>
                                                    <option value="A5">Escritorios en mal estado.</option>
                                                    <option value="A6">Poca ventilacion.</option>
                                                    <option value="A7">Contaminacion auditiva.</option>
                                                    <option value="A8">Equipo de trabajo en mal estado.</option>
                                                    <option value="A9">Fallas en el suministro de servicios públicos.</option>
                                                    <option value="A10">Incumplimiento del marco legal.</option>
                                                    <option value="A11">Delitos informáticos, ciberataques.</option>
                                                    <option value="A12">Alta rotación de talento humano.</option>
                                                    <option value="A13">Accidentes laborales.</option>
                                                    <option value="A14">Ransomware en servidor de respaldos.</option>
                                                    <option value="A15">Malware en Time-Capsule.</option>
                                                </select>

                                                <label for="taskname">Nombre de amenaza <span
                                                        class="text-danger">*</span></label>
                                                <div class="validation-error d-none font-size-13">This field is required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group floating-label enable-floating-label show-label">
                                                <input id="taskowner" name="encargado_task" type="text"
                                                    placeholder="Mainor Aguilar" class="form-control">
                                                <label for="taskowner">Encargado de amenaza<span
                                                        class="text-danger">*</span></label>
                                                <div class="validation-error d-none font-size-13">This field is required
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group floating-label enable-floating-label show-label">
                                                <input id="projectbudget" name="costo_task" type="text"
                                                     class="form-control" readonly>
                                                <label for="projectbudget">Costo de amenaza <span
                                                        class="text-danger">*</span></label>
                                                <div class="validation-error d-none font-size-13">This field is required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="form-group floating-label enable-floating-label show-label">
                                                <select class="form-control wide" id="taskTeam" name="acciones_task"
                                                    multiple>
                                                    <option value="Evitar">Evitar</option>
                                                    <option value="Transferir">Transferir</option>
                                                    <option value="Mitigar">Mitigar</option>
                                                    <option value="Aceptar">Aceptar</option>
                                                   
                                                </select>
                                                <label for="taskTeam">Acci&oacute;n a realizar</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="form-group floating-label enable-floating-label show-label">
                                            <input id="projecttime" name="tiempos_task" type="text"
                                                     class="form-control" readonly>
                                                <label for="projecttime">Tiempo de resoluci&oacute;n</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group floating-label enable-floating-label show-label">
                                                    <select class="form-control wide" id="taskTeamF" name="frecuencia_task">
                                                    <option disabled selected>Seleccionar</option>
                                                    <option value="F1">Improbable</option>
                                                    <option value="F2">Posible</option>
                                                    <option value="F3">Ocasional</option>
                                                    <option value="F4">Probable</option>
                                                    <option value="F5">Frecuente</option>
                                                </select>

                                                <label for="taskname">Frecuencia de amenaza <span
                                                        class="text-danger">*</span></label>
                                                <div class="validation-error d-none font-size-13">This field is required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group floating-label enable-floating-label show-label">
                                                    <select class="form-control wide" id="taskTeamI" name="impacto_task">
                                                    <option disabled selected>Seleccionar</option>
                                                    <option value="I1">Insignificante</option>
                                                    <option value="I2">Menor</option>
                                                    <option value="I3">Moderado</option>
                                                    <option value="I4">Mayor</option>
                                                    <option value="I5">Catastrófico</option>
                                                </select>

                                                <label for="taskname">Impacto de amenaza <span
                                                        class="text-danger">*</span></label>
                                                <div class="validation-error d-none font-size-13">This field is required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group floating-label enable-floating-label show-label">
                                                <input id="taskTags" name="acciones_inmediatas_task" type="text"
                                                    placeholder="Contactar con proveedor, Otro" class="form-control" />
                                                <label for="taskTags">Acciones Inmediatas</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group floating-label enable-floating-label show-label">
                                                <textarea id="task-desc" name="descripcion_task">Agregue la descripcion de las acciones seleccionadas previamente</textarea>
                                                <label for="task-desc">Descripci&oacute;n de las acciones a realizar <span
                                                        class="text-danger">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <button class="btn btn-primary" data-effect="wave" type="submit">Create
                                            Task</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
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

    <script>

// Frecuencia			Impacto
// 1. Improbable		1. Insignificante
// 2. Posible			2. Menor
// 3. Ocasional		    3. Moderado
// 4. Probable			4. Mayor
// 5. Frecuente		    5. Catastrófico

// 1. Accidentes laborales: 2,3
// 2. Rotacion de talento: 3,3
// 3. Delitos informáticos, ciberataques: 4,4
// 4. Incumplimiento del marco legal: 2,3
// 5. Fallas en el suministro de servicios públicos: 4,4
// 6. Equipo de trabajo en mal estado: 3,3
// 7. Contaminacion auditiva: 2,3
// 8. Poca ventilacion: 3,4
// 9. Escritorios en mal estado: 3,4
// 10. Corte de internet: 3,3
// 11. Ransomware en servidor de respaldos: 2,5
// 12. Malware en el equipo de Computo: 3,4
// 13. Robo de equipo de computo: 2,4
// 14. Catástrofes naturales como terremotos, inundaciones, incendios: 2,5
// 15. Malware en Time-Capsule: 4,4

        $('#taskTeam2').change(function(){

            if($('#taskTeam2').val() == 'A1'){
                $('#projectbudget').val('$ '+20000);
                $('#projecttime').val(96 + ' horas');
                $('#taskTeamF').val('F2');
                $('#taskTeamI').val('I3');
            }else if($('#taskTeam2').val() == 'A2'){
                $('#projectbudget').val('$ '+1000);
                $('#projecttime').val(48 + ' horas');
                $('#taskTeamF').val('F3');
                $('#taskTeamI').val('I3');
            }else if($('#taskTeam2').val() == 'A3'){
                $('#projectbudget').val('$ '+900);
                $('#projecttime').val(48 + ' horas');
                $('#taskTeamF').val('F4');
                $('#taskTeamI').val('I4');
            }else if($('#taskTeam2').val() == 'A4'){
                $('#projectbudget').val('$ '+200);
                $('#projecttime').val(4 + ' horas');
                $('#taskTeamF').val('F2');
                $('#taskTeamI').val('I3');
            }else if($('#taskTeam2').val() == 'A5'){
                $('#projectbudget').val('$ '+400);
                $('#projecttime').val(4 + ' horas');
                $('#taskTeamF').val('F4');
                $('#taskTeamI').val('I4');
            }else if($('#taskTeam2').val() == 'A6'){
                $('#projectbudget').val('$ '+300);
                $('#projecttime').val(4 + ' horas');
                $('#taskTeamF').val('F3');
                $('#taskTeamI').val('I3');
            }else if($('#taskTeam2').val() == 'A7'){
                $('#projectbudget').val('$ '+600);
                $('#projecttime').val(48 + ' horas');
                $('#taskTeamF').val('F2');
                $('#taskTeamI').val('I3');
            }else if($('#taskTeam2').val() == 'A8'){
                $('#projectbudget').val('$ '+700+ ' - '+'$ '+1500);
                $('#projecttime').val(24 + ' horas');
                $('#taskTeamF').val('F3');
                $('#taskTeamI').val('I4');
            }else if($('#taskTeam2').val() == 'A9'){
                $('#projectbudget').val('$ '+500);
                $('#projecttime').val(8 + ' horas');
                $('#taskTeamF').val('F3');
                $('#taskTeamI').val('I4');
            }else if($('#taskTeam2').val() == 'A10'){
                $('#projectbudget').val('$ '+500);
                $('#projecttime').val(24 + ' horas');
                $('#taskTeamF').val('F3');
                $('#taskTeamI').val('I3');
            }else if($('#taskTeam2').val() == 'A11'){
                $('#projectbudget').val('$ '+2000);
                $('#projecttime').val(72 + ' horas');
                $('#taskTeamF').val('F2');
                $('#taskTeamI').val('I5');
            }else if($('#taskTeam2').val() == 'A12'){
                $('#projectbudget').val('$ '+400);
                $('#projecttime').val(48 + ' horas');
                $('#taskTeamF').val('F3');
                $('#taskTeamI').val('I4');
            }else if($('#taskTeam2').val() == 'A13'){
                $('#projectbudget').val('$ '+500);
                $('#projecttime').val(5 + ' horas');
                $('#taskTeamF').val('F2');
                $('#taskTeamI').val('I4');
            }else if($('#taskTeam2').val() == 'A14'){
                $('#projectbudget').val('$ '+5000);
                $('#projecttime').val(72 + ' horas');
                $('#taskTeamF').val('F2');
                $('#taskTeamI').val('I5');
            }else {
                $('#projectbudget').val('$ '+1500);
                $('#projecttime').val(48 + ' horas');
                $('#taskTeamF').val('F4');
                $('#taskTeamI').val('I4');
            }
        });

        $('#taskTeam').change(function(){
            console.log($('#taskTeam').val())
        });
    </script>


</body>

</html>