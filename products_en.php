
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
    <?php include "APP/views/parts/header_en.php" ?>
    <!-- Main Header End -->

    <!-- Main Content Start -->
  <section class="flexbox">

    <aside class="category">
      <ul>
        <li class="title">Catégories</li>
        <li class="mark">Adidas</li>
        <li class="mark">Nike</li>
        <li class="mark">Asics</li>
        <li class="mark">Puma</li>
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

  <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
  <script src='PUBLIC/assets/js/jquery.js'></script>
  <script>
      $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
  </script>

</body>

</html>
