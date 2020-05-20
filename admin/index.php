<?php include "../head.php"; ?>
<!-- <link rel="stylesheet" type="text/css" href="admin.css"> -->
  <style>
    form{
      width: 300px;
      margin: auto;
      margin-top: 200px;
    }
    button {
      width: 150px;
      margin: auto;
    }


    #title{
      margin: auto;
      padding-bottom: 40px;
    }
    #mainForm{
      width: 80%;
      margin-top: 0;
    }

    list {
      margin: 100px 0;
    }
    list h2 {
      padding: 40px 0;
    }
    .noticia {
      margin-top: 20px;
      width: 70%;
    }
    .noticia label{
      display:flex;
    }
    .noticia label p{
      line-height: 35px;
      margin: auto;
      margin-right: 20px;
      display: inline-flex;
    }
    .noticia img {
      width: 100%;
    }


    #logOut{
      margin: 16px;
      margin-left: auto;
      width: 100px;
    }
    #logOut button{
      width: 100px;
    }

    .logErrors{
      background:black;
      border-radius:0 0 8px 8px;
      color:white;
      left:50%;
      padding:1rem 2rem;
      padding-right:3rem;
      position:fixed;
      top:-6rem;
      transition:.4s;
      transform:translateX(-50%);
      z-index:30;
    }
    .logErrors.alt{top:0}
    .logErrors p{color:inherit;}
    .logErrors .logFormCloseLine{background:white;}
    .logErrors .logFormClose {
      width:20px;
      height:20px;
      margin:.3rem;
    }

    .logFormClose{
      position: absolute;
      top:0;
      right:.5rem;
      height:30px;
      width: 30px;
      background: none;
      border:none;
      cursor:pointer;
    }

    .logFormCloseLine{
      position: absolute;
      top:50%;
      left:0;
      width:100%;
      height:2px;
      background:black;
      transition:.3s;
      transform:rotate(45deg);
    }
    .logFormCloseLine:first-child{transform:rotate(-45deg);}
    .logFormClose:hover .logFormCloseLine{background:var(--color1)}
  </style>
  <main>



      <?php $errores = array('imageError', 'success'); ?>
      <div id="logErrors" class="logErrors <?php if (in_array($_GET['newNews'], $errores)) { echo 'alt'; } ?>">
        <?php if ( $_GET['newNews'] == 'imageError' ) { ?>
          <p>Error al subir imagen</p>
        <?php } ?>
        <?php if ( $_GET['newNews'] == 'success' ) { ?>
          <p>Noticia subida con exito</p>
        <?php } ?>
        <button class="logFormClose" type="button" onclick="altClassFromSelector('alt','#logErrors')">
          <div class="logFormCloseLine"></div>
          <div class="logFormCloseLine"></div>
        </button>
      </div>


    <?php if (!isset($_SESSION['pky'])) { ?>
      <form action="../inc/login.inc.php" method="POST" id="form">
        <input type="text"     placeholder="user" name="uid">
        <input type="password" placeholder="pass" name="pwd">
        <button type="submit" name="submit">Entrar!</button>
      </form>
    <?php } else if ($_SESSION['pky'] == 1){


            # Fill our vars and run on cli
      # $ php -f db-connect-test.php
      $dbname = 'idemomot_news';
      $dbuser = 'idemomot_Usr2019';
      $dbpass = 'pVBxBkRp0HPbn8Qz';
      $dbhost = '76.74.235.160';
      // $dbname = 'idemomot_wordpress';
      // $dbuser = 'idemomot_user';
      // $dbpass = 'FTs6G73Gv2';
      // $dbhost = 'localhost';






    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);





       ?>
      <form action="../inc/logout.inc.php" method="POST" id="logOut">
        <button type="submit" name="submit">Salir</button>
      </form>
      <h1 id="title">Formulario de entrada de noticias</h1>
      <form enctype="multipart/form-data" action="../inc/newNews.inc.php" method="POST" id="mainForm">
        <input    name="ttl" placeholder="Titulo"           type="text">
        <!-- <input    name="img" placeholder="URL de la imagen" type="text"> -->



        <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
        <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
        <input name="fl" type="file" />




        <input    name="fch" placeholder="Fecha"            type="date">
        <textarea name="cnt" placeholder="Contenido" id="" cols="30" rows="10"></textarea>
        <textarea name="asy" placeholder="Resumen"   id="" cols="30" rows="10"></textarea>
        <button type="submit" name="submit">Nueva Noticia!</button>
      </form>
      <list>
        <h2>Noticias viejas</h2>
    <?php include_once '../inc/dbh.inc.php';

      $result = $mysqli->query("SELECT * FROM news");
      while($row=$result->fetch_assoc()){$results_array[]=$row;}

      // Esta version andaba localmente pero no en el servidor de ellos
      // $qry = "SELECT * FROM news;";
      // $ress = $conn->query($qry);
      // $resp = $ress->fetch_all(MYSQLI_ASSOC);


      for ($i= count($results_array) - 1; $i >= 0; $i--) { ?>
        <!-- echo $results_array[$i]["ttl"]; -->
        <form action="../inc/editNews.inc.php" method="POST" class="noticia">
          <input    name="pky" hidden type="text" value="<?php echo $results_array[$i]["pky"]; ?>">
          <textarea name="ttl" placeholder="Titulo"        id="" cols="30" rows="1" ><?php echo $results_array[$i]["ttl"]; ?></textarea>
          <img src="<?php echo $results_array[$i]["img"]; ?>" alt="">


          <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
          <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
          <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
          <input name="fl" type="file" />


          <!-- <textarea name="img" placeholder="URL de Imagen" id="" cols="30" rows="1" ><?php echo $results_array[$i]["img"]; ?></textarea> -->
          <textarea name="fch" placeholder="Fecha"         id="" cols="30" rows="1" ><?php echo $results_array[$i]["fch"]; ?></textarea>
          <textarea name="cnt" placeholder="Contenido"     id="" cols="30" rows="10"><?php echo $results_array[$i]["cnt"]; ?></textarea>
          <textarea name="asy" placeholder="Resumen"       id="" cols="30" rows="10"><?php echo $results_array[$i]["asy"]; ?></textarea>
          <label for="del">
            <p>Eliminar:</p>
            <input name="del" placeholder="Titulo" type="checkbox" <?php if($results_array[$i]["del"]==1){echo "checked";} ?> style="margin-right:auto;">
          </label>
          <button type="submit" name="submit">Actualizar Cambios</button>
        </form>

      <?php } ?>
      </list>
    <?php }
    ?>
  </main>
  <!-- <script type="text/javascript" src="../js/admin.js"></script> -->
</body>
</html>
