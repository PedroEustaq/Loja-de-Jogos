<?php

if (headers_sent($arquivo, $linha)) {
    die("Saída enviada por: $arquivo (linha $linha)");
}

require_once __DIR__ . "/banco.php";

session_start();