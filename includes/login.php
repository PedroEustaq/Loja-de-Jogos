<?php 
session_start();


if (!isset($_SESSION['user'])) {
$_SESSION['user']= "";
$_SESSION['nome']= "";
$_SESSION['tipo']= "";
}



function gerarHesh($senha) {
    $txt = cripto($senha);
    $hash = password_hash($txt, PASSWORD_DEFAULT);
    return $hash;
}

function testarHesh($senha, $hash) {

$ok = password_verify(cripto($senha),$hash);
return $ok;

}

//echo gerarHesh("admin");
//echo testarHesh("admin",'$2y$10$thJm6/DG6BpCyJWJPQk1vu59IKlpw4p8CHSMZLMsDo9Vv.hKfWfjq');


function cripto($senha) {
    $c = '';
    for($pos = 0; $pos < strlen($senha); $pos++) {
        $letra = ord($senha[$pos]) + 1;
        $c .= chr($letra);
    }
    return $c;
}

function logout() {
    unset($_SESSION['user']);
    unset($_SESSION['nome']);
    unset($_SESSION['tipo']);
}

function isLogado()  {
    if(empty($_SESSION['user'])) {
        return false;
    } else {
        return true;
    }
}

function isAdmin() {
    $t = $_SESSION['tipo'] ?? null;
    if (is_null($t)) {
        return false;
    } else {
        if ($t == 'admin') {
            return true;
        } else {
            return false;
        }
    }
}

function isEditor() {
    $t = $_SESSION['tipo'] ?? null;
    if (is_null($t)) {
        return false;
    } else {
        if ($t == 'editor') {
            return true;
        } else {
            return false;
        }
    }
}
?>