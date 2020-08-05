<?php
session_start();
if($_SESSION['loggedIn'] !=true){
    header('Location: index.php');
}

?>
<html lang="pl">

<head>
<title> Online Game </title>
</head>
<body>
<h1>Your profile:</h1>
<?php
echo "<p>Hello back ".$_SESSION['user'].'.';

?>
<a href="logout.php"> Log out</a>
</body>
</html>
