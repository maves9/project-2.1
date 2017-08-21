<?php
session_start();

$errors = [];
$fields = [
  'name' => $_POST['name'],
  'email' => $_POST['email'],
  'message' => $_POST['message']
];

if(empty($_POST) === false){


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

  if(empty($name) === true || empty($email) === true || empty($message) === true){
    $errors[] = 'Dit fulde navn, email og besked er påkrævet';
  	}else{
    //email filter
    if(utf8_encode(filter_var($email, FILTER_VALIDATE_EMAIL)) === false){
      $errors[] = 'Din e-mail er ikke gyldig';
    }
		if(strpos($name, ' ') == 0){
			$errors[] = 'Udfyld dit fulde navn med mellemrum imellem ';
		}
    // navn i bokstaver
 			if (is_numeric($name) === true) {
     $errors[] = 'Dit navn skal være i bokstaver';
   }
  }

  if (empty($errors)) {
    //beskedens indhold
    $to = "mvmartinxd@gmail.com";
    $subject = 'Formularbesked fra: "' .$name.'"' ;
		$headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n".
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers, "From: " . $name); // send mailens indhold
		header('Location: kontakt-tak.php'); //efter send retuneres tilbage til siden
    exit();
  }

}else {
  $errors = 'Noget gik galt';
}

$_SESSION["fields"] = $fields;
$_SESSION["errors"] = $errors;
header('Location: kontakt.php'); //efter send retuneres tilbage til siden
?>	