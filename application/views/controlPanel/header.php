<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BNSP</title>
    <link href="<?php echo base_url('/assets/'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('/assets/'); ?>/css/style.css" rel="stylesheet">

</head>

<body>

    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('/assets/'); ?>/logo.jfif" width="150" height="75" class="d-inline-block align-top" alt="">
                </a>

                <h1 class=" text-center">Duri Ninja Community</h1>
            </nav>
            <nav class="nav nav-pills flex-column flex-sm-row">

                <a class="flex-sm-fill text-sm-center nav-link active" href="<?php echo base_url('index.php/ControlPanel/index'); ?>">Home</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('index.php/ControlPanel/index'); ?>">Profil</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('index.php/ControlPanel/index'); ?>">Visi dan Misi</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('index.php/ControlPanel/index'); ?>">Produk Kami</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('index.php/ControlPanel/index'); ?>">Kontak Kami</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('index.php/ControlPanel/index'); ?>"><b><u>About us</u></b> </a>

            </nav>
        </header>
        <br><br>
        <div class="container-fluid y">
            <div class="row">
                <!-- <aside> -->
                <nav class="col-2" id="myScrollspy">
                    <ul class="nav nav-pills flex-column sideNavContainer">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Home/index'); ?>">Artikel</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Home/event'); ?>">Event</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Home/galeryFoto'); ?>">Galery Foto</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Home/klienKami'); ?>">Klien Kami</a></li>
                        <li class="nav-item">
                            <!-- <a class="nav-link">Login</a> -->
                            <a class="nav-link" href="#">Sign In</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Sign Out</a>

                        </li>
                    </ul>
                </nav>
                <!-- </aside> -->