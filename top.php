<!DOCTYPE html>
<html>
  <head>
    <title>Website Kelurahan Kademangan</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <!--
    Powerful Template
    http://www.templatemo.com/tm-390-powerful
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">

    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">
    <script src="js/modernizr.custom.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB4RYXgTatSsv2irhgwqfA8EyKP1CyK32k&callback=myMap"></script>
    <script>
    function myMap() {
        var latlng = {
            center: new google.maps.LatLng(-6.335051,106.669901);
            zoom:9,
        };
        var map = new google.maps.Map(document.getElementById("map"), latlng);
    }
    </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php include('data-index.php') ?>
    <header>
      <div id="templatemo_top" class="mainTop">
        <div class="container">
          <div class="row">
            <div class="hidden-xs hidden-sm col-md-6">
                <div class="mailme">
                  <a href="mailto:email@gmail.com"><i class="fa fa-envelope"></i>email@gmail.com</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="socials">
                <ul>
<!--              <li><a href="#"><i class="fa fa-twitter soc"></i></a></li> -->
                  <li><a href="#"><i class="fa fa-facebook soc"></i></a></li>
<!--              <li><a href="#"><i class="fa fa-rss soc"></i></a></li> -->
<!--              <li><a href="#"><i class="fa fa-dribbble soc"></i></a></li> -->
                  <li><a href="#"><i class="fa fa-instagram soc"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- e/o mainTop -->

      	<div id="slider" class="nivoSlider">
        <?php foreach ($data_galeri as $galeri): ?>
            <a href="#"><img src="pages/galeri/res/<?php echo $galeri['nama_file'] ?>" alt="slide 1" /></a>
        <?php endforeach; ?>
    	</div>
    </header>

    <div class="mWrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="logo">
              <a href="#"><img src="images/logo.png" alt="LOGO"></a>
                <a href="#"> | WEBSITE WARGA KELURAHAN KADEMANGAN</a>
            </div>
          </div>
          <div class="col-sm-8 col-md-8">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#templatemo_services">Layanan</a></li>
                <li><a href="index.php#templatemo_about">Tentang</a></li>
                <li><a href="index.php#templatemo_contact">Kontak</a></li>
                <li><a href="pages/login/index.php">Login</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
