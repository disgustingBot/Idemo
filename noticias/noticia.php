<?php include "../head.php"; ?>

<link rel="stylesheet" type="text/css" href="../css/noticia.css">

<main>

  <?php include_once '../inc/dbh.inc.php';
    $pky = $_GET["pky"];
    $qry = "SELECT * FROM news WHERE pky = $pky;";
    $ress = $conn->query($qry);
    $resp = $ress->fetch_all(MYSQLI_ASSOC);

    
    ?>

    <figure id="aboveTheFold">
      <img id="noticiaImg" src="<?php echo $resp[0]["img"]; ?>" alt="">
      <figcaption id="titleContainer">
        <h1 id="title"><?php echo $resp[0]["ttl"]; ?></h1>
      </figcaption>
    </figure>
    <p id="NoticiaBody"><?php echo $resp[0]["cnt"]; ?></p>

</main>
