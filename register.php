<?php
session_start();
if(isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];

require_once "connect.php";
$connection=new mysqli($host,$dbUser,$dbPassword,$dbName);
if($connection->connect_errno!=0)
{
    echo "Error";
}
else {
    if ($connection->query("INSERT INTO users VALUES (NULL, '$login', '$password', '$email', '$nickname')")) {
    echo 'succes';
    $connection->close();
}}}
?>
<html lang="pl">
      <head> <meta charset="utf-8"/>
          <title>
              Register now!
          </title>
          <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      </head>
<body>
<form method="post">
<label>
    Login:       <br/> <input type="text" name="login" required/><br/>
    Password:    <br/> <input type="password" name="password" required/><br/>
    Email:       <br/> <input type="email" name="email" required/><br/>
    Nickname:    <br/> <input type="text" name="nickname" required/><br/>
</label>
    <div class="g-recaptcha" data-sitekey="6Len3boZAAAAAN5CSHcAmHd0jsUhqQA4dSmxiO0Q"></div><br/>
    <input type="submit" name="submit" value="Register">

</form>
</body>
</html>