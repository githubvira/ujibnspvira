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
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('/assets/'); ?>/logo.jfif" width="150" height="75" class="d-inline-block align-top" alt="">
                </a>
                <h1 class="text-center">Duri Ninja Community</h1>
            </nav>
            <nav class="nav nav-pills flex-column flex-sm-row">
                <!-- <li class="nav-item"><a class="nav-link active" href="#section1">Section 1</a></li> -->
                <a class="flex-sm-fill text-sm-center nav-link" href="#section1">Home</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#section2">Profil</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#section3">Visi dan Misi</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#section4">Produk Kami</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#section5">Kontak Kami</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#section6"><b><u>About us</u></b> </a>

            </nav>
        </header>
        <br><br>
        <div class="container-fluid y">
            <div class="row">
                <!-- <aside> -->
                <nav class="col-3" id="myScrollspy">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Home/index'); ?>">Artikel</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Home/event'); ?>">Event</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Home/galeryFoto'); ?>">Galery Foto</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Home/klienKami'); ?>">Klien Kami</a></li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Login</a>
                            <a class="nav-link" style="text-align: justify; text-indent: 0.5in;" href="<?php echo base_url('index.php/Home/signIn'); ?>">Sign In</a>
                            <a class="nav-link" style="text-align: justify; text-indent: 0.5in;" href="<?php echo base_url('index.php/Home/signOut'); ?>">Sign Out</a>
                        </li>
                    </ul>
                </nav>
                <!-- </aside> -->
                <main class="col-8 sectionContainer" data-spy="scroll" data-target="#myScrollspy" data-offset="0">
                    <div id="section1">
                        <!-- <div class="container-fluid bg-1 text-center"> -->
                        <h1>Duri Ninja Community</h1>
                        <img src="<?php echo base_url('/assets/image/'); ?>/sunmori all2.jpeg" class="img-circle" alt="Bird" width="700" height="350">
                        <h3>merupakan sebuah team motor di bawah naungan KNI (Kawasaki Ninja Indonesia). Lebih dari 30 member yang tergabung di team motor ini.</h3>
                    </div>

                    <!-- </div> -->
                    <div id="section2">
                        <h1>Duri Ninja Community</h1>
                        <p><em>We love Ninja!</em></p>
                        <h4>Komunitas para pecinta motor dan riding sunmori dan night ride bareng area Pakanbaru, Riau dan sekitarnya.</h4>
                        <!-- <p>We have created a fictional band website. Lorem ipsum..</p> -->
                        <img src="<?php echo base_url('/assets/image/'); ?>/kopdar3.png" class="img-fluid" alt="">

                    </div>
                    <div id="section3">
                        <h1>Visi dan Misi <br>Duri Ninja Community</h1>
                        <h3>VISI</h3>
                        <P>Kawasaki Ninja Indonesia mempunyai visi untuk menyatukan Klub dan Komunitas Kawasaki Ninja di Indonesia.</P>
                        <h3>MISI</h3>
                        <li>Mewujudkan rasa kekeluargaan, kebersamaan dan kesetiakawanan serta solidaritas diantara sesama anggota.</li>
                        <li>Membina para pemilik motor Kawasaki Ninja yang berada dalam bentuk Klub atau Komunitas untuk berpartisipasi dalam pembangunan Nasional melalui peningkatan kualitas dan disiplin dalam mengendarai kendaraan bermotor khususnya roda dua berjenis sport bermerk Kawasaki Ninja.</li>
                        <li>Meningkatkan kesejahteraan anggota beserta keluarga lahir dan batin.</li>
                        <li>Melindungi dan membela hak-hak dan kepentingan bersama..</li>

                    </div>
                    <div id="section4">
                        <h1>Produk Kami</h1>
                        <!-- <div class="container-fluid bg-3 text-center"> -->
                        <h3>Apa saja sih yang kami sediakan?</h3><br>
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Kaca Spion Aneka Jenis Motor</p> <img src="<?php echo base_url('/assets/image/'); ?>/kaca spion.jfif" alt="Image" width="350" height="300">
                            </div>
                            <div class="col-sm-4">
                                <p>Helm</p> <img src="<?php echo base_url('/assets/image/'); ?>/helm.jpg" alt="Image" width="320" height="300">
                            </div>
                            <div class="col-sm-4">
                                <p>Knalpot</p> <img src="<?php echo base_url('/assets/image/'); ?>/knalpot.jpg" alt="Image" width="320" height="300">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Stang Kopling</p> <img src="<?php echo base_url('/assets/image/'); ?>/stang kopling.jpg" alt="Image" width="320" height="300">
                            </div>
                            <div class="col-sm-4">
                                <p>Velg</p> <img src="<?php echo base_url('/assets/image/'); ?>/velg.webp" alt="Image" width="320" height="300">
                            </div>
                            <div class="col-sm-4">
                                <p>Knalpot</p> <img src="<?php echo base_url('/assets/image/'); ?>/knalpot.jpg" alt="Image" width="320" height="300">
                            </div>
                        </div>
                    </div>

                    <!-- </div> -->
                    <div id="section5">
                        <!-- <div class="container-fluidd bg-grey"> -->
                        <h1 class="text-center">CONTACT</h1>
                        <div class="row">
                            <div class="col-sm-5">
                                <p>Contact us and we'll get back to you within 24 hours.</p>
                                <p><span class="glyphicon glyphicon-map-marker"></span> Duri, Riau</p>
                                <p><span class="glyphicon glyphicon-phone"></span> 082284xxxxxx</p>
                                <p><span class="glyphicon glyphicon-envelope"></span> durininjacommunity@gmail.com</p>
                            </div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                    </div>
                                </div>
                                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <button class="btn btn-default pull-right" type="submit">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <div id="section6">
                        <h1>About Us</h1>
                        <h3>Duri Ninja Community</h3>
                        <p>
                            Di Antara beragam alat transportasi, Sepeda motor menempati peran utama dalam sendi kehidupan masyarakat. Untuk menunjang kegiatan dan memenuhi kebutuhan saat ini, Salah satu klub ninja memutuskan untuk Membuat suatu forum Kawasaki ninja.Forum tersebut dibentuk melalui jambore nasional Kawasaki ninja Indonesia pada tahun 2006 di Jogjakarta.Yang dihadiri oleh 31 klub dan komunitas Kawasaki ninja yang tersebar di seluruh pelosok Nusantara. KNI dipercaya oleh lebih dari 100 grup dan komunitas Kawasaki ninja all varian di tanah air.Tidak memandang nama ras suku klub itu sendiri, yang terpenting jiwa dan rasa yang ada di ninja.
                            KNI adalah wadah representasi penyaluran hobi interaksi organisasi, Relasi, Sosial dan bisnis.Yang bervariasi menyatukan seluruh pengendara Kawasaki ninja khususnya di Indonesia untuk membangun organisasi yang profesional dan bermanfaat luas bagi anggotanya dan masyarakat umumnya.
                            Sampai dengan sekarang, KNI ini memiliki member dari 22 region dan lebih dari 10.000 member yang berbeda yang tersebar di seluruh Indonesia.
                            .
                        </p>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('/assets/'); ?>/js/bootstrap.bundle.min.js" rel="stylesheet"></script>
    </body>



</html>