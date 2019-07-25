<?php include "../head.php"; ?>
<link rel="stylesheet" type="text/css" href="/css/profesionales.css">

<main>

  <!--SECTION 1 - ABOVE THE FOLD -->

<section class="aboveTheFold">

  <div id="profesionalesCopyContainer">
    <h1>contacta con el distribuidor de tu zona rellenando este formulario.</h1>
    <h2>nuestra red de distribuidores está siempre disponible para solventar cualquier necesidad sobre nuestros productos.</h2>
  </div>

  <form id="profesionalesForm1" action="../sendMail.php" method="post">
    <input type="text" name="frm" value="Pagina profesionales, contactando distribuidor" hidden>
    <input type="text" name="a1" value="" placeholder="empresa o profesional">
    <input type="text" name="a2" value="" placeholder="persona de contacto">
    <input type="text" name="a3" value="" placeholder="e-mail">
    <input type="text" name="a4" value="" placeholder="teléfono">
    <input type="text" name="a5" value="" placeholder="país">
    <input type="text" name="a6" value="" placeholder="provincia">
    <input type="text" name="a7" value="" placeholder="población">
    <textarea name="a8" rows="3" cols="80" placeholder="mensaje"></textarea>
    <button type="submit" name="button">contactar distribuidor</button>
  </form>


</section>

<!--SEPARADOR -->

<section class="separator1">
<img src="/img/RecursoProfesionales1.jpg" alt="foto técnico IDEMO trabajando">
</section>


<!--SECTION 2 - CONTACTO -->


<section class="profesionalesContact">

  <img id="contactIcon" src="/img/RecursoProfesionales2.png" alt="icono contacto">

    <figcaption id="contactTxt">
      <h3>servicio técnico</h3>
      <p id="contactTxtSmall">asistencia técnica telefónica y presencial para resolver cualquier duda o problema de<br>instalación que pueda surgir.</p>
      <p class="contactTxtBig">tel.93 784 56 07</p>
      <p class="contactTxtBig">mail: tecnico@idemomotors.com</p>
    </figcaption>
</section>

<!--SECTION 3 - FICHAS TECNICAS -->

