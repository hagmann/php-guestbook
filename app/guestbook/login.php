<?php session_start();

include_once('head.php');



if(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    //$password = md5($_POST['password']);

    $sql = ' SELECT * FROM users WHERE username = :username AND password = :password ';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $result = $stmt->fetch();
    if($result)
    {
        $row = $stmt->fetch();
        $email = $row['email'];
        $_SESSION['Username'] = $username;
        $_SESSION['Email'] = $email;
        $_SESSION['LoggedIn'] = true;
    ?>

      <meta http-equiv="refresh" content="0;URL='index.php'">

<?php
    }
    else
    {
?>
      <div>
          <p>Your account has not been found. Please try again.</p>
      </div>
<?php
    }
}
?>


<div>
    <h1>Login</h1>
    <form method ="post" action="">
      <input type="text" name="username" placeholder="Benutzername" /><br />
      <input type="password" name="password" placeholder="Kennwort" /><br />
      <input type="submit" name="login" value="Login" class="button" />
    </form>
</div>
<a href="register.php">Jetzt registrieren</a>
<br/>
<a href="index.php">Zurück zur Startseite</a>
