<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="er du lgbt person kan vi hjælpe dig med at skabe et netværk gennem vores forskellige netværks grupper">
    <meta name="author" content="lgbt danmark">
		<link rel="icon" href="images/lgbt-dk-favicon.png" sizes="32x32">
	<title>Netværk</title>
			<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/main.css" type="text/css" rel="stylesheet">
</head>
<body>

<!--side loader-->
<?php include 'loading.php'; ?>
<!--side loader content-->
<div style="display:none;" id="show-page" class="animate-bottom">

<?php include 'navigation.php'; ?>

<header class="small-header">
			<img class="hero-img" src="images/fire-at-the-beach.png" alt="En gruppe mennesker på stranden i godt selskab med hinanden">
		<h1>Netværk</h1>
</header>



<main id="network">
		<p id="scoll-down" class="dark">Se hvor du hører til <i class="fa fa-arrow-down" aria-hidden="true"></i></p>

		<button type="button" id="topbtn" name="button"><i class="fa fa-arrow-up" aria-hidden="true"></i>Tilbage til toppen</button>

		<section class="sect-wrapper" id="story">

		<article class="col-100 hide" id="sectionOne">
			<img src="images/for-men2.png" alt="Mand i jakkesæt kigger til siden">
			<div class="col-50">
				<h4>for mænd</h4>
				<p>Hvis du som mand har brug for eller lyst til at tale med andre GBT-mænd, hjælper vi dig gerne med at skabe et netværk gennem Mandegruppen.</p>
				<br>
					<a href="error.php">Mandegruppen</a>
			</div>
		</article>

		<svg class="arrow">
			<path fill="none" stroke-width="5" id="arrowOne" d="M150,0  L0,150"></path>
		</svg>

		<article class="col-100 hide" id="sectionTwo">
				<img src="images/for-woman2.png" alt="Kvinde på stranden med solbriller kigger til siden">
			<div class="col-50">
				<h4>for kvinder</h4>
				<p>Vi har flere netværksgrupper for kvinder.
Her kan du møde andre kvinder til socialt samvær og gode oplevelser i behagelige og trygge omgivelser.</p>
<br>
					<a href="error.php">Kvindegrupper</a>
			</div>
		</article>

		<svg class="arrow">
			<path fill="none" stroke-width="5" id="arrowTwo" d="M0,0  L150,150"></path>
		</svg>


		<article class="col-100 hide " id="sectionThree">
										<img src="images/for-bi.png" alt="Biseksuel kvinde kigger over sin højre skulder">

			<div class="col-50">
				<h4>for biseksuelle</h4>
				<p>Ved møderne i bigruppen drikker vi en kop kaffe eller te og snakker åbent om det at være bi. Du kan komme og deltage i snakken eller bare lytte. </p>
				<br>
					<a href="error.php">Bi-grupper</a>
			</div>
		</article>

		<svg class="arrow">
			<path fill="none" stroke-width="5" id="arrowThree" d="M150,0  L0,150"></path>
		</svg>

		<article class="col-100 hide" id="sectionFour">
							<img src="images/sun-dusk2.png" alt="Transkønnet kvinder med briller kigger til siden med et grin">

			<div class="col-50">
				<h4>for transseksuelle</h4>
				<p>T-gruppen består faktisk både af transkønnede og transvestitter og generelt mennesker, der sætter spørgsmålstegn ved deres medfødte køn.</p>
				<br>
					<a href="error.php">T-grupper</a>
			</div>
		</article>

	</section>
</main>



<?php include 'footer.php'; ?>

<!--side loader content-->
</div>

<!-- script srcs-->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/functions.js"></script>
</body>
</html>
