
<?php include "CORE/connexion.php";
?>
<?php include "APP/debug.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>CyCorp</title>
<link rel="icon" type="image/png" href="assets/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="PUBLIC/assets/css/styles.css" />
<link rel="stylesheet" type="text/css" href="PUBLIC/libary/reset.css" />
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>

  <!-- Main Start -->
  <div class="main">

    <!-- Main Header Start -->
    <?php include "APP/views/parts/header.php" ?>
    <!-- Main Header End -->


    <!-- Main Content Start -->
  <section class="flexbox">

    <aside class="category">
      <ul>
        <li class="title">Catégories</li>
        <li class="mark"><a href="adidas.php" class="marka">Adidas</li></a>
        <li class="mark"><a href="nike.php" class="marka">Nike</li></a>
        <li class="mark"><a href="asics.php" class="marka">Asics</li></a>
        <li class="mark"><a href="puma.php" class="marka">Puma</li></a>
      </ul>
    </aside>

    <article class="onceupon">

    <?php include 'APP/models/getimage.php';?>
    <div class="princess">

        <?php
          while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
          {
        ?>

          <figure class="piece"><img src="<?php echo $donnees['basket_image']; ?>" alt="">
          <figcaption class="legende"><p><?php echo $donnees['basket_mark']; ?></p></figcaption>
          <figcaption><p><?php echo $donnees['basket_genre']; ?></p></figcaption>
          <figcaption><p><?php echo $donnees['basket_name']; ?></p></figcaption>
          </figure>
        <?php
          }
        ?>

      </div>

    </article>

</section>

    <!-- Main Content End -->

    <!-- Content Footer Start -->
    <?php include "APP/views/parts/footer.php" ?>
    <!-- Content Footer End -->

  </div>
	<!-- Main End -->

</body>

</html>
