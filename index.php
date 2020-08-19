<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <header>

    <div id="sidebar-container">
      <div class="sidebar-logo">
        Projet Bestiaire
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #1A1A1A; left:80px;">&times;</a>
      </div>
      <ul class="sidebar-navigation">
        <li class="header">Navigation</li>
        <li>
          <a href="index.php">
            <i class="fa fa-home" aria-hidden="true"></i> Accueil
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-tachometer" aria-hidden="true"></i> Admin
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-tachometer" aria-hidden="true"></i> FAQ
          </a>
        </li>
        <li class="header">Catégories</li>
        <li>
          <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i> Alimentation
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-cog" aria-hidden="true"></i> Zone Géographique
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-info-circle" aria-hidden="true"></i> Famille
          </a>
        </li>
      </ul>
    </div>

  </header>
  <body>



    <div class="hero">
      <div class="overlay">
        <div id="main">
          <button class="openbtn" onclick="openNav()">&#9776; </button>
        </div>
      </div>
        <figure>
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="media/wildlife.mp4" type="video/mp4">
            </video>
        </figure>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white" style="margin-bottom: 85vh;">
            <img src="icons/logo1.png">
            <h1 class="display-3">Projet Bestiaire</h1>
            <p class="lead mb-0">Ceci est la vidéo d'accueil du projet bestiaire. Ce site a pour but de donner une description simple et claire sur la plupart des animaux qui vivent sur la planète.</p>
          </div>
        </div>
      </div>
    </div>

    <section id="history" > <!-- Page history -->
      <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 mb-4">
            <img src="media/21.jpg">
            </div>


            <div class="col-sm-12 col-md-6">
              <div class=" border-5 border-left border-dark mb-5 pl-4"> <h3> SOUTENONS LA CAUSE ANIMALE </h3> </div>
              <div>
              <p class="text-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <br><br>
              The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' <p>
              </div>

              <button type="button" class="btn btn-danger mt-3 text-dark">En savoir plus</button>
            </div>
          </div>
        </div>
    </section> <!-- Fin History -->



  <div class="section-2">
    <div class="title">
      <div class="content">
        <h1> Catégories</h1>
        <p> Retrouvez ici l'animal que vous souhaitez selon son cadre géographique, son espèce, son régime alimentaire ou tout simplement par son nom. </p>
      </div>
    </div>
      <div class="container">
    			<div class="box">
    				<img src="media/whitewolf.jpg">
            <div class="box-overlay">
              <div class="text">Hello World
              </div>
            </div>
    			</div>
    			<div class="box">
    				<img src="media/turtle.jpg">
    			</div>
    			<div class="box">
    				<img src="media/cerf.jpg">
    			</div>
    			<div class="box">
    				<img src="media/lion.jpg">
    	</div>
    </div>
  </div>












<script src="index.js"></script>
</body>

</html>