<section class="fichasTecnicas">

  <img id="fichasIcon" src="/img/RecursoProfesionales3.png" alt="icono flecha indicativa">
  <hgroup id="fichasTxt">
    <h3 id="fichasTitle">descarga nuestras fichas técnicas</h3>
    <p id="fichasP">datos técnicos y de instalación de todos nuestros productos</p>
  </hgroup>



  <ul class="fichasUl" id="ulMotores">
    <p id="ulMotoresTitle">motores</p>
    <li>
      <p>STAR 35</p>
      <p><a href="/fichasTecnicas/STAR35_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>STAR 35 RS</p>
      <p><a href="/fichasTecnicas/STAR35RS_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>STAR 45</p>
      <p><a href="/fichasTecnicas/STAR45_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>STAR 45 R</p>
      <p><a href="/fichasTecnicas/STAR45R_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>STAR 45 RS</p>
      <p><a href="/fichasTecnicas/STAR45RS_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>STAR 45 MM</p>
      <p><a href="/fichasTecnicas/STAR45MM_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>STAR 59</p>
      <p><a href="/fichasTecnicas/STAR59_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>STAR 59 MM</p>
      <p><a href="/fichasTecnicas/STAR59MM_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>BLU 35</p>
      <p><a href="/fichasTecnicas/BLU35_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>BLU 45</p>
      <p><a href="/fichasTecnicas/BLU45_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>LIMIT 35 RS</p>
      <p><a href="/fichasTecnicas/LIMIT35RS_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>LIMIT 45</p>
      <p><a href="/fichasTecnicas/LIMIT45_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>LIMIT 45 RS</p>
      <p><a href="/fichasTecnicas/LIMIT45RS_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>LIMIT 45 DO</p>
      <p><a href="/fichasTecnicas/LIMIT45DO_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>IDEMAX IDX-PRO 45</p>
      <p><a href="/fichasTecnicas/IDX-PRO_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>ATOM 92</p>
      <p><a href="/fichasTecnicas/ATOM92_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

    <li>
      <p>MOTOR CENTRAL</p>
      <p><a href="/fichasTecnicas/ATOMCENTRAL_fichatecnica.pdf" download >ficha técnica</a> / <a href=""> instrucciones</a></p>
    </li>

  </ul>

  <ul class="fichasUl" id="ulAutomatismos">
    <p id="ulAutomatismosTitle">automatismos</p>
    <li>
      <p>SMART</p>
      <p><a href="/fichasTecnicas/SMART_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>FIT</p>
      <p><a href="/fichasTecnicas/FIT_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>JAZZ</p>
      <p><a href="/fichasTecnicas/JAZZ_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>FIT-PARED</p>
      <p><a href="/fichasTecnicas/FITPARED_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>FIT-MINI-USB</p>
      <p><a href="/fichasTecnicas/FITMINI_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>POCKET</p>
      <p><a href="/fichasTecnicas/POCKET_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>Receptor MINI 500</p>
      <p><a href="/fichasTecnicas/MINI500_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>Receptor EUROPEO</p>
      <p><a href="/fichasTecnicas/EUROPEO_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>Receptor OMEDI</p>
      <p><a href="/fichasTecnicas/OMEDI_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>Receptor PARKING</p>
      <p><a href="/fichasTecnicas/" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>Módulos IDEMAX</p>
      <p><a href="/fichasTecnicas/IDEMAX_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>Sensor AURA</p>
      <p><a href="/fichasTecnicas/AURA_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

    <li>
      <p>Sensor MOTION</p>
      <p><a href="/fichasTecnicas/MOTION_fichatecnica.pdf" download >ficha técnica</a> /<br><a href="">instrucciones según motor</a></p>
    </li>

  </ul>

  <ul class="fichasUl" id="ulIdehome">
      <p id="ideHomeTitle">îdehome</p>
    <li>
      <p>îdehome Smart Hub</p>
      <p><a href="/fichasTecnicas/IDEHOMEHUB_fichatecnica.pdf" download >ficha técnica: PDF</a> / <br><a href="https://www.youtube.com/watch?v=EmT4G0K4c4s" target="_blank">instrucciones: vídeo</a></p>
    </li>

    <li>
      <p>Idehome Zigbee mini hub</p>
      <p><a href="/fichasTecnicas/" download >ficha técnica: PDF</a> / <br><a href="">instrucciones: vídeo</a></p>
    </li>

    <li>
      <p>Idehome magic cube</p>
      <p><a href="/fichasTecnicas/" download >ficha técnica: PDF</a> / <br><a href="">instrucciones: vídeo</a></p>
    </li>

    <li>
      <p>Cámara IDH-C10</p>
      <p><a href="/fichasTecnicas/CAMARAIDH-C10_fichatecnica.pdf" download >ficha técnica: PDF</a> / <br><a href="">instrucciones: vídeo</a></p>
    </li>

    <li>
      <p>Cámara idehome móvil IDH-C30</p>
      <p><a href="/fichasTecnicas/" download >ficha técnica: PDF</a> / <br><a href="">instrucciones: vídeo</a></p>
    </li>

    <li>
      <p>Enchufe IDH-E25</p>
      <p><a href="/fichasTecnicas/ENCHUFEIDH-E25_fichatecnica.pdf" download >ficha técnica: PDF</a> / <br><a href="">instrucciones: vídeo</a></p>
    </li>

    <li>
      <p>Módulo iluminación inwall IDH-I01</p>
      <p><a href="/fichasTecnicas/" download >ficha técnica: PDF</a> / <br><a href="">instrucciones: vídeo</a></p>
    </li>

    <li>
      <p>Módulo iluminación RGB IDH-I02</p>
      <p><a href="/fichasTecnicas/" download >ficha técnica: PDF</a> / <br><a href="">instrucciones: vídeo</a></p>
    </li>

    <li>
      <p>Módulo bidireccional motor tubular IDH-M01</p>
      <p><a href="/fichasTecnicas/" download >ficha técnica: PDF</a> / <br><a href="">instrucciones: vídeo</a></p>
    </li>

    <li>
      <p>Sensor puerta/ventana IDH-S01</p>
      <p><a href="/fichasTecnicas/" download >ficha técnica: PDF</a> / <br><a href="">instrucciones: vídeo</a></p>
    </li>

    <li>
      <p>Sensor movimiento IDH-S02</p>
      <p><a href="/fichasTecnicas/" download >ficha técnica: PDF</a> / <br><a href="">instrucciones: vídeo</a></p>
    </li>

    <li>
      <p>Emisor 4 escenas IDH-P02</p>
      <p><a href="/fichasTecnicas/" download >ficha técnica: PDF</a> / <br><a href="">instrucciones: vídeo</a></p>
    </li>

  </ul>

</section>

<!--SEPARADOR 2 -->

<div class="separator2">

  <img src="/img/RecursoProfesionales4.jpg" alt="Catálogo IDEMO" id="separator2Img">

  <figure id="descargaCatalogo">

    <figcaption id="descargaCatalogoTxt">
      <a href="/fichasTecnicas/CATA_LOGO_IDEMO_2015_I_trazado-baja.pdf" download>descarga<br>nuestro<br>catálogo</a>
    </figcaption>
    <img src="/img/RecursoProfesionales3.png" alt="icono flecha indicativa" id="descargasIcon">
  </figure>

</div>


<!--SECTION 4 - FORMULARIO HAZTE DISTRIBUIDOR -->


<section class="hazteDistribuidor">

  <div id="hazteDistribuidorTxt">
    <h4 id="distribuidorTitle">¡hazte distribuidor<br>autorizado de<br>idemo!</h4>
    <p id="distribuidorP">si quieres hacerte distribuidor de nuestros<br>productos, rellena y envía el siguiente formulario,<br>analizaremos tu zona y nos pondremos en<br>contacto contigo.</p>
  </div>

  <form id="profesionalesForm2" action="sendMail.php" method="post">
    <input type="text" name="frm" value="Pagina profesionales, solicitando ser distribuidor" hidden>
    <input type="text" name="a1" value="" placeholder="nombre de empresa">
    <input type="text" name="a2" value="" placeholder="persona de contacto">
    <input type="text" name="a3" value="" placeholder="e-mail">
    <input type="text" name="a4" value="" placeholder="teléfono">
    <input type="text" name="a5" value="" placeholder="país">
    <input type="text" name="a6" value="" placeholder="provincia">
    <input type="text" name="a7" value="" placeholder="población">
    <textarea name="a8" rows="3" cols="80" placeholder="mensaje"></textarea>
    <button type="submit" name="button">hacerme distribuidor</button>
  </form>

</section>


</main>


</body>
</html>
