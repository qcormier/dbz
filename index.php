<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	?>



<!doctype html>
<html>
    <head>
	    <meta charset="utf-8" />
        <title>Dragon Ball Z </title>
		<link rel="stylesheet" href="styleaccueil.css" type="text/css">
		
    </head>
    <body>        
        	
        	Hello,<?php echo $user_data['user_name']; ?>
        
        	           
		<table>
		<tr>
		    <td><a href="login.php">Se connecter</a></td>
		</tr>
		</table>
		<table>
		<tr>
		    <td><a href="signup.php">Inscription</a></td>
		</tr>
	    </table>
		<table>
		<tr>
		    <td><a href="logout.php">Se déconnecter</a></td>
		</tr>
		</table>
		<br>
		<br>
		<br>
		<br>

		<ul id="menu-demo2">		
		   <li><img src="images/boule1.png"><a class="current" href="accueil.html">Accueil</a></li>
		   <li><img src="images/boule2.png"><a href="creation.html">Création</a></li>
		   <li><img src="images/boule3.png"><a href="personnages.html">Personnages</a></li>
		   <li><img src="images/boule4.png"><a href="histoire.html">Histoire</a></li>
		   <li><img src="images/boule5.png"><a href="univers.html">Univers</a></li>
		   <li><img src="images/boule6.png"><a href="oav.html">OAV</a></li>
		   <li><img src="images/boule7.png"><a href="jv.html">Jeux vidéo</a></li>
		</ul>
			
	    <div id="footer">Copyright Dragon Ball Z Fans - Tous droits réservés</div>
	</body>
</html>