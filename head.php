<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>îdemo</title>
  <link rel="shortcut icon" href="/img/logo.png">
  <meta http-equiv="Cache-control" content="max-age=432000">
  <meta http-equiv="Cache-control" content="public">
  <?php
  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
  // echo "<script>console.log('".$actual_link."')</script>";
  // echo "<script>console.log('home')</script>";
  $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
  // echo $uri_parts;
  // echo "<script>console.log('".$uri_parts[1]."')</script>";
    if ($_SERVER['REQUEST_URI']=="/") { ?>
      <meta name="title" content="Idemo Motors: motores y domótica para persianas, toldos y cortinas">
      <meta name="description" content="30 años de experiencia en protección solar y el cerramiento.  Fabricamos y distribuimos sistemas de automatización de persianas, cortinas y toldos.">
      <meta name="keywords" content="Motor persiana, Motor toldo, Motor cortina, Domotica, Persianas eléctricas, Persianas motorizadas, Persianas Google home, Persianas Amazon Alexa, Persianas Siri, App persianas">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
      <!-- OPEN GRAPH METADATA -->
      <meta property="og:title" content="Idemo Motors: motores y domótica para persianas, toldos y cortinas">
      <meta property="og:site_name" content="Idemo Motors">
      <meta property="og:url" content="https://www.idemomotors.com">
      <meta property="og:description" content="30 años de experiencia en protección solar y el cerramiento.  Fabricamos y distribuimos sistemas de automatización de persianas, cortinas y toldos.">
      <meta property="og:type" content="website">
      <meta property="og:image" content="https://www.idemomotors.com/img/logo.png">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/") { ?>
      <meta name="title" content="Motores para persianas, toldos, puertas enrollables y cortinas">
      <meta name="description" content="Motores para persianas, toldos, puertas enrollables y cortinas. Selecciona el motor según su uso. Rapidos, silenciosos y eficientes. ">
      <meta name="keywords" content="motores, domotica,  persianas, toldos, puertas enrollables, cortinas, idemo">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/para-persianas-enrollables/") { ?>
      <meta name="title" content="Motores para persianas enrollables">
      <meta name="description" content="Motores para persianas enrollables. Selecciona el motor según su uso">
      <meta name="keywords" content="motores, domotica, persianas enrollables, idemo">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/para-persianas-orientables/") { ?>
      <meta name="title" content="Motores para persianas orientables">
      <meta name="description" content="Motores para persianas orientables">
      <meta name="keywords" content="motores, domotica, persianas orientables, idemo">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/para-toldos-y-pergolas/") { ?>
      <meta name="title" content="Motores para toldos y pergolas">
      <meta name="description" content="Motores para toldos y pergolas">
      <meta name="keywords" content="motores, domotica, toldos, pergolas, idemo">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/para-cortinas-enrollables/") { ?>
      <meta name="title" content="Motores para cortinas enrollables">
      <meta name="description" content="Motores para cortinas enrollables. Rapidos, silenciosos y eficientes">
      <meta name="keywords" content="motores, domotica, idemo, cortinas enrollables">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/para-puertas-enrollables/") { ?>
      <meta name="title" content="Motores para puertas enrollables">
      <meta name="description" content="Motores para puertas enrollables">
      <meta name="keywords" content="motores, domotica, puertas enrollables, idemo">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/star/") { ?>
      <meta name="title" content="Motores mecánicos con final de carrera mecánico">
      <meta name="description" content="Star: motores mecánicos con final de carrera mecánico">
      <meta name="keywords" content="motores, final de carrera mecanico, domotica, idemo">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/blu/") { ?>
      <meta name="title" content="motores vía radio con final de carrera mecánico - blu">
      <meta name="description" content="blu: motores vía radio con final de carrera mecánico.">
      <meta name="keywords" content="domotica, motores, final carrera de mecanico, idemo, persianas, toldos, cortinas, puertas enrollables">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/limit/") { ?>
      <meta name="title" content="Limit - motores electrónicos con final de carrera electrónico">
      <meta name="description" content="Motores electrónicos con final de carrera electrónico limit. ">
      <meta name="keywords" content="motores, final de carrera electronico, domotica, idemo">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/idemax/") { ?>
      <meta name="title" content="Motores para persianas orientables - Idemax ">
      <meta name="description" content="Motores para persianas orientables">
      <meta name="keywords" content="motores, persianas, orientables, idemax, idemo, domotica">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/atom/") { ?>
      <meta name="title" content="Motores para puertas enrollables y cierres comerciales e industriales">
      <meta name="description" content="Motores Atom, para puertas enrollables y cierres comerciales e industriales">
      <meta name="keywords" content="motores, domotica, puertas, enrollables, cierres comerciales, cierres industriales">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/con-deteccion-de-obstaculos/") { ?>
      <meta name="title" content="Motores con deteccion de obstaculos">
      <meta name="description" content="Seleccion de motores silenciosos con deteccion de obstaculos">
      <meta name="keywords" content="domotica, motores, idemo, deteccion de obstaculos, obstaculos, deteccion, ">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/mas-rapidos-y-silenciosos/") { ?>
      <meta name="title" content="Motores rápidos y silenciosos">
      <meta name="description" content="Selección de motores más rápidos y silenciosos">
      <meta name="keywords" content="motores silenciosos, domotica, motores, silenciosos, rapidos, idemo, persianas, toldos, cortinas">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/motores/para-domotica/") { ?>
      <meta name="title" content="Motores compatibles con sistemas de domótica">
      <meta name="description" content="Selección de motores compatibles con sistemas de domótica. Rápidos, silenciosos y eficaces. ">
      <meta name="keywords" content="motores, domotica, idemo, persianas, cortinas, toldos, puertas enrollables">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/automatismos/") { ?>
      <meta name="title" content="Automatismos - control de motores de cortinas, toldos, persianas y mas">
      <meta name="description" content="Automatismos - control de motores de cortinas, toldos, persianas, puertas enrollables: Emisores, receptores, sensores, módulos y sus posibilidades">
      <meta name="keywords" content="domotica, idehome, automatismos, emisores, receptores, sensores, módulos, motores">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/accesorios/") { ?>
      <meta name="title" content="Accesorios necesarios para la correcta instalación de motores Idemo">
      <meta name="description" content="Accesorios necesarios para la correcta instalación de nuestros motores: soportes, adaptadotes para cortinas, para persianas, para toldos, utiles y mas">
      <meta name="keywords" content="domotica, idemo, accesorios, motores, soportes, adaptadotes, cortinas, persianas, toldos, utiles">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/domotica/") { ?>
      <meta name="title" content="Domótica îdehome - îdemo">
      <meta name="description" content="îdehome® es un sistema de domótica integral para el hogar capaz de controlar sistemas de motorización, iluminación y climatización.">
      <meta name="keywords" content="smart hub, domotica, dispositivos, app idehome, idemo, hey siri, google home, ok google, persianas, toldos, cortinas, sensor, sensores">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/empresa/") { ?>
      <meta name="title" content="Empresa - Idemo">
      <meta name="description" content="Dedicados a la fabricación y distribución de sistemas de motorización y automatización de persianas, cortinas y toldos. Vocación de servicio.  ">
      <meta name="keywords" content="Domotica, toldos, cortinas, persianas, medioambiental, diseño, compromiso, automatismos, domotica, motores, garantia, servicio tecnico, tecnico, servicio, distribucion, distribuidores, catalogo, idehome, idemo">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/profesionales/") { ?>
      <meta name="title" content="Red de distribuidores y profesionales">
      <meta name="description" content="Nuestra red de distribuidores está siempre disponible para solventar cualquier necesidad sobre nuestros productos.Contacta con el distribuidor de tu zona.">
      <meta name="keywords" content="idemo, domotica, motores, distribuidores">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($_SERVER['REQUEST_URI']=="/noticias/") { ?>
      <meta name="title" content="Noticias Idemo">
      <meta name="description" content="Ultimas novedades sobre motores de domotica para persianas, toldos, cortinas o puertas enrollables y sus servicios. ">
      <meta name="keywords" content="noticias, domotica, idemo, motores, domotica, persianas, toldos, cortinas, puertas enrollables">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="Spanish">
      <meta name="author" content="Latte & Fernandez Alvarez">
    <?php }
    if ($uri_parts[0]=="/noticias/noticia.php") {
      $uri_variable = explode('=', $uri_parts[1], 2);
      include_once '../../inc/dbh.inc.php';
      $qry = "SELECT * FROM news WHERE pky == $uri_variable[1];";
      $ress = $conn->query($qry);
      $resp = $ress->fetch_all(MYSQLI_ASSOC);
    ?>
      <meta name="title"              content="<?php echo $resp[0]["pky"]; ?>">
      <meta name="description"        content="<?php echo $resp[0]["asy"]; ?>">
      <meta name="robots"             content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language"           content="Spanish">
      <meta name="author"             content="Latte & Fernandez Alvarez">
    <?php }
  ?>
	<link rel="stylesheet" type="text/css" href="/css/main.css">
  <script src="/js/index.js"></script>
</head>
<body>


  <div class="cookiesPopup">
    <p>Utilizamos cookies para mejorar tu experiencia en nuestro sitio. En cumplimiento del Real Decreto-ley 13/2012, si continúa navegando, consideramos que acepta nuestra <a href="idemomotors.com/cookies" target="_blank" class="cookiesLink">política de privacidad</a>.</p>
    <button class="okCookies" onclick="closePopup()">Aceptar términos</button>
  </div>


  <button id="hamburgerButton1" class="hamburgerButton">
    <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
    </svg>
  </button>

  <aside id="aside1">
    <nav>
      <figure id="logo">
        <a href="/">
          <img id="iso" src="/img/logo.png" alt="idemo, tubalar motor">
        </a>
        <!-- TODO: poner un h1 con z index negativo para la araña -->
      </figure>
      <ul id="navBar">
        <!-- TODO: agragar hipervinculos -->
        <li><a href="/motores">motores</a></li>
        <li><a href="/automatismos">automatismos</a></li>
        <li><a href="/accesorios">accesorios</a></li>
        <li><a href="/domotica">domótica</a></li>
        <li><a href="/empresa">empresa</a></li>
        <li><a href="/profesionales">profesionales</a></li>
        <li><a href="/noticias">noticias</a></li>
      </ul>
    </nav>
    <footer>
      <ul id="socialMedia">
        <!-- TODO: en vez de imagenes deberian ser svg, para derles un efecto al hacer hover -->
        <li><a href="https://www.facebook.com/idemotubularmotors/">
          <svg x="0px" y="0px" viewBox="200.009 0 560.217 560.217" enable-background="new 200.009 0 560.217 560.217"
          	 xml:space="preserve">
          		<path d="M480,0c154.699-0.065,280.161,125.291,280.227,279.99c0.064,154.699-125.291,280.161-279.991,280.227c-154.699,0.064-280.161-125.291-280.226-279.991c-0.031-74.327,29.48-145.62,82.037-198.18C334.474,29.43,405.723-0.1,480,0zM662.651,97.674C561.606-3.021,398.063-2.737,297.368,98.308s-100.412,264.587,0.633,365.282s264.588,100.412,365.283-0.633c48.374-48.542,75.475-114.318,75.336-182.849C738.493,211.629,711.166,146.004,662.651,97.674z"/>
          		<path d="M501.38,222.806v-23.008c-0.913-6.529,3.641-12.563,10.171-13.476c0.801-0.111,1.611-0.142,2.418-0.09h32.559v-49.055h-44.714c-49.054,0-60.123,36.356-60.123,59.907v25.721h-28.543V280h28.868v143.255h57.193V280h42.326l1.845-22.466l3.473-34.729H501.38z"/>
          </svg>
        </a></li>
        <li><a href="https://www.linkedin.com/company/idemo-motors-s-l-/">
          <svg x="0px" y="0px" viewBox="200.009 0 560.217 560.217" enable-background="new 200.009 0 560.217 560.217"
          	 xml:space="preserve">
          		<path d="M480,0c154.699-0.065,280.161,125.291,280.227,279.99c0.064,154.699-125.291,280.161-279.991,280.227c-154.699,0.064-280.161-125.291-280.226-279.991c-0.031-74.327,29.48-145.62,82.037-198.18C334.474,29.43,405.723-0.1,480,0zM662.435,97.674C563.589-4.931,400.28-7.98,297.674,90.865s-105.655,262.153-6.81,364.76c2.228,2.312,4.498,4.582,6.81,6.81c98.845,102.606,262.154,105.655,364.76,6.81c102.605-98.845,105.654-262.153,6.81-364.759C667.017,102.172,664.746,99.902,662.435,97.674z"/>
          		<path d="M364.961,271.318v123.721h58.93V226.496h-58.93V271.318z M616.31,278.264c-3.906-31.907-18.449-51.768-61.643-51.768c-25.179,0-42.326,9.333-49.38,22.79h-0.76v-22.79h-46.992v168.542h49.162v-83.565c0-21.705,4.342-43.411,31.256-43.411c26.915,0,29.194,25.07,29.194,44.713v82.264h50.465v-92.573C617.644,294.379,617.209,286.299,616.31,278.264z M394.372,142.279c-16.303,0-29.52,13.217-29.52,29.52c0,16.304,13.216,29.52,29.52,29.52s29.52-13.216,29.52-29.52l0,0c0.06-16.243-13.059-29.459-29.302-29.52C394.517,142.279,394.444,142.279,394.372,142.279z"/>
          </svg>
        </a></li>
        <li><a href="https://www.instagram.com/idemomotors/">
          <svg x="0px" y="0px" viewBox="199.062 -0.001 560.001 560" enable-background="new 199.062 -0.001 560.001 560" xml:space="preserve">
          	<path d="M480,0c154.639,0.518,279.578,126.298,279.061,280.937c-0.247,73.705-29.547,144.341-81.541,196.582c-109.088,109.605-286.374,110.024-395.979,0.938c-109.605-109.088-110.024-286.374-0.937-395.979C333.381,29.449,405.185-0.251,480,0z M662.651,97.674C561.606-3.021,398.063-2.737,297.368,98.308s-100.412,264.587,0.633,365.282s264.588,100.412,365.283-0.633c48.374-48.542,75.475-114.318,75.336-182.849C738.493,211.629,711.166,146.004,662.651,97.674z"/>
        		<path d="M397.954,280c0-45.373,36.782-82.155,82.155-82.155s82.155,36.782,82.155,82.155s-36.782,82.154-82.155,82.154c-0.036,0-0.072,0-0.108,0C434.694,362.035,398.013,325.306,397.954,280z M564.868,119.38h-169.52c-41.956,0-75.969,34.012-75.969,75.969v169.52c0,41.956,34.013,75.969,75.969,75.969h169.52c41.957,0,75.969-34.013,75.969-75.969v-169.52C640.837,153.392,606.825,119.38,564.868,119.38z M395.349,138.372h169.52c31.425,0.06,56.868,25.552,56.868,56.977v169.52c-0.06,31.382-25.485,56.808-56.868,56.868h-169.52c-31.425,0-56.917-25.443-56.977-56.868v-169.52C338.372,163.881,363.881,138.372,395.349,138.372z M581.69,162.79c-9.23,0.001-16.714,7.483-16.713,16.714c0,9.23,7.482,16.713,16.713,16.713s16.713-7.483,16.713-16.714c0-0.036,0-0.071,0-0.107c0-9.171-7.434-16.605-16.604-16.605C581.763,162.79,581.727,162.79,581.69,162.79z M583.644,280.434c0-57.24-46.403-103.644-103.644-103.644s-103.644,46.403-103.644,103.644S422.759,384.077,480,384.077l0,0C537.24,384.077,583.644,337.674,583.644,280.434z"/>
          </svg>
        </a></li>
        <li><a href="https://twitter.com/idemomotors/">
          <svg x="0px" y="0px" viewBox="200.063 0 560.108 560.107" enable-background="new 200.063 0 560.108 560.107" xml:space="preserve">
          		<path d="M480,0c154.67-0.065,280.106,125.267,280.172,279.937c0.065,154.669-125.267,280.106-279.937,280.171c-154.669,0.065-280.107-125.267-280.172-279.936c-0.031-74.313,29.475-145.593,82.021-198.142C334.529,29.465,405.747-0.052,480,0z M662.398,97.656C561.474-2.781,398.237-2.385,297.801,98.541s-100.04,264.161,0.886,364.598s264.162,100.04,364.598-0.886c48.136-48.37,75.131-113.851,75.068-182.091C738.375,211.635,711.032,145.935,662.398,97.656z"/>
          		<path d="M623.228,192.816c-10.719,4.63-22.046,7.699-33.637,9.114c12.28-7.125,21.511-18.519,25.934-32.01c-11.703,6.889-24.46,11.801-37.761,14.54c-22.361-23.557-59.585-24.525-83.142-2.164c-11.421,10.841-18.017,25.809-18.312,41.552c0.096,4.421,0.641,8.819,1.628,13.13c-47.016-2.093-90.94-24.017-120.876-60.33c-15.716,26.341-7.754,60.397,18.012,77.039c-9.275-0.107-18.376-2.532-26.476-7.053v0.76c-0.063,7.107,1.302,14.155,4.015,20.725c7.29,18.369,23.377,31.803,42.751,35.698c-5.047,1.435-10.269,2.165-15.517,2.17c-3.652-0.053-7.289-0.489-10.851-1.302c7.822,23.507,29.49,39.628,54.253,40.364c-20.749,15.642-46.064,24.029-72.048,23.871c-4.774,0-9.332,0-14.105-0.759c26.927,16.876,58.064,25.826,89.843,25.824c91.082,1.08,165.794-71.88,166.874-162.961c0.004-0.295,0.007-0.589,0.009-0.883v-7.379C605.295,214.57,615.246,204.435,623.228,192.816z"/>
          </svg>
        </a></li>
        <li><a href="https://www.youtube.com/user/idemomotors/">
          <svg x="0px" y="0px" viewBox="200.063 0 560.108 560.107" enable-background="new 200.063 0 560.108 560.107"
          	 xml:space="preserve">
          		<path d="M480,0c154.67-0.065,280.106,125.267,280.172,279.937c0.065,154.669-125.267,280.106-279.937,280.171c-154.669,0.065-280.107-125.267-280.172-279.936c-0.031-74.313,29.475-145.593,82.021-198.142C334.529,29.465,405.747-0.052,480,0z M662.398,97.656C561.423-2.901,398.05-2.561,297.494,98.414s-100.216,264.35,0.759,364.905c100.975,100.556,264.349,100.216,364.905-0.759c48.236-48.438,75.281-114.039,75.194-182.398C738.375,211.635,711.032,145.935,662.398,97.656z"/>
          		<path d="M620.081,220.376c-1.385-10.607-5.292-20.728-11.393-29.514c-7.548-7.919-17.927-12.523-28.863-12.804c-40.038-2.93-100.042-2.93-100.042-2.93l0,0c0,0-59.787,0-99.826,2.93c-10.863,0.326-21.158,4.927-28.646,12.804c-5.909,8.837-9.628,18.953-10.851,29.514c-1.883,15.955-2.897,32.002-3.038,48.067v22.787c0.125,16.066,1.139,32.113,3.038,48.067c1.246,10.622,4.962,20.804,10.851,29.73c8.603,8.058,19.898,12.623,31.684,12.804c22.786,2.279,97.656,3.039,97.656,3.039s60.004,0,100.042-3.039c10.659-0.488,20.704-5.121,27.995-12.912c6.081-8.877,9.984-19.063,11.393-29.73c1.869-15.922,2.92-31.93,3.146-47.959v-22.787c-0.13-16.06-1.071-32.103-2.82-48.067H620.081z M527.743,276.799l-77.365,41.774v-83.767l35.047,19.098L527.743,276.799z"/>
          </svg>
        </a></li>
      </ul>
      <ul id="address">
        <li>
          <p>
            T. [+34] 93 784 56 07 <br>
            Polígono Industrial Can Petit. <br>
            Camí Font de les Canyes 48. <br>
            c.p. 08227 Terrassa (Barcelona)
          </p>
        </li>
        <li>
          <h4>información general</h4>
          <p>idemo@idemomotors.com</p>
        </li>
        <li>
          <h4>departamento técnico</h4>
          <p>tecnico@idemomotors.com</p>
        </li>
        <li>
          <h4>departamento comercial</h4>
          <p>pedidos@idemomotors.com</p>
        </li>
      </ul>
      <span id="fromSpain">FROM SPAIN</span>
    </footer>
  </aside>

  <a href="/" id="mobileHeader">
    <img id="isotype" src="../img/iso.png" alt="Isotipo">
  </a>

  <button id="hamburgerButton2" class="hamburgerButton">
    <svg role="img" viewBox="309.701 185.4 130.199 130.2" xml:space="preserve">
      <path fill="currentColor" d="M374.801,185.4c-35.951,0-65.1,29.159-65.1,65.1c0,35.961,29.148,65.1,65.1,65.1s65.1-29.139,65.1-65.1C439.9,214.559,410.752,185.4,374.801,185.4z M374.801,214.275c6.089,0,11.025,4.936,11.025,11.025s-4.937,11.025-11.025,11.025s-11.025-4.936-11.025-11.025S368.712,214.275,374.801,214.275z M389.501,280.949c0,1.74-1.411,3.15-3.15,3.15h-23.1c-1.739,0-3.15-1.41-3.15-3.15v-6.299c0-1.74,1.411-3.15,3.15-3.15h3.149v-16.801h-3.149c-1.739,0-3.15-1.41-3.15-3.149v-6.3c0-1.74,1.411-3.15,3.15-3.15h16.8c1.739,0,3.15,1.41,3.15,3.15v26.25h3.149c1.739,0,3.15,1.41,3.15,3.15V280.949z"></path>
  </svg>
    <!-- <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
    </svg> -->
  </button>


  <aside id="aside2">
    <footer>
      <ul id="socialMedia">
        <!-- TODO: en vez de imagenes deberian ser svg, para derles un efecto al hacer hover -->
        <li><a href="https://www.facebook.com/idemotubularmotors/">
          <svg x="0px" y="0px" viewBox="200.009 0 560.217 560.217" enable-background="new 200.009 0 560.217 560.217"
          	 xml:space="preserve">
          		<path d="M480,0c154.699-0.065,280.161,125.291,280.227,279.99c0.064,154.699-125.291,280.161-279.991,280.227c-154.699,0.064-280.161-125.291-280.226-279.991c-0.031-74.327,29.48-145.62,82.037-198.18C334.474,29.43,405.723-0.1,480,0zM662.651,97.674C561.606-3.021,398.063-2.737,297.368,98.308s-100.412,264.587,0.633,365.282s264.588,100.412,365.283-0.633c48.374-48.542,75.475-114.318,75.336-182.849C738.493,211.629,711.166,146.004,662.651,97.674z"/>
          		<path d="M501.38,222.806v-23.008c-0.913-6.529,3.641-12.563,10.171-13.476c0.801-0.111,1.611-0.142,2.418-0.09h32.559v-49.055h-44.714c-49.054,0-60.123,36.356-60.123,59.907v25.721h-28.543V280h28.868v143.255h57.193V280h42.326l1.845-22.466l3.473-34.729H501.38z"/>
          </svg>
        </a></li>
        <li><a href="https://www.linkedin.com/company/idemo-motors-s-l-/">
          <svg x="0px" y="0px" viewBox="200.009 0 560.217 560.217" enable-background="new 200.009 0 560.217 560.217"
          	 xml:space="preserve">
          		<path d="M480,0c154.699-0.065,280.161,125.291,280.227,279.99c0.064,154.699-125.291,280.161-279.991,280.227c-154.699,0.064-280.161-125.291-280.226-279.991c-0.031-74.327,29.48-145.62,82.037-198.18C334.474,29.43,405.723-0.1,480,0zM662.435,97.674C563.589-4.931,400.28-7.98,297.674,90.865s-105.655,262.153-6.81,364.76c2.228,2.312,4.498,4.582,6.81,6.81c98.845,102.606,262.154,105.655,364.76,6.81c102.605-98.845,105.654-262.153,6.81-364.759C667.017,102.172,664.746,99.902,662.435,97.674z"/>
          		<path d="M364.961,271.318v123.721h58.93V226.496h-58.93V271.318z M616.31,278.264c-3.906-31.907-18.449-51.768-61.643-51.768c-25.179,0-42.326,9.333-49.38,22.79h-0.76v-22.79h-46.992v168.542h49.162v-83.565c0-21.705,4.342-43.411,31.256-43.411c26.915,0,29.194,25.07,29.194,44.713v82.264h50.465v-92.573C617.644,294.379,617.209,286.299,616.31,278.264z M394.372,142.279c-16.303,0-29.52,13.217-29.52,29.52c0,16.304,13.216,29.52,29.52,29.52s29.52-13.216,29.52-29.52l0,0c0.06-16.243-13.059-29.459-29.302-29.52C394.517,142.279,394.444,142.279,394.372,142.279z"/>
          </svg>
        </a></li>
        <li><a href="https://www.instagram.com/idemomotors/">
          <svg x="0px" y="0px" viewBox="199.062 -0.001 560.001 560" enable-background="new 199.062 -0.001 560.001 560" xml:space="preserve">
          	<path d="M480,0c154.639,0.518,279.578,126.298,279.061,280.937c-0.247,73.705-29.547,144.341-81.541,196.582c-109.088,109.605-286.374,110.024-395.979,0.938c-109.605-109.088-110.024-286.374-0.937-395.979C333.381,29.449,405.185-0.251,480,0z M662.651,97.674C561.606-3.021,398.063-2.737,297.368,98.308s-100.412,264.587,0.633,365.282s264.588,100.412,365.283-0.633c48.374-48.542,75.475-114.318,75.336-182.849C738.493,211.629,711.166,146.004,662.651,97.674z"/>
        		<path d="M397.954,280c0-45.373,36.782-82.155,82.155-82.155s82.155,36.782,82.155,82.155s-36.782,82.154-82.155,82.154c-0.036,0-0.072,0-0.108,0C434.694,362.035,398.013,325.306,397.954,280z M564.868,119.38h-169.52c-41.956,0-75.969,34.012-75.969,75.969v169.52c0,41.956,34.013,75.969,75.969,75.969h169.52c41.957,0,75.969-34.013,75.969-75.969v-169.52C640.837,153.392,606.825,119.38,564.868,119.38z M395.349,138.372h169.52c31.425,0.06,56.868,25.552,56.868,56.977v169.52c-0.06,31.382-25.485,56.808-56.868,56.868h-169.52c-31.425,0-56.917-25.443-56.977-56.868v-169.52C338.372,163.881,363.881,138.372,395.349,138.372z M581.69,162.79c-9.23,0.001-16.714,7.483-16.713,16.714c0,9.23,7.482,16.713,16.713,16.713s16.713-7.483,16.713-16.714c0-0.036,0-0.071,0-0.107c0-9.171-7.434-16.605-16.604-16.605C581.763,162.79,581.727,162.79,581.69,162.79z M583.644,280.434c0-57.24-46.403-103.644-103.644-103.644s-103.644,46.403-103.644,103.644S422.759,384.077,480,384.077l0,0C537.24,384.077,583.644,337.674,583.644,280.434z"/>
          </svg>
        </a></li>
        <li><a href="https://twitter.com/idemomotors/">
          <svg x="0px" y="0px" viewBox="200.063 0 560.108 560.107" enable-background="new 200.063 0 560.108 560.107" xml:space="preserve">
          		<path d="M480,0c154.67-0.065,280.106,125.267,280.172,279.937c0.065,154.669-125.267,280.106-279.937,280.171c-154.669,0.065-280.107-125.267-280.172-279.936c-0.031-74.313,29.475-145.593,82.021-198.142C334.529,29.465,405.747-0.052,480,0z M662.398,97.656C561.474-2.781,398.237-2.385,297.801,98.541s-100.04,264.161,0.886,364.598s264.162,100.04,364.598-0.886c48.136-48.37,75.131-113.851,75.068-182.091C738.375,211.635,711.032,145.935,662.398,97.656z"/>
          		<path d="M623.228,192.816c-10.719,4.63-22.046,7.699-33.637,9.114c12.28-7.125,21.511-18.519,25.934-32.01c-11.703,6.889-24.46,11.801-37.761,14.54c-22.361-23.557-59.585-24.525-83.142-2.164c-11.421,10.841-18.017,25.809-18.312,41.552c0.096,4.421,0.641,8.819,1.628,13.13c-47.016-2.093-90.94-24.017-120.876-60.33c-15.716,26.341-7.754,60.397,18.012,77.039c-9.275-0.107-18.376-2.532-26.476-7.053v0.76c-0.063,7.107,1.302,14.155,4.015,20.725c7.29,18.369,23.377,31.803,42.751,35.698c-5.047,1.435-10.269,2.165-15.517,2.17c-3.652-0.053-7.289-0.489-10.851-1.302c7.822,23.507,29.49,39.628,54.253,40.364c-20.749,15.642-46.064,24.029-72.048,23.871c-4.774,0-9.332,0-14.105-0.759c26.927,16.876,58.064,25.826,89.843,25.824c91.082,1.08,165.794-71.88,166.874-162.961c0.004-0.295,0.007-0.589,0.009-0.883v-7.379C605.295,214.57,615.246,204.435,623.228,192.816z"/>
          </svg>
        </a></li>
        <li><a href="https://www.youtube.com/user/idemomotors/">
          <svg x="0px" y="0px" viewBox="200.063 0 560.108 560.107" enable-background="new 200.063 0 560.108 560.107"
          	 xml:space="preserve">
          		<path d="M480,0c154.67-0.065,280.106,125.267,280.172,279.937c0.065,154.669-125.267,280.106-279.937,280.171c-154.669,0.065-280.107-125.267-280.172-279.936c-0.031-74.313,29.475-145.593,82.021-198.142C334.529,29.465,405.747-0.052,480,0z M662.398,97.656C561.423-2.901,398.05-2.561,297.494,98.414s-100.216,264.35,0.759,364.905c100.975,100.556,264.349,100.216,364.905-0.759c48.236-48.438,75.281-114.039,75.194-182.398C738.375,211.635,711.032,145.935,662.398,97.656z"/>
          		<path d="M620.081,220.376c-1.385-10.607-5.292-20.728-11.393-29.514c-7.548-7.919-17.927-12.523-28.863-12.804c-40.038-2.93-100.042-2.93-100.042-2.93l0,0c0,0-59.787,0-99.826,2.93c-10.863,0.326-21.158,4.927-28.646,12.804c-5.909,8.837-9.628,18.953-10.851,29.514c-1.883,15.955-2.897,32.002-3.038,48.067v22.787c0.125,16.066,1.139,32.113,3.038,48.067c1.246,10.622,4.962,20.804,10.851,29.73c8.603,8.058,19.898,12.623,31.684,12.804c22.786,2.279,97.656,3.039,97.656,3.039s60.004,0,100.042-3.039c10.659-0.488,20.704-5.121,27.995-12.912c6.081-8.877,9.984-19.063,11.393-29.73c1.869-15.922,2.92-31.93,3.146-47.959v-22.787c-0.13-16.06-1.071-32.103-2.82-48.067H620.081z M527.743,276.799l-77.365,41.774v-83.767l35.047,19.098L527.743,276.799z"/>
          </svg>
        </a></li>
      </ul>
      <ul id="address">
        <li>
          <p>
            T. [+34] 93 784 56 07 <br>
            Polígono Industrial Can Petit. <br>
            Camí Font de les Canyes 48. <br>
            c.p. 08227 Terrassa (Barcelona)
          </p>
        </li>
        <li>
          <h4>información general</h4>
          <p>idemo@idemomotors.com</p>
        </li>
        <li>
          <h4>departamento técnico</h4>
          <p>tecnico@idemomotors.com</p>
        </li>
        <li>
          <h4>departamento comercial</h4>
          <p>pedidos@idemomotors.com</p>
        </li>
      </ul>
      <span id="fromSpain">FROM SPAIN</span>
    </footer>
  </aside>
