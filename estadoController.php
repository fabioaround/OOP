<?php 

require 'conexaoMySql.class.php';  //volta uma pasta na estrutura de pastas
require 'estado.class.php';

$conexao = new Conexao();
$conexao->conectar();
$conexao->selecionarBD();

$estado = new Estado();

// insere novo estado
// busca cidades daquele estado inserido
if(!empty($_POST['nm_estado'])){
$estado->cria($_POST['nm_estado']);
//$list_cidades = $estado->lista_cidades($_POST['nm_estado']);
}

$list_cidades = $estado->lista_cidades($_POST['nm_estado']);

// mostra a lista dos estados
$list_estado = $estado->listaEstado();

//fecha conexao
$conexao->fechar($conexao);

header(header("Location: index.php"))

?>

