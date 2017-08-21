<?php
session_start();


$errors = isset($_SESSION["errors"]) ? $_SESSION["errors"] : [];
$fields = isset($_SESSION["fields"]) ? $_SESSION["fields"] : [];

?>

<!doctype html>

<html>
	<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="Find vores kontor i aarhus og københavn eller kontakt os via eamil">
			<meta name="author" content="lgbt danmark">

			<title>Kontakt</title>

			<link rel="icon" href="images/lgbt-dk-favicon.png" sizes="32x32">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link href="css/main.css" type="text/css" rel="stylesheet">
	</head>
<body>

	<!--side loader-->
	<?php include 'loading.php';
	 echo '<div style="display:none;" id="show-page" class="animate-bottom">';
   include 'navigation.php'; ?>

	<header class="small-header">
			<img class="hero-img" src="images/contact.png" alt="kontakt os">
			<h1>Kontakt</h1>
	</header>

	<main>

    <?php if (!empty($errors)):

      echo '<div class="validation-box alert">
              <i class="fa fa-times" id="modal" aria-hidden="true"></i>
                <ul>
                  <li>'. implode('</li><li>',$errors);
            echo '</li>
              </ul>
          </div>';

  	 endif; ?>

	<section class="col-50 col-height txt-center" id="kontakt-info">

		<h2>Få fat i os</h2>
			<ul class="padding-list">

				<li><i class="fa fa-map-marker topic-contact" aria-hidden="true"></i>Post- og besøgsadresse: Nygade 7, 2., 1164 København K</li>
				<li><i class="fa fa-phone topic-contact" aria-hidden="true"></i>+(45) 33 13 19 48</li>
				<li><i class="fa fa-envelope topic-contact" aria-hidden="true"></i>medlem@lgbt.dk <br> lgbt@lgbt.dk</li>

			</ul>

			<p class="left">Spørgsmål vedrørende dit medlemsskab kan rettes til den sidste adresse.
			<br><br>Er du ikke medlem af LGBT Danmark?</p>
			<br>
			<a href="error.php" class="btn bottom">Bliv medlem</a>

	</section>

	<section class="col-50 col-height txt-center" id="kontakt-form">
		<h2>Send os en mail</h2>

  	<form action="kontakt_send.php"  method="post">

      <p><input type="text" name="name" size="30" placeholder="Dit fulde Navn" <?php echo isset($fields['name']) ? 'value="' . $fields['name'] .'"' : '' ?>></p>

    	<p><input type="text" name="email" size="30" placeholder=" Din Email" <?php echo isset($fields['email']) ? 'value="' . $fields['email'] .'"' : '' ?>></p>

    	<p><textarea rows="10" cols="20" name="message" placeholder="Din Besked..." ><?php echo isset($fields['message']) ? $fields['message'] : '' ?></textarea></p>

    	<input id="submit" type="submit" name="submit" value="Send" class="btn bottom" placeholder="Send">

    </form>

	</section>

    <!--kort-->
  	<section id="map-bg">
  		<h2>Find vores kontor</h2>
  		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2488.927705429768!2d12.57129667166637!3d55.677937956307076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8f8ca2e1fab5ae2c!2sLgbt+Danmark%2C+Landsforeningen+For+B%C3%B8sser%2C+Lesbiske%2C+Biseksuelle+og+Transpersoner!5e0!3m2!1sda!2sdk!4v1494443473165"  id="maps" frameborder="0" allowfullscreen></iframe>
  	</section>

    </main>

    <?php include 'footer.php';
      echo "</div>";
			unset($_SESSION["fields"]);
				unset($_SESSION["errors"]);
    ?>
    <!--side loader content-->
    <!-- script srcs-->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/functions.js"></script>
  </body>
</html>
