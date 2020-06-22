<?php

$from = "varchartry@gmail.com";
$username = $_POST['username'];
$phone = $_POST['userphone'];
$to = $_POST['usermail'];
$subject = "Formulaire de Contact en ligne";
$msg  = $_POST['message'];

$message = "Bonjour $username

Nous avons bien reçu votre message, NOus revenons vers vous au plus vite.
Recapitulatif de votre formulaire:

Nom : $username
adresse mail : $to
Téléphone : $phone
Message : $msg

Merci de ne pas repondre à ce mail


VarChar Try Team
Rue du Houdain 9,
7000 Mons
+32 65 37 40 30";

mail($to, $subject, $message);

header('Location:contact.php');


?>
