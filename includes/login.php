<?php


require_once "banco.php";


function autenticar($usuario, $senha)
{
    global $conn;

    $sql = "SELECT usuario, nome, senha, tipo
            FROM usuario
            WHERE usuario = $1
            LIMIT 1";

    $resultado = pg_query_params($conn, $sql, [$usuario]);

    if (!$resultado || pg_num_rows($resultado) == 0) {
        return false;
    }

    $dados = pg_fetch_assoc($resultado);

    if (!password_verify($senha, $dados["senha"])) {
        return false;
    }

    session_regenerate_id(true);

    $_SESSION["usuario"] = $dados["usuario"];
    $_SESSION["nome"] = $dados["nome"];
    $_SESSION["tipo"] = $dados["tipo"];

    return true;
}