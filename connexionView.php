<?php
session_start();
include_once ('header.php');
?>
<div class="container">
  <div class="row">
      <div class="col-lg-3 col-md-2"></div>
      <div class="col-lg-6 col-md-8 login-box">
          <div class="col-lg-12 login-key">
              <i class="fa fa-key" aria-hidden="true"></i>
          </div>
          <div class="col-lg-12 login-title">
              ADMIN PANEL
          </div>

          <div class="col-lg-12 login-form">
              <div class="col-lg-12 login-form">
                  <form action="../session.php" method="POST">
                      <div class="form-group">
                          <label class="form-control-label">USERNAME</label>
                          <input type="text" class="form-control" name="username" required>
                      </div>
                      <div class="form-group">
                          <label class="form-control-label">PASSWORD</label>
                          <input type="password" class="form-control" name="password" required>
                      </div>

                      <div class="col-lg-12 loginbttm">
                          <div class="col-lg-6 login-btm login-text">
                            <?php
                            if(isset($_GET['erreur'])){
                                $err = $_GET['erreur'];
                                if($err==1 || $err==2){
                                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                            }
                          }
                            ?>
                          </div>
                          <div class="col-lg-6 login-btm login-button float-sm-right">
                              <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                              <button type="button" value="Cancel" onclick="history.back()" class="btn btn-outline-primary">Cancel</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          <div class="col-lg-3 col-md-2"></div>
      </div>
  </div>

  <!-- <div id="container" class="container h-100 m-0">
      <!-- form connexion -->
    <!-- <div class="d-flex col-lg-8 col-sm-12 align-self-center">
      <form class="w-100 p-5" action="../session.php" method="POST">
          <h1 class="align-self-center mb-4">Connexion</h1>
          <div class="form-group">
          <label><b>Nom d'utilisateur</b></label>
          <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
          </div>
          <div class="form-group">
          <label><b>Mot de passe</b></label>
          <input type="password" placeholder="Entrer le mot de passe" name="password" required>
          </div>
          <input type="submit" id='submit' value='LOGIN' >
      </form>
    </div> -->

  <!-- </div> -->
  <!-- <?php
  // if(isset($_GET['erreur'])){
  //     $err = $_GET['erreur'];
  //     if($err==1 || $err==2){
  //         echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
  // }
  //  }
  ?> -->

  <!-- header('Location: blog.php'); //Redirection immédiate
  header("Refresh: 3;URL=blog.php"); //Redirection avec délai (en secondes) -->
