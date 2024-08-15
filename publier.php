
<?php
require 'functions/db.php';
//unset($_SESSION['id']); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/map-marker.png"/>
	<title>ISP-KIS || Publier les travaux</title>
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
    <script src="jquery/publier.js"></script>
    <script src="jquery/jquery.js"></script>
    
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
                  <li><a class="dropdown-item" href="liste_travaux.php">Voir les travaux</a></li>
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
          <div class="text-center">
            <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">I</span>
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">ISP-<span>KIS</span></h1>
            <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Publier vos    <span class="color-warning"> Oeuvres scientifiques,</span>  pour faire une référence aux autres chercheurs des intitutions différentes</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-lg-7">
            <div class="card card-hero card-primary animated fadeInUp animation-delay-7">
              <div class="card-body">

                <div class="animated fadeInUp animation-delay-7" id="message_global"></div>

                <div class="etape1">
                <h1 class="color-primary text-center texte">Publication des travaux scientifiques </h1>

               <form method="POST" onsubmit="return false" id="regform" autocomplete="off"  enctype="multipart/form-data">

                    <fieldset>
                     
                    <div class="form-row">
                        <div class="form-group label-floating nom-invalid col-md-6">
                          <div class="input-group ">
                            <span class="input-group-addon"><i class="fa fa-male"></i></span>
                            <label class="control-label" for="nom">Nom Etudiant</label>
                            <input type="text" id="nom" class="form-control ">
                          </div>
                          <small class="nom_ecriture"></small>
                        </div>
                        <div class="form-group label-floating postnom-invalid col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-linux"></i></span>
                            <label class="control-label red" for="postnom">Postnom Etudiant</label>
                            <input type="text" id="postnom" class="form-control ">
                          </div>
                        </div>
                        <small class="postnom_ecriture"></small>
                      </div>


                       <div class="form-group label-floating titre-invalid">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-windows"></i></span>
                          <label class="control-label" for="ms-form-pass">Intitulé du travail</label>
                          <input type="text" id="titre" name="titre" class="form-control">
                        </div>
                        <small class="titre_ecriture"></small>
                      </div>

                       <div class="form-group label-floating edition-invalid">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-apple"></i></span>
                          <label class="control-label" for="ms-form-pass">Edition</label>
                          <input type="text" id="edition" name="edition" class="form-control">
                        </div>
                        <small class="edition_ecriture"></small>
                      </div>

                     <!-- icon word file-word-o
                        class erreur rouge is-invalid
                        class erreur verte is-valid
                      -->
                       <div class="form-row">
                          <div class="form-group genre-invalid col-md-4">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                              <select id="genre" name="genre" class="form-control">
                                <option value="">Genre</option>
                                <option value="Masculin">Masculin</option>
                                <option value="Féminin">Féminin</option>
                              </select> 
                            </div>
                            <small class="genre_ecriture"></small>
                          </div>
                          <div class="form-group departement-invalid col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-folder-open-o"></i></span>
                                <select id="departement" name="departement" class="form-control">
                                  <option value="">Département</option>

                                  <option value="IG">Informatique de gestion</option>
                                  <option value="Biologie-chimie">Biologie-chimie</option>
                                  <option value="Géographie">  Géographie et gestion de l’environnement</option>
                                  <option value="Math-physique">   Mathématique physique</option>


                                  <option value="ACA">   Anglais-culture Africaine</option>
                                  <option value="Français">   Français et culture  Africaine</option>
                                  <option value="Histoire">   Histoire-science sociales</option>
                                  <option value="Science commerciales">   Science commerciales, sociales et administratives</option>
                                </select>   
                              </div>
                              <small class="departement_ecriture"></small>
                          </div>
                          <div class="form-group promotion-invalid col-md-4">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                              <select id="promotion" name="promotion" class="form-control">
                                <option value="">Promotion</option>
                                <option value="G3">G3</option>
                                <option value="L2">L2</option>
                              </select>   
                            </div>
                              <small class="promotion_ecriture"></small>
                          </div>
                        </div>



                                      
                      <br/>

                      <div class="animated fadeInUp animation-delay-7" id="message"></div>           
                      <div class="animated fadeInUp animation-delay-7 erreur" id="erreur"></div>           
                   <div style="display: none;" class="spinner-border text-primary loader" role="status">
                        <span class="sr-only">Loading...</span>
                      </div>
                    <button id="register" name="register" type="submit" class="btn btn-raised btn-primary btn-block">Publier <i class="fa fa-long-arrow-right no-mr ml-1"></i></button>
                </form>
           </div>
           <div class="etape2">
            <h1 class="color-primary text-center">Upload votre travail scientifique <i style="font-size: 1em" class="fa fa-html5 color-danger"></i></h1>


                <form onsubmit="return false" enctype="multipart/form-data"  method="POST"  >
                  
                     <input type="hidden" class="hidden" id="<?php if(isset($_SESSION['id'])) { echo $_SESSION['id'];} ?>"   >
                     
                  <div class="form-group" id="label">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-chain-broken"></i></span>
                          <label id="label" for="select_fichier">Importer votre travail en format html</label>
                          <input accept="/*.html,.htm,.mhtml,.mht" id="fichier" type="file" name="fichier" class="form-control-file filles" >
                          
                        </div> 
                        <p id="nom_fichier"></p>
                        <small class="file_ecriture"></small>                
                      </div> 
                      <br/> 
                      

                      <div class="animated fadeInUp animation-delay-7" id="messages"></div>           
                      <div class="animated fadeInUp animation-delay-7 erreur" id="erreurs"></div>     

                      <button id="poster" name="poster" type="submit" class="btn btn-raised btn-primary btn-block">poster <i class="fa fa-long-arrow-right no-mr ml-1"></i></button>
                      <?php
                    //var_dump($_SESSION['id']); ?>
                </form>
                <a style="cursor: pointer;" class="btn-default btn btn-raised pull-right" href="#" id="delete">Retour</a>
            </div>

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
  position: absolute;
  color: red;
  float: left;
  font-size: 13px;
 }
 .is-invalid  {
    color: red;
      
   }
   .label {
    color: red;
   }
 </style>


