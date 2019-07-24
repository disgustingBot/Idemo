<?php include "head.php"; ?>
<link rel="stylesheet" type="text/css" href="css/index.css">
  <main>
    <section id="homeForms">
      <form class="" action="sendMail.php" method="post">
        <h3>soy empresa y<br>busco distribuidor</h3>
        <input type="text" name="frm" value="Pagina de inicio, solicitando distribuidor" hidden>
        <input type="text" name="a1" value="" placeholder="empresa o profesional">
        <input type="text" name="a2" value="" placeholder="persona de contacto">
        <input type="text" name="a3" value="" placeholder="e-mail">
        <input type="text" name="a4" value="" placeholder="teléfono">
        <input type="text" name="a5" value="" placeholder="país">
        <input type="text" name="a6" value="" placeholder="provincia">
        <input type="text" name="a7" value="" placeholder="población">
        <button type="submit" name="button">solicitar distribuidor</button>
      </form>
      <form class="" action="sendMail.php" method="post">
        <h3>soy particular y<br>busco instalador</h3>
        <input type="text" name="frm" value="Pagina de inicio, solicitando istalador" hidden>
        <input type="text" name="a1" value="" placeholder="nombre">
        <input type="text" name="a2" value="" placeholder="e-mail">
        <input type="text" name="a3" value="" placeholder="teléfono">
        <input type="text" name="a4" value="" placeholder="provincia">
        <input type="text" name="a5" value="" placeholder="población">
        <input type="text" name="a6" value="" placeholder="¿que desea instalar?">
        <button type="submit" name="button">solicitar instalador</button>
      </form>
      <img id="homeFormAlternate" class="" src="img/Recurso8.png" alt="distribuidor instalador" onclick="altForms()">
      <img id="homeAboveTheFoldImg" src="img/PORTADA_CATALOGO_IDEMO_2015.jpg" alt="mujer con control remoto">
    </section>
    <hgroup id="homeTitle">
      <img id="homeMotorSeparator"  src="img/Recurso9.png"                    alt="motor tubular">
      <h2>automatización<br>del hogar</h2>
      <h3>sistemas integrales para la motorización y automatización de viviendas</h3>
    </hgroup>
    <!-- TODO: colocar hipervinculos correspondientes -->
    <ul id="homeNavgt">
      <li>
        <a href="para-persianas-enrollables.php">
          <figure>
            <img src="img/Recurso1-100.jpg" alt="">
            <figcaption>
              para<br>
              persianas<br>
              enrollables
            </figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="para-persianas-orientables.php">
          <figure>
            <img src="img/Recurso2-100.jpg" alt="">
            <figcaption>
              para<br>
              persianas<br>
              orientables
            </figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="para-toldos-y-pergolas.php">
          <figure>
            <img src="img/Recurso3-100.jpg" alt="">
            <figcaption>
              para<br>
              toldos y<br>
              pérgolas
            </figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="para-cortinas-enrollables.php">
          <figure>
            <img src="img/Recurso4-100.jpg" alt="">
            <figcaption>
              para<br>
              cortinas<br>
              enrollables
            </figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="para-puertas-enrollables.php">
          <figure>
            <img src="img/Recurso5-100.jpg" alt="">
            <figcaption>
              para<br>
              puertas<br>
              enrollables
            </figcaption>
          </figure>
        </a>
      </li>
    </ul>
    <figure id="homeCTAct">
      <img id="homeCTAimg" src="img/cabecera-idemo-domotica.jpg" alt="">
      <figcaption>

        <h1>îdehome</h1>
        <h3>
          sistema de domótica integral para el
          hogar capaz de controlar sistemas de
          motorización, iluminación y climatización.
        </h3>
        <a href="domotica.php">descubre nuestro sistema de domótica</a>
      </figcaption>
    </figure>
  </main>
  <script type="text/javascript" src="js/index.js"></script>
</body>
</html>
