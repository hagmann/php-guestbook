<?php session_start();

include_once('head.php'); ?>


<?php
if(empty($_SESSION['LoggedIn']) && empty($_SESSION['Username']))
{
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		//$password = md5($_POST['password']);
	  	$email = $_POST['email'];
		$sql = ' SELECT * FROM users WHERE username = :name ';
	    $stmt = $db->prepare($sql);
	    $stmt->bindParam(':name', $username);
	    $stmt->execute();
	    $result = $stmt->fetch();
		if($result==false)
		{
			require_once "config.php"; // use database
			$sql = 'INSERT INTO users (username, email, password) VALUES(:username,:email,:password)';
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':password', $password);
	        $stmt->execute();
	        $result = $stmt->fetch();
			echo "<div>Your account has been successfully created.</div>";
?>
			<meta http-equiv="refresh" content="2;URL='index.php'">
<?php
		}
		else
		{
			echo "<div>This username is already taken. Please try again.</div>";
?>
			<meta http-equiv="refresh" content="3;URL='register.php'">
<?php
		}
	}
	else
	{
?>
		<div >
			<h1>Registrieren</h1>
			<form method="post" action="register.php">
					<input type="text" name="username" placeholder="Benutzername" class="large-4.cell" />
					<input type="text" name="email" placeholder="E-Mail" class="large-4.cell" />
		      		<input type="password" name="password" placeholder="Passwort" class="large-4.cell" />
					<input type="submit" name="register" value="Registrieren" class="button" />
		    </form>
		</div>
		<a href="login.php">Sign In now.</a>
		<br/>
		<a href="index.php">Back to index</a>
<?php
	}
}
else
{
?>
    <div class="error">You are already logged in!</div>
    <meta http-equiv="refresh" content="2;URL='index.php'">
<?php
}
?>


<?php include_once('footer.php'); ?>
