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
  </style>
  <main>
    <?php if (!isset($_SESSION['pky'])) { ?>
      <form action="../inc/login.inc.php" method="POST" id="form">
        <input type="text"     placeholder="user" name="uid">
        <input type="password" placeholder="pass" name="pwd">
        <button type="submit" name="submit">Entrar!</button>
      </form>
    <?php } else if ($_SESSION['pky'] == 1){ ?>
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
      $qry = "SELECT * FROM news;";
      $ress = $conn->query($qry);
      $resp = $ress->fetch_all(MYSQLI_ASSOC);

      for ($i= count($resp) - 1; $i >= 0; $i--) { ?>
        <!-- echo $resp[$i]["ttl"]; -->
        <form action="../inc/editNews.inc.php" method="POST" class="noticia">
          <input    name="pky" hidden type="text" value="<?php echo $resp[$i]["pky"]; ?>">
          <textarea name="ttl" placeholder="Titulo"        id="" cols="30" rows="1" ><?php echo $resp[$i]["ttl"]; ?></textarea>
          <img src="<?php echo $resp[$i]["img"]; ?>" alt="">
          <textarea name="img" placeholder="URL de Imagen" id="" cols="30" rows="1" ><?php echo $resp[$i]["img"]; ?></textarea>
          <textarea name="fch" placeholder="Fecha"         id="" cols="30" rows="1" ><?php echo $resp[$i]["fch"]; ?></textarea>
          <textarea name="cnt" placeholder="Contenido"     id="" cols="30" rows="10"><?php echo $resp[$i]["cnt"]; ?></textarea>
          <textarea name="asy" placeholder="Resumen"       id="" cols="30" rows="10"><?php echo $resp[$i]["asy"]; ?></textarea>
          <label for="del">
            <p>Eliminar:</p>
            <input name="del" placeholder="Titulo" type="checkbox" <?php if($resp[$i]["del"]==1){echo "checked";} ?> style="margin-right:auto;">
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
