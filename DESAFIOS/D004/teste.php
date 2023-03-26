// URL da API do Banco Central
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata';

// Defina a chave de acesso à API
$chave = 'sua-chave-de-acesso';

// Defina os parâmetros da consulta
$parametros = '?$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';

// Crie a URL completa da consulta
$urlConsulta = $url . $parametros . '&$top=100&$orderby=dataHoraCotacao%20desc&$filter=tipoBoletim%20eq%20%27Fechamento%27%20and%20moeda%20eq%20%27USD%27';

// Inicie a conexão com a API
$ch = curl_init($urlConsulta);

// Defina as opções de conexão
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Content-Type: application/json',
  'Authorization: Token ' . $chave
));

// Envie a solicitação e obtenha a resposta
$resposta = curl_exec($ch);

// Analise a resposta em formato JSON
$dados = json_decode($resposta);

// Trabalhe com os dados
foreach ($dados->value as $cotacao) {
  echo 'Compra: ' . $cotacao->cotacaoCompra . '<br>';
  echo 'Venda: ' . $cotacao->cotacaoVenda . '<br>';
  echo 'Data/Hora: ' . $cotacao->dataHoraCotacao . '<br><br>';
}

// Feche a conexão com a API
curl_close($ch);
