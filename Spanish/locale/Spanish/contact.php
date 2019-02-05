<?php
/*---------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002-2011 Nick Jones
| http://www.php-fusion.co.uk/
+----------------------------------------------------+
| Spanish Language Pack - 2011/07/06 - v7.02.03
| Copyright (C) 2007-2011 Javier Esteban y Álvaro Herrero
| http://php-fusion.uni.cc/
+----------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at http://www.gnu.org/licenses/agpl.html. Removal of
| this copyright header is strictly prohibited without
| written permission from the original author(s).
+---------------------------------------------------*/
// Contact Form
$locale['400'] = "Contactar";
$locale['401'] = "Hay varias formas de contactar con ".$settings['sitename'].":<br />
<ul><li>Puedes enviar un email a ".hide_email($settings['siteemail']).".</li>
<li>Si estás registrado, puedes enviar un <a href='messages.php?msg_send=1'>Mensaje Privado</a>.</li>
<li>Y también puedes rellenar el siguiente formulario.</li></ul>";
$locale['402'] = "Tu Nombre:";
$locale['403'] = "Email:";
$locale['404'] = "Asunto:";
$locale['405'] = "Mensaje:";
$locale['406'] = "Enviar";
$locale['407'] = "Código de Validación:";
$locale['408'] = "Introduce el Código de Validación:";
// Contact Errors
$locale['420'] = "Debes indicar tu nombre";
$locale['421'] = "Debes indicar tu dirección de email";
$locale['422'] = "Debes indicar el asunto de tu mensaje";
$locale['423'] = "Debes escribir el texto de tu mensaje";
$locale['424'] = "Debes introducir el codigo de validación correcto";
$locale['425'] = "Error Interno: No se ha podido enviar el mensaje.";
// Message Sent
$locale['440'] = "Tu mensaje ha sido enviado";
$locale['441'] = "Muchas gracias";
$locale['442'] = "Tu mensaje no se ha enviado por lo siguiente:";
$locale['443'] = "Vuelve a intentarlo.";
?>