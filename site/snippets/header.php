<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <!-- CSS linkers -->
  <?= css('assets/css/vendor/bootstrap/css/bootstrap.css') ?> 
  <?= css('assets/css/vendor/font-awesome/css/font-awesome.min.css') ?>
  <?= css('assets/css/grayscale.min.css') ?> 

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">

  <!-- Custom image header that changes once a day -->
  <!-- <script>
    var images = [
      "image_01.jpg",
      "image_02.jpg",
      "image_03.JPG",
      "image_04.JPG",
      "image_05.JPG"
    ];
    var now = Date.now();
    var milliDay = 86400000;
    function init(){
      now = Math.floor((now)/milliDay);
      now = now % images.length;
      var header = document.getElementById('header-image');
      //if(header && header != null)
        header.style.backgroundImage = "url('assets/images/header-images/" + images[now] + "')";
      //}
    }
    window.onload = init;
  </script> -->

  <!-- Custom Style -->
  <style>
    .floating-shader{
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: 0;
      background-color: rgba(0,0,0,.5);
      top: 0;
      left: 0;
      display: block;
    }
    #map{
      width: 80%;
      height: 100vh;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      margin-top: 50px !important;
    }
    header{
        position: relative !important;
    }
    .navbar-custom.top-nav-collapse a{
        color: #000;
    }
    .navbar-custom.top-nav-collapse{
        background-color: #d0dae5;
        border-bottom: none;
        -webkit-box-shadow: 0px 1px 6px 0px rgba(0,0,0,0.4);
        -moz-box-shadow: 0px 1px 6px 0px rgba(0,0,0,0.4);
        box-shadow: 0px 1px 6px 0px rgba(0,0,0,0.4);
    }
    .navbar-nav{
        white-space: nowrap;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }
    .navbar-nav > li{
        float: none !important;
    }
    .nav > li{
        display: inline-block !important;
        float: none !important;
    }
    .navbar-custom.top-nav-collapse{
        padding-bottom: 50px;
    }
    @media (max-width:1200px){
        .nav > li{
            font-size: .7em;
        }
    }
    @media (max-width:768px){
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
        .navbar-custom a{color:rgb(0,128,0)}
        #map{width: 100%; height: 50vh;}
        .navbar, .navbar-header{padding-left: 0; max-width: 100vw}
        .navbar-header{
            margin-right: 0;
        }
        .nav > li{
            font-size: 1em;
            display: block !important;
        }
        .navbar-nav{
            white-space: nowrap;
            position: relative;
            left: 0;
            transform: translateX(0);
        }
    }
  </style>

</head>
<body>

