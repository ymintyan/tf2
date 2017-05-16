<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TradeFin</title>

    <!-- Bootstrap Core CSS -->
    <?php importStyle("vendor/bootstrap/css/bootstrap.css"); ?>
   <!--  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <?php importStyle("vendor/font-awesome/css/font-awesome.css"); ?>
    <!-- <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"> -->

    <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>-->
   
    <!-- Theme CSS -->
     <?php importStyle("css/Welcome.css"); ?> 
     <link href="css/agency.css" rel="stylesheet">

    
</head>
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                   <!-- <img src="<?php importImageURL("img/sprite.png");?>" /> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="welcome-page.php">Welcome</a>
                    </li>
                    <li>
                        <a href="#">Register as an investor</a>
                    </li>
                    <li>
                        <a href="#">Register as a business </a>
                    </li>
                    <li>
                        <a href="#">Login</a>
                    </li>
                    <!--<li>
                        <a href="#contact">Contact</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container fullwidth-header">
            <div class="intro-text">
                <div class="intro-lead-in">Supply Chain Finance Marketplace </div>
                <div class="intro-heading">and E-Invoicing Platform</div>
               
                    
              
                <a href="#video" class="page-scroll btn btn-xl">Learn More</a>
            </div>
        </div>
    </header>
     <section id="video" class="text-center">
         <div class="imgRounded"></div>
         <div class="imgRounded_img"></div>
               
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-video">TradeFin is a supply chain finance marketplace where Suppliers get paid early, corporations improve their sales and profitability and financiers make attractive returns with low risk</p>
                    <a href="javascript:PopUpShow()" class="btn btn-xl">watch the video</a>
                </div>
            </div>
        </div>
    </section>
     
<div class="b-popup" id="popup1">
    <div class="b-popup-content">
        <video id="video_play" width="80%" hight="800px" controls>
            <source src="video/TradeFin_Explainer_Rupee_Ver_FULLRES.ogv" type='video/ogg'>
            <source src="video/TradeFin_Explainer_Rupee_Ver_FULLRES.mp4" type='video/mp4'>
            <!-- <source src="video/TradeFin_Explainer_Rupee_Ver_FULLRES.mov"> -->
        </video>
        <a href="#" onClick="PopUpHide()"> &times;</a>
    </div>
</div>


<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script>
    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHide();
    });
    //Функция отображения PopUp
    function PopUpShow(){
        $("#popup1").show();
        $("#video_play")[0].play();
    }
    //Функция скрытия PopUp
    function PopUpHide(){
        $("#video_play")[0].pause();
        $("#popup1").hide();

    }
</script>

 
