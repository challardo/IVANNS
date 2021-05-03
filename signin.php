<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َIVANNS</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/Logins.css">
  </head>
  <body id="LOG-REGN" >
    
<form class="process" action="includes/signin.inc.php" method="post">

  <a href="index.php"><img src="https://fontmeme.com/permalink/190705/152a9a1fa2111528114d2f6936919fdc.png" alt="bludhaven-font" border="0"></a>
  <div id="LOG-REG">
    <li ><a class="registro" href="signup.php">Registrarse</a></li>
    <li class="Actual"><a class="Log" href="signin.php">Inicio de Sesion</a></li>
  </div>
<div id="textboxlog">

    <input type="text"  name="mailuid" placeholder="Username or mail">
    <input type="password"  name="pwd" placeholder="Password">
    <input type="submit"  name="login-submit"  value="Sign in">
</div>
<div style = "font-size:16px; color:#2ecc71;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>

</form>
  </body>
</html>
