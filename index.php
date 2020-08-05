<?php
session_start();
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
    header('Location: shop.php');
    exit();
}
?>
<html lang="pl">

<head>
<title> Grocery Shopping Online </title>
</head>
<body>
<h1>Log in</h1>
<form action="process.php" method="post">
<label>
    login:<br/> <input type="text" name="login"> <br><br/>
    password:<br/><input type="password" name="password"> <br><br/>
    <input type="submit" name="button" value="Log in">
    <a href=register.php>Register now!</a>
</label>
</form>
<?php
if(isset($_SESSION['error'])) echo $_SESSION['error'];
?>
</body>
</html>
