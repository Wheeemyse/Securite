<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulaire Sécurisé</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body>
    <?php
    $nom = $prenom = $email = $mdp = $postal = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nom = test_input($_POST["nom"]);
      $prenom = test_input($_POST["prenom"]);
      $email = test_input($_POST["email"]);
      $postal = test_input($_POST["postal"]);
      $mdp = test_input($_POST["mdp"]);
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
          }

    ?>


    <div class="form-container" style="text-align: center; align-">

      <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <label for="nom" style="margin-top:20px">Nom:</label><br>
        <input type="text" id="nom" name="nom" value="" required><br>

        <label for="prenom" style="margin-top:20px">Prenom:</label><br>
        <input type="text" name="prenom" id="prenom" value="" required><br>

        <label for="email" style="margin-top:20px">E-mail:</label><br>
        <input type="email" name="email" id="email" value="" required><br>

        <label for="postal" style="margin-top:20px">Code postal</label><br>
        <input type="text" name="postal" id="postal" maxlength="5" min="5" value="" required><br>

        <label for="mdp" style="margin-top:20px">Mot de passe:</label><br>
        <input type="password" name="mdp" id="mdp" value="" required><br>

        <label for="verifmdp" style="margin-top:20px">Confirmer le mot de passe:</label><br>
        <input type="password" name="verifmdp" id="verifmdp" value="" required><br>

        <div class="g-recaptcha center" data-sitekey="6LdTg3QUAAAAADr5ahVGo92NqWTTSbO3Ww4iEIkq"></div><br>

        <input type="submit" name="send" value="Inscription">
      </form>

    </div>

    <?php
      echo "<h2>Mes infos</h2>";
      echo $nom;
      echo "<br>";
      echo $prenom;
      echo "<br>";
      echo $email;
      echo "<br>";
      echo $postal;
      echo "<br>";
      echo $mdp;
      ?>
  </body>
</html>

<style>

    .center{
      margin-top: 20px;
      position: relative;
      left: 42%;
    }
</style>
