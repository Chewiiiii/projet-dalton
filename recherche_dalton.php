<!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Recherche dalton</title>
        <link href="style.css" rel="stylesheet">
      </head>
      <body>
            <?php
            if(isset($_POST['Recherche'])){
                include "bd_connection.php";
                $connex = connexionPDO();
                $req = $connex -> prepare("SELECT id, nom, prenom, taille FROM DALTON where taille>?");
                $req -> bindValue(1,$_POST['taille']);
                $req -> execute();
                while($ligne=$req->fetch(PDO::FETCH_OBJ)){
                  echo "$ligne->id $ligne->prenom<br/>";
                  echo "taille=$ligne->taille<br/><br/>";
                }
            }
            else{
            ?>
                    <form action="" method="post">
            <fieldset>
                <legend>Recherche Dalton</legend>
                <label for="taille">taille</label>
                <br>
                <input type="text" name="taille"/>
                <br>
                <br>
                <button type="submit">Recherche</button>
            </fieldset>
            </form>
            <?php
            }
            ?>
      </body>
    </html>

