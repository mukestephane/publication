

<?php require 'functions/db.php';

  $req = $db->query('SELECT * FROM travaux WHERE valided=1 ORDER BY date_publie DESC LIMIT 10');
  $count = $req->rowCount();
  $result=[];
  while($row = $req->fetchObject()){
    $result[]= $row;
  }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/map-marker.png"/>
	<title>ISP-KIS || Liste des travaux</title>
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


    <!-- js-code-->
    <script src="jquery/jquery.js"></script>
    <script src="jquery/timeago.js"></script>
    <script src="../js/jquery.livequery.js"></script>

<script>
    setInterval('refresh_page()',1000)
    function refresh_page(){
      $('.refresh_page').load('ajax/refresh.php');
        return false;         
      }
</script>
    <style type="text/css">
    	.img{
    		width: 70%;
    		height: 90%;

    	}
    </style>
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
           
            <form autocomplete="OFF" class="search-form animated zoomInDown animation-delay-9">
              <input id="q" type="text" class="search-input" placeholder="Search..." name="q">
              <label for="q"><i class="fa fa-search"></i></label>
              
            </form>
           
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
                  <li><a class="dropdown-item" href="liste_travaux.php">Voir les travaux</a></li>
                  <li><a class="dropdown-item" href="publier.php">Publier</a></li>
                  
                </ul>
              </li>
            </ul>
          </div>
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu"><i class="fa fa-windows"></i></a>
        </div> <!-- container -->
      </nav>



       
        
      <div class="container" >
        <div class="resultat_recherche"></div>
        <div class="affiche_normal">
      
   <!-- affiche le blog -->
      <div class="refresh_page">
      <div class="row" id="travaux">
      		<?php  if($count > 0) :?>
      	<?php foreach($result as $resultat) :?>
      		<div class="col-md-5">
      				
      					<img src="img/<?= ($resultat->auditoire =="L2") ? 'word2.jpg' : 'word.jpg'; ?>" class="img ">
      					
      				
      			</div>	
      			<div class="col-md-7">
      				<h2><?= ucfirst($resultat->title); ?></h2>
      				<h4><i class="fa fa-user"></i> Posté par : <?= ucfirst($resultat->name) ; ?> - <?= ucfirst($resultat->lastname); ?> <time class="pull-right timeago" datetime="<?= $resultat->date_publie; ?>"><?= $resultat->date_publie; ?></time><i class="pull-right fa fa-sun-o"></i> </h4>
      				 <h5 style="text-align: justify;">

	                <?php if($resultat->auditoire =="L2") : ?>
	                	Ce travail est intitulé <strong><?= $resultat->title; ?></strong>, déstiné qu'aux étudiants de la deuxième licence en <strong><?= $resultat->options; ?></strong>, c'est un mémoire qui servira comme référence aux autres chercheurs qui enboitérons le pas de l'auteur <?= ucfirst($resultat->name) ; ?> - <?= ucfirst($resultat->lastname); ?>   
	                	  
	                <?php else : ?>
	                	Ce travail est intitulé <strong><?= $resultat->title; ?></strong>, déstiné qu'aux étudiants de la troisième graduat en <strong><?= $resultat->options; ?></strong>, c'est un Travail de fin de cycle qui servira comme référence à ceux qui vont leurs premier exercice intelictuel tout en suivant le pas de l'auteur <?= ucfirst($resultat->name) ; ?> - <?= ucfirst($resultat->lastname); ?> 
	                <?php endif; ?>
	              	</h5>
	              	<a class="btn btn-raised btn-<?= ($resultat->auditoire =="L2") ? 'primary' : 'success'; ?> pull-<?= ($resultat->auditoire =="L2") ? 'right' : 'left'; ?>" href="voir_travail.php?id=<?= $resultat->id; ?>">Voir le travail complèt</a>
      			</div>
      			
      			<hr>

      		
      		
      		<?php endforeach; ?>
      	<?php else :?>
      			<div class="alert alert-danger">
      				Désoler, il y a aucun travail scientifique valider pour le moment
      			</div>
      	<?php endif; ?>
          </div>
          </div>
      	</div>

      </div>

    
    <center>
        <div style="display: none;" id="loader" class="spinner-border text-primary" role="status">
          <span class="sr-only">Loading...</span>
        </div>
    </center>
<script>
  $(document).ready(function(){

    $('#q').keyup(function(){
      var query = $(this).val();
    if($('#q').length > 0){
        $.ajax({
          url:"ajax/search.php",
          method:"POST",
          data:{query:query},
          success:function(data){
            
            $(".affiche_normal").hide(800);
            $(".resultat_recherche").html(data);

          }
        })
      
    }else
    {  
       $(".resultat_recherche").hide(800);
       $(".affiche_normal").show();
     
    }
    });

  });
</script>
<script>
$(document).ready(function(){
 // $('time.timeago').timeago();
});
</script>
      <?php include 'include/footer.php' ?>

