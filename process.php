<?php
if(!isset($_POST['login']) || !isset($_POST['password']))
{
    header('Location: index.php');
    exit();
}


?>
<html lang="pl">
<head>
<title> Process </title>
</head>
<body>
<form>
<?php
session_start();
require_once "connect.php";
$polaczenie=new mysqli($host,$dbUser,$dbPassword,$dbName);
if($polaczenie->connect_errno!=0)
{
    echo "Error";
}
else {
    $login=$_POST["login"];
    $password=$_POST["password"];
    $login =htmlentities($login,ENT_QUOTES, 'UTF-8');
    $password =htmlentities($password,ENT_QUOTES, 'UTF-8');
    if($check =@$polaczenie->query(sprintf("select * from users where login ='%s' and password ='%s'",
    mysqli_real_escape_string($polaczenie,$login),
    mysqli_real_escape_string($polaczenie,$password))))
    {
        $countRows=$check->num_rows;
        if($countRows>0) {
            $fetching = $check->fetch_assoc();
            $name = $fetching['login'];
            $_SESSION['user'] = $fetching['login'];
            $check->free_result();
            unset($_SESSION['error']);
            $_SESSION['loggedIn'] = true;
            header('Location: shop.php');
        }
        else {
        $_SESSION['error'] = '<span style ="color:red"> <b>Wrong login or password!</b>';
        header('Location: index.php');
        }
    }
    $polaczenie->close();
}
?>
</form>
</body>
</html>
