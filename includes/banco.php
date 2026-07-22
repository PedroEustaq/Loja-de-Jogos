<pre>
<?php 


$host = "db.jbyaibzsiccvlwlpdtsa.supabase.co";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "8Ozg1O05KHrnht92";

$conn = pg_connect("
    host=$host
    port=$port
    dbname=$dbname
    user=$user
    password=$password
");

if (!$conn) {
    die("Erro na conexão.");
}

$busca = pg_query($conn, "SELECT * FROM generos");

if (!$busca) {
    echo "Falha na busca";
} else {

    

}

function thumb($arq)
{
    $caminho = "fotos/$arq";

    if (is_null($arq) || !file_exists($caminho)) {
        return "fotos/indisponivel.png";
    }

    return $caminho;
}
?>
</pre>