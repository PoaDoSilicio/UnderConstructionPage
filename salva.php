<?php

$email = $_POST["campo_email"];

$fp = fopen("cadastro.txt", "a+");

$escreve = fwrite($fp, $email.":");
fclose($fp);

echo"<script>window.location='index.html';</script>";

?>