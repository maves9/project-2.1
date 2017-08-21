<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="lidt af hvert om livet som bøsse, lesbisk, biseksuel eller transperson">
    <meta name="author" content="lgbt danmark">
				<link rel="icon" href="images/lgbt-dk-favicon.png" sizes="32x32">
	<title>Rådgivning</title>
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
			<img class="hero-img" src="images/reaching-hand.png" alt="En hjælpende hånd der rækker ud">
		<h1>Rådgivning</h1>
</header>

<main>
	<section class="sect-wrapper">
		<article class="col-50" id="raad-intro">
			<h2>Hvad kan vi hjælpe dig med?</h2>
			<p class="col-50">Hos os kan du få en uforpligtende snak om de tanker, du gør dig. Kort sagt lidt af hvert om livet som bøsse, lesbisk, biseksuel eller transperson. Du er velkommen med både stort og småt.</p>
			<ul class="col-50">
				<li>- Spring-ud-problemer</li>
				<li>- Identitet</li>
				<li>- Parforhold</li>
				<li>- Børn og insemination</li>
				<li>- Undervisning</li>
				<li>- Ensomhed</li>
				<li>- Mødesteder</li>
			</ul>
		</article>
	</section>

		<section id="raa-mid" alt="Farvet røg i ørkenen">
			<article class="col-33 flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front light col-100">
						<!-- front content -->
						<img src="images/color-smoke/color-smoke_01.gif" alt="night-sky">
						<h2>København rådgivning</h2>
					</div>
					<div class="back col-100">
						<!-- back content -->
						<address>
							<p>Nygade 7, 2. sal, 1164 København K</p>
							<p><i class="fa fa-phone" aria-hidden="true"></i>33 13 19 48</p>
							<p>(torsdage 18-20)</p>
							<br>
							<a href="tel:+4533131948" class="light" href="#">Ring nu</a>
						</address>
					</div>
				</article>

				<article class="col-33 flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="flipper">
						<div class="front light col-100">
							<!-- front content -->
							<img src="images/color-smoke/color-smoke_02.gif" alt="night-sky">
							<h2>Aarhus rådgivning</h2>
						</div>
						<div class="back col-100">
							<!-- back content -->
							<address>
								<p>Mejlgade 71 (Café Sappho) 8000 Århus C</p>
								<p><i class="fa fa-phone" aria-hidden="true"></i>86 13 19 48</p>
								<p><i class="fa fa-phone" aria-hidden="true"></i>22 30 19 48</p>
								<p>(torsdage 18-20)</p>
								<br>
								<a href="tel:+4586131948" class="light" href="#">Ring nu</a>
							</address>
						</div>
					</article>

					<article class="col-33 flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front light col-100">
								<!-- front content -->
								<img src="images/color-smoke/color-smoke_01.gif" alt="night-sky">
								<h2>Ungdomstelefonen</h2>
							</div>
							<div class="back col-100">
								<!-- back content -->
								<address class="">
									<p>Ungdomstelefonens hjemmeside</p>
									<p><i class="fa fa-phone" aria-hidden="true"></i>33 36 00 80</p>
									<p>(torsdage 19-21)</p>
									<br>
									<a href="tel:+4533360080" class="light" href="#">Ring nu</a>
								</address>
							</div>
						</article>
		</section>

	<section id="raad-info">
		<ul class="col-100">
			<li class="col-50">
				<div>
					<h3>Om rådgivning</h3>
					<p>Vi mener at alle mennesker har behov for og ret til et lige møde. Vi har alle erfaring med problemstillinger, der vedrører seksuel- og kønsidentitet. </p>
					<a class="btn" href="error.php">Rådgiverne</a>
				</div>
			</li>
			<li class="col-50">
					<div>
						<h3>Seksualundervisning For Alle</h3>
						<p>Skal jeg også være out, loud n proud? Hvilken prævention skal jeg bruge? Der findes uendeligt mange spørgsmål, men hvordan skal de besvares? </p>
						<a class="btn" href="seksualundervisning.php">Find ud af hvordan</a>
					</div>
			</li>
						<li class="col-50">
							<div>
								<h3>Lær begreberne</h3>
								<p>Du behøver ikke lade et ord definere dig, men for nogle er det bare nemmest sådan.</p>
								<a class="btn" href="error.php">Åbn ordbogen</a>
								<a class="btn" href="images/lgbt-alfabet.png">LGBT alfabet</a>
								</div>
						</li>
						<li class="col-50">
							<div>
								<h3>Andre rådgivningskilder</h3>
								<p>Vi vil meget gerne hjælpe dig, men du kan også finde hjælp andre steder.</p>
								<a class="btn" href="error.php">Andet rådgivning</a>
							</div>
						</li>
					</ul>
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
