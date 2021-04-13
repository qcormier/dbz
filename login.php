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

			//read from database
			$query = "select * from user where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "Nom utilisateur ou mot de passe incorrect!";
		}else
		{
			echo "Nom utilisateur ou mot de passe incorrect!";
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
	

    <h1>Connection</h1>


        <form method="post">
        <fieldset>				
				<label>Nom d'utilisateur : </label><input type="text" name="user_name" />
				<label>Mot de passe:</label><input type="text" name="password" />
		</fieldset>										
				 <input id="button" type="submit" value="Se connecter">
				 <br><br>
				 <a href="signup.php">Cliquez pour s'inscrire</a>		
		</form>
        <div class="back"><a href="accueil.html">Retour à la page d'accueil</a></div>
	
	
<div id="footer">Copyright Dragon Ball Z Fans - Tous droits réservés</div>   	
</body>
</html>