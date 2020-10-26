<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>S.A.W.</title>

        <link rel="icon" href="mind_map.svg" sizes="any" type="image/svg+xml"/>
        <link rel="stylesheet" href="bootstrap.min.css"/>
    </head>

    <header>
        <div>
            <?php include("header.php"); ?>
        </div>
    </header>

    <body>

    <form action="ipinfos.php" style="position:relative; margin-top:60px; margin-left:auto; margin-right:auto; width:90%; background-color:grey; border-radius: 5px; box-shadow:5px 5px 0px silver;">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="IP a analyser" name="IP a analyser" style="position:relative; margin-left:auto; margin-right:auto; width:90%; box-shadow:5px 5px 0px silver;">
            <button type="submit" class="btn btn-primary">Tester</button>
        </div>
        
    </form>

<?php

// **********************************************
// Définition de l'IP
// **********************************************


$serveur1 = "www.microsoft.com";
$serveur2 = "smtp.laposte.net";
$serveur3 = "ftp.crihan.fr";
$serveur4 = "www.yahoo.fr";


// **********************************************
// Lancement des scan
// **********************************************
serveur($serveur1);
serveur($serveur2);
serveur($serveur3);
serveur($serveur4);


function serveur($serveur)
	{
	// ********************************************
	// Résolution du nom
	// ********************************************
	$serveur_ip=gethostbyname($serveur);

	// **********************************************
	// Scan du serveur x
	// **********************************************
	echo  "Voici les résultats du Scan du serveur".$serveur;

	// **********************************************
	// Boucle lancant les appels du script de scan port par port
	// **********************************************
	echo '<script src="scan2.php?host='.$serveur_ip.'&port=21"></script>';
	echo '<script src="scan2.php?host='.$serveur_ip.'&port=23"></script>';
	echo '<script src="scan2.php?host='.$serveur_ip.'&port=25"></script>';
	echo '<script src="scan2.php?host='.$serveur_ip.'&port=80"></script>';
	echo '</p>';
	}

?>

<?php 

// **********************************************
// Interdiction de la mise en cache
// **********************************************
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");

// **********************************************
// Suppression des warning et erreurs si la session tcp ne monte pas
// **********************************************
error_reporting(0);

// **********************************************
// Ouverture de session tcp
// **********************************************
$socket=fsockopen($host, $port, $errno, $errstr, 1);

if ($socket)
	{
	// **********************************************
	// La session s'est bien ouverte
	// **********************************************
	$nombre_de_port_ouvert++;
	fclose($socket);
	echo "document.write(<BR>Le port TCP $port est <b><font color=\"green\">ouvert</font></b>);";
	}
else
	// **********************************************
	// La session ne s'est pas ouverte
	// **********************************************
	echo "document.write(<BR>Le port TCP $port est <b><font color=\"red\">fermé</font></b>);";

?>

</body>

    <footer>
        <div>
            <?php include("footer.php"); ?>
        </div>
    </footer>
</html>