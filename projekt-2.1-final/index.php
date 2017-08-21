<!doctype html>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="Cache-control" content="public, max-age=31536000">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Vi er en interesseorganisation, der kæmper for lige rettigheder mellem alle kønsidentiteter og seksuelle orienteringer">
	<meta name="author" content="LGBT Danmark">
			<link rel="icon" href="images/lgbt-dk-favicon.png" sizes="32x32">
		<title>LGBT Danmark</title>
		<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/main.css" type="text/css" rel="stylesheet">
</head>
<body>

<!--side loader-->
	<?php include 'loading.php'; ?>
<!--side loader content-->
<div style="display:none;" id="show-page" class="animate-bottom">

	<!--navigations baren-->
<?php include 'navigation.php'; ?>

<!--hero picture-->
<header id="home-header">
	<img class="hero-img" src="images/lgbt-home.png" alt="Kvinder med farvet røg i baggrunden smiler" >
	<div>
		<h1>lgbt danmark</h1>
		<p>Landsforeningen for bøsser, lesbiske, biseksuelle og transpersoner</p>
		<a href="error.php" class="btn">LGBT Ungdom</a>
	</div>

	<!--Some links-->
	<ul id="some">
		<!--Facebook-->
		<li><a target="_blank" href="https://www.facebook.com/LGBTDanmark"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<!--twitter-->
		<li><a target="_blank" href="https://twitter.com/lgbtdk"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<!--linkedin-->
		<li><a target="_blank" href="https://www.linkedin.com/company/lgbt-denmark-the-danish-national-organisation-for-gay-men-lesbians-bisexuals-and-transgenders?trk=prof-vol_exp-org_name"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		<!--instagram-->
		<li><a target="_blank" href="https://www.instagram.com/mdu_projekt_2.1/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
	</ul>

</header>

<main id="home">

<section class="sect-wrapper padding-sm">
	<div class="col-33 sect-btn dark">
		<a href="politik.php"><i class="fa fa-university" aria-hidden="true"></i>Politik &amp; rettigheder</a>
	</div>
	<div class="col-33 sect-btn light">
		<a href="raadgivning.php" ><i class="fa fa-phone" aria-hidden="true"></i>Vejledning  &amp; rådgivning</a>
	</div>
	<div class="col-33 sect-btn dark">
		<a href="netvaerk.php"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Aktiviteter  &amp; netværk</a>
	</div>
</section>

	<section id="support-sect">
		<article class="col-33 support">
			<div class="bg-1">
				<h2>Skab forbedringer</h2>
				<p>Har du lyst til at engagere dig i vores arbejde og give en hjælpende hånd. Så har du her muligheden.</p>
				<a class="btn" href="error.php">Bliv frivillig</a>
			</div>
		</article>

		<article class="col-33 support">
			<div class="bg-2">
				<h2>Få indflydelse</h2>
				<p>Du kan få indvirkning på LGBT Danmarks arbejde med et fælles mål om et samfund hvor alle er lige.</p>
				<a class="btn" href="error.php">Støt os</a>
			</div>
		</article>

		<article class="col-33 support ">
			<div class="bg-3">
				<h2>Støt mangfoldigheden</h2>
				<p>Ved at støtte LGBT Danmark støtter du kampen for bedre levevilkår og for frihed til at være den man er.</p>
				<a class="btn" href="error.php">Bliv medlem</a>
			</div>
		</article>

	</section>

	<section class="sect-wrapper sect-bottom" id="school" >
	<img src="images/libray.png" alt="En række bøger er stillet op" >
			<article>
				<h2>Børn fortjener seksualundervisning for alle</h2>
				<p>Det kan være svært at bryde tavsheden, men vi er her for at hjælpe dig. Seksualundervisning For Alle er en hjælp til skoler og institutioner.</p>
				<a class="btn" href="seksualundervisning.php">Bryd tavsheden</a>
			</article>
	</section>
</main>

<section id="index-bot">
	<ul class="col-100">
			<li class="col-50"><a class="dark" href="error.php"><h3>Læs artikler</h3></a></li>
			<li class="col-50"><a class="dark" href="error.php"><h3>Se events</h3></a></li>
	</ul>
</section>

<?php include 'footer.php'; ?>

<!--side loader content-->
</div>
<aside id="standby">
	<a type="button" class="btn" name="button">Bryd tavsheden</a>
</aside>
<aside id="modal-box">
	<button id="close-modal">X</button>
	<span id="modal-text">
		<p>Børn fortjener seksualundervisning for alle</p>
		<br>
		<p>Det kan være svært at bryde tavsheden, men vi er her for at hjælpe dig. Seksualundervisning For Alle er en hjælp til skoler og institutioner.</p>
		<br>
		<a class="btn" href="seksualundervisning.php">Bryd tavsheden</a>
	</span>
</aside>
<script>
(function(h,e,a,t,m,p) {
m=e.createElement(a);m.async=!0;m.src=t;
p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
})(window,document,'script','https://u.heatmap.it/log.js');
</script>
<!--JavaScript source-->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>
