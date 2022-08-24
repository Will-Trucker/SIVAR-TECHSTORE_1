<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cheout</title>
    <link rel="stylesheet" href="css/Check.css">
    <link rel="preload" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="icon" type="picture" href="img/Icono.png">
    <link rel="preload" type="text/css" href="css/carrito.css">
    <link rel="stylesheet" type="text/css" href="css/carrito.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="navegacion"> <!-- Menu -->
    <header class="header">
       <a class="logo" href="#"><img class="logotipo" src="img/Asset 7.webp" alt="logo"></a>
        <nav>
            <ul class="nav__links">
              <li><a href="#" class="opciones bars-solid"><svg class="bars-solid"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="30px" height="40px"><path  fill=currentcolor d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z"/></svg> Catalogo</a></li>
              <li><a href="#" class="opciones cotizar"><svg class="cotizacion" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentcolor" d="M320 96H192L144.6 24.88C137.5 14.24 145.1 0 157.9 0H354.1C366.9 0 374.5 14.24 367.4 24.88L320 96zM192 128H320C323.8 130.5 328.1 133.3 332.1 136.4C389.7 172.7 512 250.9 512 416C512 469 469 512 416 512H96C42.98 512 0 469 0 416C0 250.9 122.3 172.7 179 136.4C183.9 133.3 188.2 130.5 192 128V128zM276.1 224C276.1 212.9 267.1 203.9 255.1 203.9C244.9 203.9 235.9 212.9 235.9 224V230C230.3 231.2 224.1 232.9 220 235.1C205.1 241.9 192.1 254.5 188.9 272.8C187.1 283 188.1 292.9 192.3 301.8C196.5 310.6 203 316.8 209.6 321.3C221.2 329.2 236.5 333.8 248.2 337.3L250.4 337.9C264.4 342.2 273.8 345.3 279.7 349.6C282.2 351.4 283.1 352.8 283.4 353.7C283.8 354.5 284.4 356.3 283.7 360.3C283.1 363.8 281.2 366.8 275.7 369.1C269.6 371.7 259.7 373 246.9 371C240.9 370 230.2 366.4 220.7 363.2C218.5 362.4 216.3 361.7 214.3 361C203.8 357.5 192.5 363.2 189 373.7C185.5 384.2 191.2 395.5 201.7 398.1C202.9 399.4 204.4 399.9 206.1 400.5C213.1 403.2 226.4 407.4 235.9 409.6V416C235.9 427.1 244.9 436.1 255.1 436.1C267.1 436.1 276.1 427.1 276.1 416V410.5C281.4 409.5 286.6 407.1 291.4 405.9C307.2 399.2 319.8 386.2 323.1 367.2C324.9 356.8 324.1 346.8 320.1 337.7C316.2 328.7 309.9 322.1 303.2 317.3C291.1 308.4 274.9 303.6 262.8 299.9L261.1 299.7C247.8 295.4 238.2 292.4 232.1 288.2C229.5 286.4 228.7 285.2 228.5 284.7C228.3 284.3 227.7 283.1 228.3 279.7C228.7 277.7 230.2 274.4 236.5 271.6C242.1 268.7 252.9 267.1 265.1 268.1C269.5 269.7 283 272.3 286.9 273.3C297.5 276.2 308.5 269.8 311.3 259.1C314.2 248.5 307.8 237.5 297.1 234.7C292.7 233.5 282.7 231.5 276.1 230.3L276.1 224z"/></svg> Cotizá</a></li>
              <li><a href="#" class="opciones carretilla"><svg class="carretilla"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentcolor" d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/></svg> Compras</a></li>
            </ul>
        </nav>
    <a class="cta" href="registro.html">¡REGISTRATE!</a>

    <a alt="#" class="menu cta icono">≡</a>

    <div class="overlay" id="mobile-menu">
        <a class="close">&times;</a>
        <div class="overlay__content">
            <a href="#">Catalogo</a>
            <a href="#">Cotizá</a>
            <a href="#">Compras</a>
            <a href="registro.html">¡REGISTRATE!</a>
            <a href="Login.html">Iniciar Sesion</a>
        </div>
    </div>
    <script text="text/javascript" src="js/menu.js"></script>

</div>
<br><br><br><br><br><br><br>
</header>

    <section class="CheC">
      <div class="CaD">
        <h1>Checkout</h1>
        <p>Tu carro de compras tiene:</p>
      </div>
      <div class="DG">
      <div class="DT">
      <div class="Tabla">
        <div class="TCab">
          <div class="TTCab">
            <h4>Procucto</h4>
            <hr class="LS">
          </div>
          <hr class="BT">
          <div class="TTCab1">
            <img src="https://i0.wp.com/img.iqmore.com/iqmoreidv_img/news/2019/Kingston/Kingston_Hyperx_fury_rgb_ddr4_ram_news/01.JPG?w=810&ssl=1" alt="">
            <p class="DPT"> <b>Producto</b><br>Especificaciones</p>
          </div>
        </div>
        <div class="TCab">
          <div class="TTCab">
            <h4>Precio</h4>
            <hr class="LS">
          </div>
          <hr class="BT">
          <div class="TTCab1">
            <p class="PC">$0.00</p>
          </div>
        </div>
        <div class="TCab">
          <div class="TTCab">
            <h4>Cantidad</h4>
            <hr class="LS">
          </div>
          <hr class="BT">
          <div class="TTCab1">
            <input class="ContTabla" type="number" name="tentacles" min="1" max="100">
          </div>
        </div>
        <div class="TCab">
          <div class="TTCab">
            <h4>Subtotal</h4>
            <hr class="LS">
          </div>
          <hr class="BT">
          <div class="TTCab1">
            <p class="PC">$0.00 </p>
          </div>
        </div>
      </div>
    </div>
      <div class="DYF">
        <div class="DP">
          <div class="DEn">
            <p>Contenido de la canasta</p>
          </div>
          <div class="DCu">
            <div class="NP">
              <p>Producto 1 -</p>
              <p>Producto 2 -</p>
              <p>Servicio total -</p>
            </div>
            <div class="PP">
              <p>$0.00</p>
              <p>$00.00</p>
              <p>$00.00</p>
            </div>
          </div>
          <div class="DPie">
            <hr class="BArri">
            <div class="CTCP">
            <div class="CT">
              <h4>Total</h4>
            </div>
            <div class="CP">
              <h4>$0.00</h4>
            </div>
          </div>
            <hr class="BAba">
          </div>
        </div>
        <div class="ARP">
          <a class="RP" href="#">Realizar pago</a>
        </div>
      </div>
    </div>
    </section>
  </body>
</html>