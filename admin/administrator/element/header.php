<?php 



session_start();

 

if($_SESSION['status'] !="login"){

    header("location:../index.php");

    }

?>

<?php

    require '../../koneksi/koneksi.php';

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <title>Arisandi</title>

        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

        <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>                

    </head>

    <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

            <a class="navbar-brand" href="beranda.php">Arisandi</a>

            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

            <!-- Navbar Search-->

            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            </form>

            <!-- Navbar-->

            <ul class="navbar-nav ml-auto ml-md-0">

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="fungsi/logout.php">Logout</a>

                    </div>

                </li>

            </ul>

        </nav>

        <div id="layoutSidenav">

            <div id="layoutSidenav_nav">

                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

                    <div class="sb-sidenav-menu">

                        <div class="nav">

                            <div class="sb-sidenav-menu-heading">Menu</div>

                            <a class="nav-link" href="index.php">

                                <div class="sb-nav-link-icon"></div>

                                User Management

                            </a>

                            <a class="nav-link" href="ganti_password.php">

                                <div class="sb-nav-link-icon"></div>

                                Ganti Password

                            </a>

                        </div>

                    </div>

                    <div class="sb-sidenav-footer">

                        <div class="small">Logged in as:</div>

                        <?= $_SESSION['username'];?>

                    </div>

                </nav>

            </div>

            <div id="layoutSidenav_content">