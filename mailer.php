<?php
function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}
$to      = 'mail.destinataire@votredomaine.fr'; //Vos adresses de test
$subject = 'Un nouveau pack pour vous !';
$message = get_include_contents('index.html');
$headers = "From: \"votre nom\"<votre.mail@votredomaine.fr>\n"; //Taper ici votre adresse mail
$headers .= "Reply-To: votre.mail@votredomaine.fr\n";     //Pareil !!
$headers .= "Content-Type: text/html; charset=\"utf-8\"";
mail($to, $subject, $message, $headers);
