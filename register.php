<?php
session_start();
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

    Login: <br/> <input type="text" name="login"/><br/>
    Password: <br/> <input type="text" name="password"/><br/>
    Email: <br/> <input type="text" name="email"/><br/>
    Nickname: <br/> <input type="text" name="nickname"/><br/>
    <div class="g-recaptcha" data-sitekey="6Len3boZAAAAAN5CSHcAmHd0jsUhqQA4dSmxiO0Q"></div><br/>
    <input type="submit" name="submit" value="Register">
</form>
</body>
</html>