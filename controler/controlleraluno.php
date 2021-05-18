<?php
include "../pesquisar.php";

$busca = filter_input(INPUT_POST, "busca", FILTER_SANITIZE_SPECIAL_CHARS);
$pesquisa = new Pesquisa();
$retorno = $pesquisa -> pesquisardb($busca);

echo json_encode($retorno);