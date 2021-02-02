<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */

$from = 'harley@outlook.fr';
$to = 'chalie@outlook.fr';

// TODO Votre code ici.
//$message = 'Hello World, sending a simple mail !';
$headers = array (
    'Reply-To' => $from,
    'X-mailer' => 'PHP/' . phpversion()
);
//
//mail($to, 'essai', $message, $headers, "-f $from");

/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.

$message = "Mon message de 120 caractères, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo 
ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.";

$message = wordwrap($message, 70, "\r\n");

$sucess = mail($to, 'essai', $message, $headers, "-f $from");
if($sucess){
    echo 'Le message a bien été envoyé. Merci !';
}
else {
    echo 'Une erreur est survenue lors de l\'envoi du mail';
}
