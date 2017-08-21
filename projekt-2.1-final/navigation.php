<?php // function to get the current page name
$index = $raa = $pol = $om = $net = $kon = "passive";
$menuLink = basename($_SERVER['PHP_SELF'],".php");
if($menuLink=="index"){
	$index = 'active';
}elseif ($menuLink=="netvaerk") {
	$net = 'active';
}elseif ($menuLink=="raadgivning") {
	$raa = 'active';
}elseif ($menuLink=="politik") {
	$pol = 'active';
}elseif ($menuLink=="om-os") {
	$om = 'active';
}elseif ($menuLink=="kontakt") {
	$kon = 'active';
}
 ?>
<nav>
	<a class="logo-nav-sm tooltip" href="index.php"><aside class="tooltiptext">
		tilbage til forsiden
	</aside><img src="images/lgbt.svg" alt="LGBT danmark logo"></a>

	<!--hamburger menu knap-->
	<a href="javascript:void(0);" class="icon" id="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></a>
	<ul class="topnav" id="myTopnav">
		<li>	<a href="netvaerk.php" class="<?php echo $net; ?>">Netværk</a></li>
		<li>	<a href="raadgivning.php" class="<?php echo $raa; ?>">Rådgivning</a></li>
		<li>	<a href="politik.php" class="<?php echo $pol; ?>">Politik</a></li>
		<li class="hide-sm ">	<a href="index.php" class="logo-nav <?php echo $index; ?>"><img src="images/lgbt.svg" alt="LGBT danmark logo" ></a></li>
		<li>	<a href="om-os.php" class="<?php echo $om; ?>">Om os</a></li>
		<li>	<a href="kontakt.php" class="<?php echo $kon; ?>">Kontakt</a></li>
		<li class="hide-sm ">	<form class="" action="index.html" method="post"><input type="text" name="search" id="search" placeholder="Søg"></form></li>
	</ul>

</nav>
