<?php include "../../head.php"; ?>

<link rel="stylesheet" type="text/css" href="/css/noticia.css">

<main>

  <?php include "../../inc/dbh.inc.php";
    $pky = $_GET["pky"];
    // $qry = "SELECT * FROM news WHERE pky = $pky;";
    // $ress = $conn->query($qry);
    // $results_array = $ress->fetch_all(MYSQLI_ASSOC);


          $result = $mysqli->query("SELECT * FROM news WHERE pky = $pky");
          while($row=$result->fetch_assoc()){$results_array[]=$row;}
    ?>

    <figure id="aboveTheFold">
      <img id="noticiaImg" src="<?php echo $results_array[0]["img"]; ?>" alt="">
      <figcaption id="titleContainer">
        <h1 id="title"><?php echo $results_array[0]["ttl"]; ?></h1>
      </figcaption>
    </figure>
    <p id="NoticiaBody"><?php echo $results_array[0]["cnt"]; ?></p>

</main>
