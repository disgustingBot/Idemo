<?php include "../head.php"; ?>

<link rel="stylesheet" type="text/css" href="../css/noticias.css">
  <main>

    <h1>Noticias Idemo</h1>
    <h2>Subtitulo noticias idemo (A generar)</h2>

    <?php include_once '../inc/dbh.inc.php';
      $qry = "SELECT * FROM news;";
      $ress = $conn->query($qry);
      $resp = $ress->fetch_all(MYSQLI_ASSOC);
      $j=0;
      for ($i= count($resp) - 1; $i >= 0; $i--) {if($resp[$i]["del"]==0){ ?>
      <figure class="noticiaThumbnail">
        <img src="<?php echo $resp[$i]["img"]; ?>" alt="">
        <figcaption>
          <h4>
            <?php echo $resp[$i]["ttl"]; ?>
          </h4>
          <p>
            <?php echo $resp[$i]["asy"]; ?>
          </p>
        </figcaption>
        <a class="button" href="noticia.php?pky=<?php echo $resp[$i]["pky"]; ?>" style="padding:1em 2em;margin:auto;">Leer más</a>
      </figure>
    <?php $j++;if($j>9){break;}}} ?>
  </main>
  <!-- <script type="text/javascript" src="js/noticias.js"></script> -->
</body>
</html>
