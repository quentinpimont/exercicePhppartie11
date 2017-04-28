<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculatrice</title>
    <link href="assets/style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <h1>Une calculatrice en PHP</h1>
    <form action="index.php" method="post">
      <input type="text" name="nb1" value="<?php
            // si le boutton raz est pressé sa valeur et zero
            if(isset($_POST['reset'])){
                echo 0;
            // si la variable existe sa valeur et le mêm que cette variable
            }elseif(isset($_POST['nb1'])){
                echo $_POST['nb1'];
            // sinon sa valeur est zero
            }else{
                echo 0;
            }
      ?>"/>
      <input type="text" name="nb2" value="<?php
            // si le boutton raz est pressé sa valeur et zero
            if(isset($_POST['reset'])){
                echo 0;
            // si la variable existe sa valeur et le mêm que cette variable
            }elseif(isset($_POST['nb2'])){
                echo $_POST['nb2'];
            // sinon sa valeur est zero
            }else{
                echo 0;
            }
      ?>"/>
      <input type="submit" name="add" value="+"/>
      <input type="submit" name="sub" value="-"/>
      <input type="submit" name="mul" value="*"/>
      <input type="submit" name="div" value="/"/>
      <input type="submit" name="reset" value="RAZ"/>
    </form>
    <?php
        // si le boutton raz est pressé la valeur de result devient zéro
        if(isset($_POST['reset'])){
            $result = 0;
        // on verifie si le ces 2 variable existent
        }elseif(isset($_POST['nb1']) && isset($_POST['nb2'])){
            // on verifie si les de variable sont des nombres
            if(is_numeric($_POST['nb1']) && is_numeric($_POST['nb2'])){
                // si le bouton add est pressé on additionne ces deux nombres
                if(isset($_POST['add'])){
                    $result = $_POST['nb1'] + $_POST['nb2'];
                // si le bouton sub est pressé on soutrait ces deux nombres
                }elseif(isset($_POST['sub'])){
                    $result = $_POST['nb1'] - $_POST['nb2'];
                // si le bouton mul est pressé on multiplie ces deux nombres
                }elseif(isset($_POST['mul'])){
                    $result = $_POST['nb1'] * $_POST['nb2'];
                // si le bouton div est pressé
                }elseif (isset($_POST['div'])){
                    // si le 2eme nombre est 0 on affiche un message d'erreur
                    if($_POST['nb2'] == 0){
                        $result = 'Division par zéro est impossible';
                    // sinon on divise le 1er nombre par le 2eme
                    }else {
                        $result = $_POST['nb1'] / $_POST['nb2'];
                    }
                }
            // si ce n'est pas des nombre on le signale
            }else{
                    $result = 'Entrez des nombre s\'il vous plaît';
            }
    ?>
    <!-- on affiche le resultat -->
    <p>Résultat : <?php echo $result; ?></p>
    <?php
        }
        echo phpinfo();
    ?>
  </body>
</html>