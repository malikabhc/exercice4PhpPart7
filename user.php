<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice4/7 User</title>
  </head>
  <body>
    <p>
      <?php
       if(!empty($_POST['lastname']) && !empty($_POST['firstname'])){
            //Affichage des informations saisies dans le formulaire si les cases ne sont pas vides (!empty)
            echo 'Bonjour ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
        } else {
            //Affichage d'un message d'erreur si les cases ne sont pas completées
            echo 'Formulaire invalide';
        }
      ?>
    </p>
  </body>
</html>
