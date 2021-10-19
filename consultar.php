<?php

require __DIR__."/vendor/autoload.php";

use \App\WebService\Speedio;

//Nova estancia de speedio

$objSpeedio = new Speedio();

$cnpj = '00000000000191';
// Consulta o CNPJ nas APIS do Speedio
$resultado = $objSpeedio->consultarCNPJ($cnpj);

//VERIFICA O RESULTADO
if(empty($resultado)){
    die('Problemas ao consultar CNPJ');
}
//VERIFICA O ERRO DA REQUISIÇÃO
if(isset($resultado['error'])){
    die($resultado['error']);
}

//IMPRIMI OS DADOS DA CONSULTA  

echo 'Nome Fantasia: '. $resultado['NOME FANTASIA']."<br>\n"; 
echo 'Razão social: '. $resultado['RAZAO SOCIAL']."<br>\n"; 
echo 'Status: '. $resultado['STATUS']."<br>\n"; 
echo 'CNAE descrição: '. $resultado['CNAE PRINCIPAL DESCRICAO']."<br>\n"; 
echo 'CNAE codigo: '. $resultado['CNAE PRINCIPAL CODIGO']."<br>\n";
echo 'CEP: '. $resultado['CEP']."<br>\n"; 
echo 'Data de abetura: '. $resultado['DATA ABERTURA']."<br>\n"; 
echo 'DDD: '. $resultado['DDD']."<br>\n"; 
echo 'Telefone: '. $resultado['TELEFONE']."<br>\n"; 
echo 'Email: '. $resultado['EMAIL']."<br>\n"; 
echo 'Logradouro: '. $resultado['TIPO LOGRADOURO']."<br>\n"; 
echo 'Endereço: '. $resultado['LOGRADOURO']."<br>\n"; 
echo 'Número: '. $resultado['NUMERO']."<br>\n"; 
echo 'Complemento: '. $resultado['COMPLEMENTO']."<br>\n"; 
echo 'Bairro: '.$resultado['BAIRRO']."<br>\n"; 
echo 'Municipio: '. strtoupper($resultado['MUNICIPIO'])."<br>\n"; 
echo 'Estado: '. $resultado['UF']."<br>\n"; 




