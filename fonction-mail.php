	<meta charset="UTF-8" />


	<!-- Fonction qui permet d'envoyer le mail à l'adresse de Karin Frauenfeld   -->
	
	<?php
	
	     $to      = 'alexander-pantoja@hotmail.fr';
	     $subject = $_POST["sujet"];
	     $message = $_POST["first_name"]."\r\n".$_POST["comment"]."\r\n". 'Numéro de télèphone :'.$_POST["phone"];
	     $headers = 'From:'. $_POST["email"] . "\r\n" .
	     'Reply-To: webmaster@example.com' . "\r\n" .
	     'X-Mailer: PHP/' . phpversion();
	
	     mail($to, $subject, $message, $headers);
	 ?>
	



	 <?php wp_redirect( 'http://kfsolution.ch/contact' ); exit; ?>





