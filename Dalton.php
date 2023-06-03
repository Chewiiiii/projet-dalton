<DOCTYPE html>
    <html>
        <head>
            <title>Les Dalton</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="css/styleIndex.css">
            <script src="js/script.js"></script>
        </head>
        <body>
            <?php
            include "bd_connexion.php";
            echo "Voici tout les dalton :";
            #la variable $connexion va exécuter la foncion connexionPDO
            $connexion=connexionPDO();
            #Préparation de la requête avec la variable $req
            $req= $connexion->prepare("select id, prenom, taille from dalton");
            $req->execute();
            while($ligne=$req->fetch(PDO::FETCH_OBJ)){
                echo "$ligne->id $ligne->prenom<br/>";
            }
            ?>
        </body>
    </html>