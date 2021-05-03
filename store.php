<?php
session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/styler.css">
    <link rel="stylesheet" href="CSS/animate.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/store.css">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

  	<script src="js/jquery-3.2.1.js"></script>
  	<script src="js/script.js"></script>	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>

    <title></title>
  </head>
  <body>
                <div Style= padding-top:15px>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="search__container animated fadeInLeft ">
                      <input class="search__input" type="text" placeholder="Search">
                      </div>
                    </div>

                <div class="col-sm-5 animated fadeInDown" >
            <a href="index.php"><img src="https://fontmeme.com/permalink/190705/152a9a1fa2111528114d2f6936919fdc.png" alt="bludhaven-font" border="0"></a>
                </div>
                <?php if (isset($_SESSION['userId'])) { echo '
                <div class="col">
                <div id="block1"class="animated fadeInDown ">
                  <a href="#h">  <img src="imagenes/ShopCart.png" alt="Shop Cart" height="40" width="40"></a>

                </div>
                </div>
                  <div class="col">
                <div id="block2" class="animated fadeInDown ">
                <a href="#b"> <img src="imagenes/heart-regular.svg" alt="Shop Cart" height="30" width="30"> </a>

                </div>
              </div>

                <div class="col">
                <form action="includes/signout.inc.php" method="post">
                <input class="LgOut animated fadeInDown"type="submit" name="logout-submit" value="Log out" >
                </form>
                <p class="InitMess">Welcome!</p>
                </div>
                </div>';}
                  else {  echo ' <div class="col-sm">
                    <a href="signin.php">Sign in</a>
                  </div>
                  <div class="col-sm">
                    <a href="signup.php">Sign up</a>
                  </div>
                  <div class="col-sm">
                    <p>logged out</p>
                  </div> ';}
                 ?>
                  </div>

        <hr>
        <div Style= margin-top:15px>


            <div class="container" id="NavBar">
            <div class="row">
              <div class="col-md-4">

              </div>
              <div class="col-sm">
                <a href="Wnew.php" class="MenuSup">What's new</a>
              </div>
              <div class="col-sm">
                <a href="#"class="MenuSup">Stores</a>
              </div>
              <div class="col-sm">
                <a href="#"class="MenuSup">Blog</a>
              </div>
              <div class="col-sm">
                <a href="#"class="MenuSup">About</a>
              </div>
              <div class="col-sm">
                <a href="#"class="MenuSup">Sale</a>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="wrap">
      <hr>
      		<div class="store-wrapper">
      			<div class="category_list">
      				<a href="#" class="category_item" category="all">ALL</a>
      				<a href="#" class="category_item" category="shirts">SHIRTS</a>
      				<a href="#" class="category_item" category="watches">WATCHES</a>
      				<a href="#" class="category_item" category="jeans">JEANS</a>
      				<a href="#" class="category_item" category="glasses">GLASSES</a>
      			</div>
      			<section class="products-list">
      				<div class="product-item" category="jeans">
      					<a href="#">
      						<img src="products/Skinny J.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="jeans">
      					<a href="#">
      						<img src="products/JeansDeslavado.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="jeans">
      					<a href="#">
      						<img src="products/PantalonVino.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="jeans">
      					<a href="#">
      						<img src="products/PantalonCafe.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="shirts">
      					<a href="#">
      						<img src="products/blusa1.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="shirts">
      					<a href="#">
      						<img src="products/blusa2.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="shirts">
      					<a href="#">
      						<img src="products/blusa3.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="shirts">
      					<a href="#">
      						<img src="products/blusa4.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="watches">
      					<a href="#">
      						<img src="products/reloj1.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="watches">
      					<a href="#">
      						<img src="products/reloj2.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="watches">
      					<a href="#">
      						<img src="products/reloj3.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="watches">
      					<a href="#">
      						<img src="products/reloj4.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="glasses">
      					<a href="#">
      						<img src="products/lentes1.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="glasses">
      					<a href="#">
      						<img src="products/lentes2.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="glasses">
      					<a href="#">
      						<img src="products/lentes3.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      				<div class="product-item" category="glasses">
      					<a href="#">
      						<img src="products/lentes4.jpg" alt="" >
      						<p>$50</p>
      					</a>
      				</div>
      			</section>
      		</div>
      	</div>



  </body>
</html>
