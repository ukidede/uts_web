<?php
include "koneksi2.php";
session_start();
$tampill = mysqli_query($conn, "SELECT * FROM jadwal_piket");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>STT ABHIRAMA DEVARI</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none"></span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="stt.jpeg" alt="" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../admin/home.php">Data Anggota</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../pengurus/index-pengurus.php">Data Kepengurusan</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index-piket.php">Jadwal Piket</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <section class="resume-section" id="wow">
        <div class="resume-section-content">
            <h2 align="center" class="mb-5">Jadwal Piket STT ABHIRAMA DEVARI</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="container">
                    <p><a href="tambah.php"><button type="button" class="btn btn-primary">Tambah Orang</button></p></a>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                                <th>Acction</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            while ($a = mysqli_fetch_array($tampill)) {
                                echo "
                                       <tr>
                                       <td>$a[Senin]</td>
                                       <td>$a[Selasa]</td>
                                       <td>$a[Rabu]</td>
                                       <td>$a[Kamis]</td>
                                       <td>$a[Jumat]</td>
                                       <td>
                                           <a href='edit.php?id=$a[id]'><button type='button' class=' btn btn-success btn-sm'>Edit</button></a>
                                           <a href='hapus.php?id=$a[id]'><button type='button' class=' btn btn-warning  btn-sm'>Hapus</button></a>
                                       </td>
                                   </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- <p><a href="../logout.php"><button type="button" class="btn btn-dark">Logout</button></p></a> -->

                </div>
                <!-- Bootstrap core JS-->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
                <!-- Third party plugin JS-->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
</body>

</html>