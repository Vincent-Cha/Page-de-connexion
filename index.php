<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/design.css">

    <title>Inscription</title>
  </head>
  <body>
    


    <nav class="navbar navbar-light text-light justify-content-between" style="background-color: #3b5998;">
        <form action="connexion.php" method="POST">
            <div class="row">
                <div class="col ml-5">
                  <label for="user">Adresse e-mail ou mobile</label>
                </div>
                <div class="col" style="margin-left: -19rem;">
                    <label for="pwd">Mot de passe</label>
                </div>
              </div>
            <div class="row">
              <div class="col">
                <input type="text" id="user" class="form-control mr-sm-2" placeholder="Votre login" name="telEmail" size="45px";>
              </div>
              <div class="col">
                <input type="password" id="pwd" class="form-control mr-sm-2" placeholder="Votre mot de passe" name="pwd">
              </div>
              <div class="col ml-5">
               <button type="submit" class="btn my-2 my-sm-0 h-50"><p class="mb-5">Connexion</p></button>

                
              </div>
            </div>
          </form>
    </nav>
    

<header class="container-fluid">

  <div>

    <div class="col-md-8" style="margin-left: 4rem;">

      
      <br>
      <br>  
      <h2><strong>Inscription</strong></h2>
      <h4>C'est gratuit (et ça le restera toujours)</h4>


    </div>
    </div>

<br>
<br>

<div class="container ml-1">
    <form action="inscri.php" method="POST">
       
            <div class="row w-75 p-3">
              <div class="col">
                <label for="prenom"></label>
                <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom" required>
              </div>
              <div class="col">
                <label for=""></label>
                <input type="text" class="form-control" id="nom" placeholder="Nom de famille" name="nom" required>
              </div>
            </div>
            <div class="row w-75 p-3">
                <div class="col">
                    <label for="telEmail"></label>
                  <input type="text" class="form-control" id="telEmail" placeholder="Entrer téléphone ou email" name="telEmail" required>
                </div>
              </div>
              <div class="row w-75 p-3">
                <div class="col">
                    <label for="telEmail2"></label>
                  <input type="text" class="form-control" id="telEmail2" placeholder="Confirmer téléphone ou email" name="telEmail2" required>
                </div>
              </div>
              <div class="row w-75 p-3">
                <div class="col">
                    <label for="pwd"></label>
                  <input type="password" class="form-control" id="pwd" placeholder="Nouveau mot de passe" name="pwd" required>
                </div>
              </div>
              <div class="row w-75 p-3">
                <div class="col">
                    <label for="dateNaissance"></label>
                  <input type="date" class="form-control" id="dateNaissance" placeholder="Date de naissance" name="dateNaissance" required>
                </div>
                <div class="col mt-4 ml-4">
                    <p class="small">Pourquoi indiquer ma date <br>de naissance ?</p>
                </div>
              </div>
              <div class="row mt-3 ml-2 w-75 p-3">
                <div class="custom-control custom-radio custom-control-inline col ml-5">
                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="Femme" required>
                    <label class="custom-control-label" for="customRadioInline1">Femme</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline col">
                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value="Homme" required>
                    <label class="custom-control-label" for="customRadioInline2">Homme</label>
                  </div>
              </div>
              <div class="row w-100 p-3 mt-3 ml-3">
                <div class="col">
                <button type="submit" class="btn btn-primary mt-3 green">Inscription</button>
                </div>
              </div>

          
      </form>
    </div>

    <?php

      if(!empty ($_GET['erreur'])) {

        switch ($_GET['erreur']) {
          case '1':
            echo('<p>Vous n\'avez pas entré une adresse mail ou un numéro de téléphone correct. </p>');
            break;

          case '2':
            echo('<p>Vos e-mails ou vos numéros de téléphone ne correspondent pas. </p>');
            break;

            
        }
      }
    
    ?>

    
</header> 

  </body>
</html>