<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/map-marker.png"/>
	<title>ISP-KIS || Se connecter</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/preload.min.css">
    <link rel="stylesheet" href="css/plugins.min.css">
    <link rel="stylesheet" href="css/style.blue-500.min.css">
    <link rel="stylesheet" href="css/width-boxed.min.css" id="ms-boxed" disabled="">

<script type="text/javascript" src="jquery/jquery.js"></script>
<script>
   $(document).ready(function(){
    var alert = $('#alert');
    if (alert.length > 0) {
      alert.hide().slideDown(500).delay(3000).slideUp();
    }
   });
</script>
</head>

<body>

<header class="ms-header ms-header-primary">
        <!--ms-header-primary-->
        <div class="container container-full">
          <div class="ms-title">
            <a href="index.php">
              <!-- <img src="assets/img/demo/logo-header.png" alt=""> -->
              <span class="ms-logo animated zoomInDown animation-delay-5">I</span>
              <h1 class="animated fadeInRight animation-delay-6">ISP <span>-KIS</span></h1>
            </a>
          </div>
          <div class="header-right">
            <div class="share-menu">
              <ul class="share-menu-list">
                <li class="animated fadeInRight animation-delay-3"><a href="javascript:void(0)" class="btn-circle btn-google"><i class="fa fa-google"></i></a></li>
                <li class="animated fadeInRight animation-delay-2"><a href="javascript:void(0)" class="btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="animated fadeInRight animation-delay-1"><a href="javascript:void(0)" class="btn-circle btn-twitter"><i class="fa fa-twitter"></i></a></li>
              </ul>
              <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7"><i class="fa fa-share"></i></a>
            </div>
            
            
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10"><i class="fa fa-windows"></i></a>
          </div>
        </div>
      </header>
      <nav class="navbar navbar-expand-md navbar-static ms-navbar ms-navbar-primary shrink fixed-top">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
              <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
              <span class="ms-logo ms-logo-sm">I</span>
              <span class="ms-title">ISP <strong>-KIS</strong></span>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown active">
                <a href="index.php" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="home">Acceuil <i class="fa fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li class="ms-tab-menu">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs ms-tab-menu-left" role="tablist">
                      <li class="nav-item"><a class="nav-link " href="#"><i class="fa fa-home "></i> A propos</a></li>
                      <li class="nav-item"><a class="nav-link " href="#" ><i class="fa fa-close "></i> Actualité</a></li>
                      <li class="nav-item"><a class="nav-link " href="login.php" ><i class="fa fa-user "></i> Se connecter</a></li>
                      </ul>
                    <!-- Tab panes -->
                   
                  </li>
                </ul>
              </li>
           
          
           
              
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="ecommerce">Options simplémentaires  <i class="fa fa-chevron-down"></i></i></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Voir les travaux</a></li>
                  <li><a class="dropdown-item" href="publier.php">Publier</a></li>
                  
                </ul>
              </li>
            </ul>
          </div>
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu"><i class="fa fa-windows"></i></a>
        </div> <!-- container -->
      </nav>

        <div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-dark-light">
        <div class="container">
<?php
 if (isset($_SESSION['flash'])):?>

 <?php foreach($_SESSION['flash'] as $type => $message):?>
  <div  style="margin-top:40px;" id="alert" class="container alert alert alert-<?php echo $type;?> ">
    <?php echo $message; ?>
  </div>
 <?php endforeach;?>
 <?php unset($_SESSION['flash']);?>
 <?php endif;?>


          <div class="text-center">
            <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">I</span>
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">ISP-<span>KIS</span></h1>
            <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Connectez vous comme etant  <span class="color-warning">Administrateur </span> du present site de gestion des publications des travaux scientifiques</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-lg-6">
            <div class="card card-hero card-primary animated fadeInUp animation-delay-7">
              <div class="card-body">
                <h1 class="color-primary text-center">Se connecter comme <span class="color-warning">Administrateur </span></h1>
               <form id="login" method="POST" autocomplete="off" onsubmit="return false">
                    <fieldset>
                      <div class="form-group label-floating invalide_nom">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <label class="control-label" for="nom">Nom d'utilisateur</label>
                          <input type="text" id="nom" class="form-control">
                          <small class="erreur_nom"></small>
                        </div>
                      </div>
                      <div class="form-group label-floating invalide_mdp">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <label class="control-label" for="mdp">Mot de passe</label>
                          <input type="password" id="mdp" class="form-control">
                          <small class="erreur_mdp"></small>
                        </div>
                      </div>
                     <div id="erreur" class="animated fadeInUp animation-delay-7"></div>
                     <div style="display: none;" class="spinner-border text-primary loader" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                    <button id="ajouter" type="submit" class="btn btn-raised btn-primary btn-block">Se connecter <i class="fa fa-long-arrow-right no-mr ml-1"></i></button>
                </form>
                <div class="text-center mt-4">
                  <h3>Naviguez aussi sur ses réseaux</h3>
                  <a href="javascript:void(0)" class="btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-twitter"><i class="fa fa-twitter"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-google"><i class="fa fa-google"></i></a>
                </div>
            </div>
          </div>
        </div>
      </div> <!-- container -->
              </div>
    
<style type="text/css">
 small{
  
  color: red;
  
 }
 .is-invalid  {
    color: red;
      
   }
   .label {
    color: red;
   }
 </style>
<script>
    $(document).ready(function(){
        $('#login').submit(function(){
          var nom = $('#nom').val();
          var mdp = $('#mdp').val();
          $('#ajouter').hide();
        //$('#erreur').html('<img src="img/loader.gif">');
        $('.loader').show();
       
              $('.erreur_mdp').html('');
              $('.invalde_mdp').removeClass('is-invalid');

              $.post('ajax/login.php', { nom:nom, mdp:mdp})
                  .done(function(data){
                      if (data.match('success') != null)
                       {
                          location = 'admin/index.php?page=dashboard';
                       }else 
                       {
                        $('#ajouter').show();
                        $('.loader').hide();
                        $('#erreur').html(data).slideDown(2000).delay(10000).slideUp();
                        //$('#register').show();
                        $('.invalide_nom').addClass('is-invalid');
                        
                        $('.invalde_mdp').addClass('is-invalid');
                        
                        $("#nom").focus();
                       }
                  });
       

        });


    });
</script>



<?php require 'include/footer.php'; ?>

</body>
</html>