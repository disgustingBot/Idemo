<?php include "../head.php"; ?>

<link rel="stylesheet" type="text/css" href="../css/noticias.css">
  <main>

    <h1>noticias idemo</h1>


    <?php include_once '../inc/dbh.inc.php';
      // $qry = "SELECT * FROM news;";
      // $ress = $conn->query($qry);
      // $results_array = $ress->fetch_all(MYSQLI_ASSOC);


      $result = $mysqli->query("SELECT * FROM news");
      while($row=$result->fetch_assoc()){$results_array[]=$row;}


      $j=0;
      for ($i= count($results_array) - 1; $i >= 0; $i--) {if($results_array[$i]["del"]==0){ ?>
      <figure class="noticiaThumbnail">
        <img src="<?php echo $results_array[$i]["img"]; ?>" alt="">
        <figcaption>
          <h4>
            <?php echo $results_array[$i]["ttl"]; ?>
          </h4>
          <p>
            <?php echo $results_array[$i]["asy"]; ?>
          </p>
        </figcaption>
        <a class="button" href="noticia/?pky=<?php echo $results_array[$i]["pky"]; ?>" style="padding:1em 2em;margin:auto;">Leer más</a>
      </figure>
    <?php $j++;if($j>9){break;}}} ?>
  </main>
  <!-- <script type="text/javascript" src="js/noticias.js"></script> -->
</body>
</html>
