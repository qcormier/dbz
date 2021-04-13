<?php


session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into user (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>




<!doctype html>
<html>
    <head>
	<title>Dragon Ball Z</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styleinsc.css" type="text/css">
	
	</head>
    <body>
	

    <h1>Formulaire d'inscription</h1>


        <form method="post">
        <fieldset>				
				<label>Nom d'utilisateur : </label><input type="text" name="user_name" />
				<label>Mot de passe:</label><input type="text" name="password" />
				
		</fieldset>										
				 <input type="submit" value="S'inscrire" />
				 <br><br>
				 <a href="login.php">Se connecter</a>			
		</form>
        <div class="back"><a href="accueil.html">Retour à la page d'accueil</a></div>
	
	
<div id="footer">Copyright Dragon Ball Z Fans - Tous droits réservés</div>   	
</body>
</html>