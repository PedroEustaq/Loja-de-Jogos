<?php

session_start();

$_SESSION["teste"] = "OK";

echo "Session ID: " . session_id() . "<br>";

echo "<pre>";
print_r(headers_list());
echo "</pre>";