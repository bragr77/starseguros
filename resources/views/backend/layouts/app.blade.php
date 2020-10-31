<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="apple-touch-icon" href="{{  asset('favicon.png') }}">
    <link rel="icon" type="image/png" href="{{  asset('favicon.png') }}"/>

    <title>Stars Seguros Panel</title>

    <!-- Custom fonts for this template-->
    <link href="{{  asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{  asset('backend/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{  asset('backend/css/tabla.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    {{--  iconos font awesone  --}}
    <link href="{{  asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    {{--  datepicker  --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/datepicker/css/bootstrap-datepicker.standalone.min.css') }}"/>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('panel') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-star"></i>
                </div>
                <div class="sidebar-brand-text mx-3">StarsSeguros</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('panel') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel Administrativo</span></a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Registros
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuform" aria-expanded="true" aria-controls="menuform">
                    <i class="far fa-address-card"></i>
                    <span>Formularios</span>
                </a>
                <div id="menuform" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('formularios.index') }}">
                            <i class="fas fa-search"></i>
                            <span>Ver Formularios</span>
                        </a>
                        <a class="collapse-item" href="{{ route('formularios.create') }}">
                            <i class="fas fa-user-edit"></i>
                            <span>Registrar Cliente</span>
                        </a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Mensajeria
            </div>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('contactos.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Contactos</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('mensajes.index') }}">
                    <i class="fas fa-inbox"></i>
                    <span>Mensajes Recibidos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#emailsmasivos" aria-expanded="true" aria-controls="emailsmasivos">
                    <i class="fas fa-mail-bulk"></i>
                    <span>Emails Masivos</span>
                </a>
                <div id="emailsmasivos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('emails.index') }}">
                            <i class="fas fa-search"></i>
                            <span>Ver Enviados</span>
                        </a>
                        <a class="collapse-item" href="{{ route('emails.create') }}">
                            <i class="fas fa-paper-plane"></i>
                            <span>Enviar Masivos</span>
                        </a>
                    </div>
                </div>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                  </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{  asset('img/admin.jpg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                {{--  <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a>
                                <div class="dropdown-divider"></div>  --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesiòn
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!--Contenido -->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- fin contenido -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Todos los derechos reservados | Este sitio web fue creado Por: <a href="https://ragrtics.com.ve " target="_blank ">Raúl González</a>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{  asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{  asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{  asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{  asset('backend/js/sb-admin-2.min.js') }}"></script>

    {{--  datepicker  --}}
    <script src="{{ asset('frontend/datepicker/js/bootstrap-datepicker-es.js') }}"></script>

    {{--  <!-- Page level plugins -->
    <script src="{{  asset('backend/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{  asset('backend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{  asset('backend/js/demo/chart-pie-demo.js') }}"></script>  --}}

    <script>
        $('.rg-date').datepicker({
            format: "dd/mm/yyyy"
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#emailmasivos').DataTable({
                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     'Mostrar <select>'+
                                       '<option value="10">10</option>'+
                                       '<option value="20">20</option>'+
                                       '<option value="30">30</option>'+
                                       '<option value="40">40</option>'+
                                       '<option value="50">50</option>'+
                                       '<option value="100">100</option>'+
                                       '<option value="150">150</option>'+
                                       '<option value="200">200</option>'+
                                       '<option value="500">500</option>'+
                                       '<option value="-1">Todos</option>'+
                                       '</select> Registros',
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad"
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#mensajes').DataTable({
                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     'Mostrar <select>'+
                                       '<option value="10">10</option>'+
                                       '<option value="20">20</option>'+
                                       '<option value="30">30</option>'+
                                       '<option value="40">40</option>'+
                                       '<option value="50">50</option>'+
                                       '<option value="100">100</option>'+
                                       '<option value="150">150</option>'+
                                       '<option value="200">200</option>'+
                                       '<option value="500">500</option>'+
                                       '<option value="-1">Todos</option>'+
                                       '</select> Registros',
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad"
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#formularios').DataTable({
                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     'Mostrar <select>'+
                                       '<option value="10">10</option>'+
                                       '<option value="20">20</option>'+
                                       '<option value="30">30</option>'+
                                       '<option value="40">40</option>'+
                                       '<option value="50">50</option>'+
                                       '<option value="100">100</option>'+
                                       '<option value="150">150</option>'+
                                       '<option value="200">200</option>'+
                                       '<option value="500">500</option>'+
                                       '<option value="-1">Todos</option>'+
                                       '</select> Registros',
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad"
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#contactos').DataTable({
                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     'Mostrar <select>'+
                                       '<option value="10">10</option>'+
                                       '<option value="20">20</option>'+
                                       '<option value="30">30</option>'+
                                       '<option value="40">40</option>'+
                                       '<option value="50">50</option>'+
                                       '<option value="100">100</option>'+
                                       '<option value="150">150</option>'+
                                       '<option value="200">200</option>'+
                                       '<option value="500">500</option>'+
                                       '<option value="-1">Todos</option>'+
                                       '</select> Registros',
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad"
                    }
                }
            });
        });
    </script>

</body>

</html>


