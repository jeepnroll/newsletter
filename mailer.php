<?php
function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}
$to      = 'brunet.jph@gmail.com, jeanphilippe.imm@gmail.com, pistacia@hotmail.com, jean-philippe@cj-prod.fr'; //Vos adresses de test
$subject = 'Un nouveau pack pour vous !';
$message = get_include_contents('index.html');
$headers = "From: \"Star Wars SteamPunk World\"<info@cj-prod.fr>\n"; //Taper ici votre adresse mail
$headers .= "Reply-To: info@cj-prod.fr\n";     //Pareil !!
$headers .= "Content-Type: text/html; charset=\"utf-8\"";
mail($to, $subject, $message, $headers);
