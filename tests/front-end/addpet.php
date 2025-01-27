<?php

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AllPet | Adicionar Pet </title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/fontawesome-free-6.4.0-web/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/fontawesome-free/css/style-allpet.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion fixed-top" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./index.html">
                <div class="sidebar-brand-icon">
                    <img src="../icon-allpet.svg" alt="Dog">
                </div>
                <div class="sidebar-brand-text fs-6 mx-1">ALLPET</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="./index.html">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Funcionário -->
            <li class="nav-item">
                <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFuncionario"
                    aria-expanded="true" aria-controls="collapseFuncionario">
                    <a class="text-reset text-decoration-none" href="#collapseFuncionario">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Funcionários</span>
                    </a>
                </div>
                <div id="collapseFuncionario" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a class="collapse-item" href="./addfuncionario.php">Adicionar Funcionário</a>
                        <a class="collapse-item" href="./confuncionario.php">Consultar Funcionário</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Serviço -->
            <li class="nav-item">
                <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServico"
                    aria-expanded="true" aria-controls="collapseServico">
                    <a class="text-reset text-decoration-none" href="#collapseServico">
                        <i class="fas fa-fw fa-file-alt"></i>
                        <span>Serviços</span>
                    </a>
                </div>
                <div id="collapseServico" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a class="collapse-item" href="./addservico.php">Adicionar Serviços</a>
                        <a class="collapse-item" href="./conservico.php">Consultar Serviços</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tutor -->
            <li class="nav-item">
                <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTutor"
                    aria-expanded="true" aria-controls="collapseTutor">
                    <a class="text-reset text-decoration-none" href="#collapseTutor">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Tutores</span>
                    </a>
                </div>
                <div id="collapseTutor" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a class="collapse-item" href="./addtutor.php">Adicionar Tutor</a>
                        <a class="collapse-item" href="./contutor.php">Consultar Tutor</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pet Collapse Menu -->
            <li class="nav-item">
                <div class="nav-link collapsed" data-toggle="collapse" data-target="#collapsePet" aria-expanded="true"
                    aria-controls="collapsePet">
                    <a class="text-reset text-decoration-none" href="#collapsePet">
                        <i class="fas fa-fw fa-paw"></i>
                        <span>Pets</span>
                    </a>
                </div>
                <div id="collapsePet" class="collapse" aria-labelledby="headingPets" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções:</h6>
                        <a class="collapse-item" href="./addpet.php">Adicionar Pet</a>
                        <a class="collapse-item" href="./conpet.php">Consultar Pet</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Outros
            </div>

            <!-- Nav Item - Relatórios -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRelatorio"
                    aria-expanded="true" aria-controls="collapseRelatorio" href="#collapseRelatorio">
                    <i class="fas fa fa-bar-chart"></i>
                    <span>Relatórios</span>
                </a>
                <div id="collapseRelatorio" class="collapse" aria-labelledby="headingSettings"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções</h6>
                        <a class="collapse-item" href="../buttons.html">Buttons</a>
                        <a class="collapse-item" href="../cards.html">Cards</a>
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
                <nav
                    class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed-top margin-l">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <h5 class="text-primary">Pet - Adicionar</h5>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts 
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                < Counter - Alerts 
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <Dropdown - Alerts 
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <Nav Item - Messages 
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                < Counter - Messages 
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            < Dropdown - Messages 
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Fábio Migliari</span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Body Content-->

                <!-- Form Container-->
                <div class="card shadow container w-75 margin-b margin-t" id="card">

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <div class="mt-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pet-tab" data-bs-toggle="tab" href="#pet" role="tab"
                                        aria-controls="pet" aria-selected="true">Pet</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="pet" role="tabpanel" aria-labelledby="pet-tab">

                                <!-- Pet tab content -->

                                <div class="container mt-5">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nomepet" class="form-label"><b>Nome</b></label>
                                            <input type="text" class="form-control" id="nomepet" name="nomepet"
                                                placeholder="Digite o nome do pet">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="especiepet" class="form-label"><b>Espécie</b></label>
                                            <select class="form-control" id="especiepet" name="especiepet">
                                                <option value="0">Selecione...</option>
                                                <option value="1">A </option>
                                                <option value="2">B </option>
                                                <option value="3">C </option>
                                                <option value="4">D </option>
                                            </select>
                                        </div>
                                        <div class="col mb-3">
                                            <label for="racapet" class="form-label"><b>Raça</b></label>
                                            <select class="form-control" name="racapet" id="racapet">
                                                <option value="0">Selecione...</option>
                                                <option value="1">Akita </option>
                                                <option value="2">Basset hound </option>
                                                <option value="3">Beagle </option>
                                                <option value="4">Bichon frise </option>
                                                <option value="5">Boiadeiro australiano </option>
                                                <option value="6">Border collie </option>
                                                <option value="7">Boston terrier </option>
                                                <option value="8">Boxer </option>
                                                <option value="9">Buldogue francês </option>
                                                <option value="10">Buldogue ingles </option>
                                                <option value="11">Bullterrier </option>
                                                <option value="12">Cane corso </option>
                                                <option value="13"> Cavalier king charles spaniel </option>
                                                <option value="14"> Chihuahua </option>
                                                <option value="15"> Chow chow </option>
                                                <option value="16"> Cocker spaniel ingles </option>
                                                <option value="17"> Dachshund </option>
                                                <option value="18"> Dálmata </option>
                                                <option value="19"> Doberman </option>
                                                <option value="20"> Dogo argentino </option>
                                                <option value="21"> Dogue alemão </option>
                                                <option value="22"> Fila brasileiro </option>
                                                <option value="23"> Golden retriever </option>
                                                <option value="24"> Husky siberiano </option>
                                                <option value="25"> Jack russell terror </option>
                                                <option value="26"> Labrador retriever </option>
                                                <option value="27"> Lhasa apso </option>
                                                <option value="28"> Lulu da pomerânia </option>
                                                <option value="29"> Maltês </option>
                                                <option value="30"> Mastiff inglês </option>
                                                <option value="31"> Mastim tibetano </option>
                                                <option value="32"> Pastor alemão </option>
                                                <option value="33"> Pastor australiano </option>
                                                <option value="34"> Pastor de Shetland </option>
                                                <option value="35"> Pequines </option>
                                                <option value="36"> Pinscher </option>
                                                <option value="37"> Pit bull </option>
                                                <option value="38"> Poodle </option>
                                                <option value="39"> Pug </option>
                                                <option value="40"> Rottweiler </option>
                                                <option value="41"> Schnauzer </option>
                                                <option value="42"> Shar-pei </option>
                                                <option value="43"> Shiba </option>
                                                <option value="44"> Shih tzu </option>
                                                <option value="45"> Staffordshire bull terrier </option>
                                                <option value="46"> Weimaraner </option>
                                                <option value="47"> Vorkshire </option>
                                            </select>
                                        </div>
                                        <div class="col mb-3">
                                            <label for="pelagempet" class="form-label"><b>Pelagem</b></label>
                                            <select class="form-control" id="pelagempet" name="pelagempet">
                                                <option value="0">Selecione...</option>
                                                <option value="Pequeno">Pequena</option>
                                                <option value="medio">Média</option>
                                                <option value="grande">Grande</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="sexopet" class="form-label"><b>Sexo</b></label>
                                            <select class="form-control" id="sexopet" name="sexopet">
                                                <option value="0">Selecione...</option>
                                                <option value="Pequeno">Masculino </option>
                                                <option value="medio">Feminino </option>
                                            </select>
                                        </div>
                                        <div class="col mb-3">
                                            <label for="funcao" class="form-label"><b>Data de Nascimento</b></label>
                                            <input type="date" class="form-control" id="dtnasc" name="dtnasc">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="obspet" class="form-label"><b>Observações</b></label>
                                            <textarea class="form-control" id="obspet" rows="5" nome="obspet"
                                                placeholder="Insira aqui observações importantes"></textarea>
                                        </div>
                                    </div>
                                    <hr>

                                    <!--BOTÕES ADICIONAR -->
                                    <div class="container mt-4 mb-5">
                                        <div class="d-flex justify-content-between">
                                            <a href="./addpet.html" class="btn btn-primary btn-circle" title="Voltar">
                                                <i class="fas fa-fw fa-chevron-left"></i></a>
                                            <div class="ml-auto">
                                                <a href="./addpet.html" class="btn btn-success btn-circle"
                                                    title="Adicionar">
                                                    <i class="fas fa-fw fa-chevron-down"></i></a>
                                                <a href="./addpet.html" class="btn btn-danger btn-circle"
                                                    title="Excluir">
                                                    <i class="fas fa-fw fa-xmark"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FIM BOTÕES ADICIONAR -->
                                </div>
                            </div>

                        </div>
                        <!-- /.container-fluid -->

                    </div>
                </div>
                <!-- End Form Container-->

                <!-- End Body Content-->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Footer -->
    <footer class="sticky-footer bg-white margin-l">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Activate tab functionality
        var tab = new bootstrap.Tab(document.getElementById("pet-tab"));
        tab.show();


    </script>
    <script src="../js/allpet.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>