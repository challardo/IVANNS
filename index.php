<?php
session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  </form>
    <link rel="stylesheet" href="CSS/styler.css">
    <link rel="stylesheet" href="CSS/animate.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <title>IVANNS</title>
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
            <div id="block1"class="animated bounceInRight ">
              <a href="#h">  <img src="imagenes/ShopCart.png" alt="Shop Cart" height="40" width="40"></a>

            </div>
            </div>
              <div class="col">
            <div id="block2" class="animated bounceInRight ">
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

    <div class="ROJO" style=background-color:#CD5C5C>

      <div class="row" id="FONDOPORTADA">
        <div class="col-md-6" >
          <p class="Portada-complemento animated fadeInUp">Welcome!, now on sale </p>
          <p class="Anuncio-Portada animated fadeInUp">Up to 70% off on clothing</p>
          <p class="Portada-complemento animated fadeInUp">Limited time offers</p>
          <a href="store.php"><input type="button" name="button" class="ShopNow animated fadeInUp" value="SHOP NOW" href="store.php"></a>
            </div>
            <div class="col-md-4 animated fadeIn" >
              <img src="imagenes/face.jpg" class="ImgPortada" alt="">
            </div>
        </div>
        </div>
          <div class="consejo" id="FONDOPORTADA2">
          <p class="SpecialInfo">Create your account now and start shopping!</p>
          <p class="SpecialInfo2">For more information visit our social media.</p>
          </div>

        <div class="row" id="green" >
          <div class="caja1">
            <p class="parallax-txt"> Find the best deals</p>
          </div>


        </div>

        <div id="Margen-catalogo">
        <div class="row">
<div class="col-xl-12">
            <h1 class="Titulo-catalogo">The best from our Catalogue</h1>

</div>
        </div>
        <div class="row">
<div class="col-xl-12">
      <a href="store.php">  <input type="button" name="button" class="ShopNow"  id="Boton-compra-abajo" value="SHOP NOW"></a>
</div>
        </div>
      </div>
        <div class="row"id="Galeria1">
          <div class="col">
            <a href="imagenes/chamarra1.jpg">    <img src="imagenes/chamarra1.jpg" class="Catalogo" alt=""></a>
            <p class="Marca">Zeloe</p>
            <h1 class="Subtitulo-catalogo">Blue jacket straight cut</h1>
            <p class="precio"> $100</p>
          </div>
          <div class="col">
            <a href="imagenes/chaqueta1.jpg"><img src="imagenes/chaqueta1.jpg"  class="Catalogo"alt=""></a>
            <p class="Marca">Kind</p>
              <h1 class="Subtitulo-catalogo">BlackJ Jacket</h1>
      <p class="precio"> $210</p>
          </div>
          <div class="col">
            <a href="imagenes/pantalon1.jpg"><img src="imagenes/pantalon1.jpg"  class="Catalogo"alt=""></a>
            <p class="Marca">K-lection</p>
              <h1 class="Subtitulo-catalogo">Sky blue jeans</h1>
      <p class="precio"> $50</p>
          </div>
          <div class="col">
            <a href="imagenes/chamarra2.jpg">  <img src="imagenes/chamarra2.jpg"  class="Catalogo"alt=""></a>
            <p class="Marca">RAW</p>
              <h1 class="Subtitulo-catalogo">Gray premium jacket</h1>
      <p class="precio"> $200</p>
          </div>
          <div class="col">
            <a href="imagenes/sueter1.jpg"><img src="imagenes/sueter1.jpg"  class="Catalogo"alt=""></a>
            <p class="Marca">Chello</p>
              <h1 class="Subtitulo-catalogo">Light sweatshirt</h1>
      <p class="precio"> $120</p>
          </div>
        </div>
        <div class="row" id="green" >
          <div class="col-md-6" id="Intro2">
            <img src="imagenes/Chamarra-mujer.jpg" height=400px width="400px"alt="">
            <div class="centered" id="Texto-intro">

                <p class="Texto-intro-titulo">Make a change</p>
                <p>Try out our premium wear, each week we bring out even newer options. If you are intrested please contact us </p>
                    <a href="store.php"><input type="button" name="button" class="ShopNow" value="SHOP NOW" href="store.php"></a>
            </div>
          </div>
          <div class="col-md-6" id="Intro1">
            <img src="imagenes/Chamarra-hombre.jpg" height=400px width="400px" alt="">
          <div  id="Texto-intro" class="centered">

              <p class="Texto-intro-titulo">We are all about quality</p>
              <p>we've been making quality clothing since we first started, with the best of the best materials</p>
                  <a href="store.php"><input type="button" name="button" class="ShopNow"  value="SHOP NOW" href="store.php"></a>
          </div>
          </div>

        </div>


            <div class="row" class="centered">
              <div class="caja2">

              </div>

            </div>



        <div class="row">
          <div class="container">
            <h5 id="Footer-F">OUR LINKS:</h5>
                      <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right" id="Footer-F"></i>Home</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"id="Footer-F"></i>About</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"id="Footer-F"></i>FAQ</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"id="Footer-F"></i>Get Started</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"id="Footer-F"></i>Videos</a></li>
                      </ul>
            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
              <li class="list-inline-item">
                <a href="www.facebook.com">
                  <img src="imagenes/facebook.png" height=50px width=50px; alt="">
                </a>
              </li>
              <li class="list-inline-item">
                <a href="www.facebook.com">
                    <img src="imagenes/insta.png" height=50px width=50px; alt="">
                </a>
              </li>
              <li class="list-inline-item">
                <a href="www.facebook.com">
                    <img src="imagenes/twitter.png" height=50px width=50px; alt="">
                </a>
              </li>
              <li class="list-inline-item">
                <a href="www.facebook.com">
                  <img src="imagenes/youtube.png" height=50px width=50px; alt="">
                </a>
              </li>
              <li class="list-inline-item">
                <a href="www.facebook.com">
                    <img src="imagenes/pinterest.png" height=50px width=50px; alt="">
                </a>
              </li>
            </ul>
            <!-- Social buttons -->

          </div>
          <!-- Footer Elements -->

    <footer>
      <div class="footer-copyright text-center py-3" id="Footer-F">© 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"id="Footer-F"> MDBootstrap.com</a>
      </div>
    </footer>


        <!-- Footer -->
        </div>

      </div>
      </div>



      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script>
      $("#Galeria1").magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery:{
      enabled: true
      }
      });
      </script>



  </body>
</html>
