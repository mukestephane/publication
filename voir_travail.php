
<?php 
require 'functions/db.php';
 $id = intval($_GET['id']);
  $req = $db->prepare('SELECT * FROM travaux WHERE id = ? AND valided=1');
    $req->execute([$id]);
  $get = $req->fetch();
if (isset($_GET['id']) || !empty($_GET['id'])) {

if ($get == true) {


	$req = $db->prepare('SELECT * FROM travaux WHERE id=? ');
	$req->execute([$_GET['id']]);

	//$count = $req->rowCount();
	$row = $req->fetch();
   

$content = "travaux/".$row['contenue'] ;
if (isset($_POST['upload'])) {
  $num = rand().'.doc';
 $header = 'Content-Disposition: attachment; ';
 $header .='filename='.$num;
 //header("Location:index.php");
 header($header);
 header('Content-Type:application/vnd.ms-word');

  readfile($content);
}
//si vous voulez afficher le contenue html au dessus du code
/*ob_start();
$affichage = ob_get_clean();*/
?>
<!DOCTYPE html>
<!-- saved from url=(0046)https://getmdl.io/templates/article/index.html -->
<html lang="fr" class="mdl-js"><head>
	
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<title>ISP-KIS || <?= utf8_decode($row['title']) ; ?></title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
   <link rel="icon" href="img/map-marker.png"/>

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="icon" href="img/map-marker.png"/>

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="css/css/css">
    <link rel="stylesheet" href="css/css/icon">
    <link rel="stylesheet" href="css/css/material.teal-red.min.css">
    <link rel="stylesheet" href="css/css/styles.css">
    <link rel="stylesheet" href="css/css/materialize.css">
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/js/materialize.js"></script>
<script>
$(document).ready(function(){
    $(document).on('click','#creat_word',function(){
        //e.preventDefault();
        //var word_data = $('#exercice').html();
        var word_data = $('#text').html();
        var page = "word.php?data=" + word_data;
        window.location = page;
    });
});
</script>
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    .nav-right {
    	text-decoration: none;
    	color: rgb(1,1,254);
    	font-size: 14px;
    	padding: 6px;
    }
    .nav-right:hover{
    	color: rgb(7,164,248);
    	text-decoration: underline;
    }

    img{
      display: none;
    }
    </style>
  </head>
  <body id="text">
    <div style="" class="mdl-layout__container has-scrolling-header blue"><div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100 is-upgraded" data-upgraded=",MaterialLayout">
      <header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title"><a href="index.php">ISP-KIS</a></span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable is-upgraded" data-upgraded=",MaterialTextfield">

          	<a class="nav-right" href="publier.php">Publier un ouvrage</a>
          	<a class="nav-right" href="liste_travaux.php">La liste des travaux</a>
            
          </div>
        </div>
      </header>
            <div class="demo-ribbon"></div>
      <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
<div class="demo-crumbs mdl-color-text--grey-500">
Auteur du travail : <strong><?= ucfirst($row['name']); ?>  <?= ucfirst($row['lastname']); ?></strong>  &gt; Type de travail <strong> <?= ($row['auditoire'] =="L2") ? 'TFE' : 'TFC'; ?></strong>   &gt; Edition : <strong><?= $row['edition']; ?></strong>  &gt; Date publication : <strong>le <?= date("d/m/Y A H:i",strtotime($row['date_publie'])); ?></strong> 
</div>
            <br>
            <br>
<?php 

//echo $affichage;
?>
<form  class="right" action="" method="POST">
  <button name="upload" class="btn black-text white">Telecharger</button>
</form>
<i style="cursor: pointer; display: none;" class="btn right black-text white" href="#" id="creat_word">Telecharger</i>
<h2><?= utf8_decode($row['title']); ?></h2>


          <div id="exercice">
            <p>
<?php include 'travaux/'.$row['contenue'] ; ?>
            </p>
          </div>     
<?php 
$req = $db->query("SELECT * FROM commentaires WHERE ref_trav='{$_GET['id']}' ORDER BY date_comment DESC LIMIT 3");
$count = $req->rowCount();
    $result = [];
    while ($rows = $req->fetchObject()) {
      $result[] = $rows;
    } 
?>

  <div id="reflesh"> 
      
<?php if($count > 0) : ?> 
      <hr>
      <h2>Commentaire poster</h2> 
<?php  foreach($result as $reponse) :?>
      
<blockquote>
<strong><?= mb_convert_encoding(ucfirst($reponse->nom),'utf8') ?>  </strong>
<p><?= utf8_decode($reponse->comments); ?></p>
</blockquote>

<?php  endforeach;?>
<?php  endif;?>
  </div> 
              <hr>
              <h2 class="text-center blue-text">Commenter ce travail</h2>
                <form  method="POST" autocomplete="OFF">
                  <div class="row">
                    <input class="get" type="hidden"  id="<?= isset($_GET['id']) ? $_GET['id'] : ''; ?>"/>
                    <div class="input-field col s12 m6 l6">
                      <input type="text" name="name" id="name"/>
                      <label for="name">Votre nom</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                      <input type="email" name="email" id="email"/>
                      <label for="email">Votre adresse email</label>
                    </div>
                    <div class="input-field col s12">
                      <textarea class="materialize-textarea" name="comment" id="comment"></textarea>
                      <label for="comment">Votre commentaire</label>
                    </div>
                    <div id="erreurs"></div>
                    <div class="col s12" id="messages"></div>
                    <div class="col s12">
                      <button id="poster" class="btn block waves-effect blue" type="submit" name="submit">Commenter ce travail</button>
                    </div>
                  </div>
            </form>


          </div>
        </div>
        <footer class="demo-footer mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <ul class="mdl-mini-footer--link-list">
              <li><a href="index.php">Acceuil</a></li>
              <li><a href="liste_travaux.php">Liste des travaux</a></li>
              <li><a href="publier.php">Publier un travail scientifique</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div></div>
  
    <script src="jquery/js/material.min.js.téléchargé"></script>
  <script>
    $(document).ready(function(){
      $('#poster').click(function(e){
          e.preventDefault();
          var get = $('.get').attr('id');
          var name = $('#name').val();
          var email = $('#email').val();
          var comment = $('#comment').val();
            $.ajax({
              url:'ajax/commentaire.php',
              type:'post',
              data:{'get':get,'name':name,'email':email,'comment':comment},
              beforeSend:function(){          
                $("#erreurs").html('<img src="img/loader.gif">');
                $('#poster').hide();
              },
              success:function(reponse){
                if (reponse == 'success') {
                     $('form').trigger('reset');
                     $('#poster').show();
                     $('#erreurs').hide();
                     
                     $('#messages').html('<div class="card green"><div class="card-content white-text">Votre commentaire a bien ete poster Mercie</div></div>').slideDown(2000).delay(8000).slideUp();
                     setInterval($('#reflesh').show(),1000);

                     location = "voir_travail.php?id="+get;
                }else{
                   $('#name').focus();
                   $('#messages').html(reponse).slideDown(2000).delay(8000).slideUp();
                   $('#poster').show();
                   $('#erreurs').hide();
                }
              }
            });
      });
    });
  </script>
</body></html>

<?php
      }else header("Location:liste_travaux.php");
  }else header("Location:liste_travaux.php"); ?>