<!-- script code ajax et jquery langage -->
<script type="text/javascript">
$(document).ready(function(){
var id = $('.hidden').attr('id');
if (id =="") {

  $('.etape2').hide(200);
  //$('#delete').hide();
  $('.etape1').show();
  
   
}else{
  $('.etape1').hide(200);
  $('.etape2').show();
  //$('#delete').show();
   
}

//pour affichier le nom du fichier upload
/*var fichiers  = $('.filles').attr('type');
document.getElementById("nom_fichier").innerHTML = fichiers ;*/

   //upload de photo avatar
$('#poster').click(function(e){
  e.preventDefault();
 
  if ($('#fichier').val() =="") {
    $('#label').addClass('is-invalid');
    $('.file_ecriture').html('<p style="color:red; font-size:12px;">Veuillez choisir un fichier en format html ou htm SVP</p>');
    return false;
  }else{
    $('.file_ecriture').html('');
    $('#label').removeClass('is-invalid');
  var fd = new FormData();
  var fichiers  = $('#fichier')[0].files[0];
  fd.append('fichier',fichiers);

  $.ajax({
    url:'ajax/fichier.php',
    type:'post',
    data:fd,
    contentType:false,
    processData:false,
    beforeSend:function(){          
      $("#erreurs").html('<img src="img/loader.gif">');
      $('#poster').hide();
    },
    success:function(reponse){
      if (reponse == 'success') {
           $('form').trigger('reset');
           $('#poster').show();
           $('#erreurs').hide();
           $('.etape2').hide(200);
           $('.etape1').show();
           $('#message_global').html('<div class="alert alert-success">La Publication de votre travail scientifique est éffectuer avec succès. Merci bien</div>').slideDown(7000).delay(9000).slideUp();
           //location = "publier.php";
      }else{
         $('#messages').html(reponse).slideDown(2000).delay(8000).slideUp();
         $('#poster').show();
         $('#erreurs').hide();
      }
    }
  });

  }

});

    $("#regform").submit(function(){
        var nom = $('#nom').val();
        var postnom = $('#postnom').val();
        var titre = $('#titre').val();
        var edition = $('#edition').val();
        var genre = $('#genre').val();
        var departement = $('#departement').val();
        var promotion = $('#promotion').val();
        


        if (nom =="" || $("#nom").val().length < 4) {
          $('.nom-invalid').addClass('is-invalid');
          $('.nom_ecriture').html('<p>Nom taper est invalide..</p>');
          $("#nom").focus();
          return false;
        } 
       else{
              $('.nom_ecriture').html('');
              $('.nom-invalid').removeClass('is-invalid');
        }

        if (postnom =="" || $("#postnom").val().length < 4) {
          $('.postnom-invalid').addClass('is-invalid');
          //$('.postnom_ecriture').html('<p>Postnom invalide..</p>');
          $("#postnom").focus();
          return false;
        } 
       else{
              $('.postnom_ecriture').html('');
              $('.postnom-invalid').removeClass('is-invalid');
        }

        if (titre =="" || $("#titre").val().length < 15) {
          $('.titre-invalid').addClass('is-invalid');
          $('.titre_ecriture').html('<p>Le Titre taper est invalide...</p>');
          $("#titre").focus();
          return false;
        } 
       else{
              $('.titre_ecriture').html('');
              $('.titre-invalid').removeClass('is-invalid');
        }
         if (edition =="" || $("#edition").val().length < 4) {
          $('.edition-invalid').addClass('is-invalid');
          $('.edition_ecriture').html('<p>Edition taper est invalide...</p>');
          $("#edition").focus();
          return false;
        } 
       else{
              $('.edition_ecriture').html('');
              $('.edition-invalid').removeClass('is-invalid');
        }

         if (genre =="" ) {
          $('.genre-invalid').addClass('is-invalid');
          $('.genre_ecriture').html('<p>Genre invalide...</p>');
          $("#genre").selected();
          return false;
        } 
       else{
              $('.genre_ecriture').html('');
              $('.genre-invalid').removeClass('is-invalid');
        }
        if (departement =="" ) {
          $('.departement-invalid').addClass('is-invalid');
          $('.departement_ecriture').html('<p>Département choisi invalide...</p>');
          $("#departement").selected();
          return false;
        } 
       else{
              $('.departement_ecriture').html('');
              $('.departement-invalid').removeClass('is-invalid');
        }

         if (promotion =="" ) {
          $('.promotion-invalid').addClass('is-invalid');
          $('.promotion_ecriture').html('<p>Promotion choisi est invalide...</p>');
          $("#promotion").selected();
          return false;
        } 
       else{
              $('.promotion_ecriture').html('');
              $('.promotion-invalid').removeClass('is-invalid');
              $.ajax({
            type:"POST",
            url:"ajax/register.php", 
            data:{
                 'nom' : nom,
                 'postnom' : postnom,
                 'titre' : titre,
                 'edition' : edition,
                 'genre' : genre,
                 'departement' : departement,
                 'promotion' : promotion, 
                }, 
            
                beforeSend:function(){
                  
                  $(".loader").show();
                  //$("#erreur").html('<img src="img/loader.gif">');
                  $('#register').hide();

                },
                  success:function(data){
                    if (data == "success") {
                          $('form').trigger('reset');
                          $('#register').show();
                          $('#erreur').hide();
                          $('.etape1').hide(200);
                          $('.etape2').show();
                          $('.loader').hide();

                    }else{
                        $('#message').html(data).slideDown(2000).delay(8000).slideUp();
                        $('#register').show();
                        $('#erreur').hide();
                        $('.loader').hide();

                    }
                  }
              }) 
        }
        
       

        
          
     
    });

 //pour valider le travail
             $(document).on('click','#delete',function(e){   
                    e.preventDefault();
                    var deletes = $(this).val();
                    if (confirm('Voulez vous faire cette action ?')) {
                        $.post('ajax/fichier.php', {deletes:deletes})
                        .done(function(data){
                            if (data.match('success') != null)
                             {
                                $('form').trigger('reset');
                                location='publier.php';
                             }
                         });
                    }         
                });
});
    </script>



<?php require 'include/footer.php'; ?>

</body>
</html>