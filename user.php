<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice2/7 User</title>
  </head>
  <body>
    <p>
      <?php
       if(isset($_POST['lastname']) && isset($_POST['firstname'])){
            //Affichage des informations saisies dans le formulaire
            echo $_POST['lastname'] . ' ' . $_POST['firstname'];
        }
      ?>
    </p>
  </body>
</html>
