<?php
$destino = 'rorro.toma@gmail.com';
$asunto = $_POST['asunto'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['mensaje'];
$header = 'Enviado desde la pagina del portfolio el: ' . date('d/m/y', time());
$messageCompleto = $message . "\nAtentamente: " . $name . ' desde el correo: ' . $email;
mail($destino,$asunto,$messageCompleto,$header);
header("Location:index.html");
?>