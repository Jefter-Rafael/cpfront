<?php

function create($name)
{
    // Nome do arquivo a ser criado
    $arquivo = '../'.$name . ".json";
    // Texto a ser escrito no arquivo
    $texto =
        file_get_contents('https://cpback.agreablecode.com/api/' . $name);
    // Cria o arquivo ou abre para escrita (modo "w")
    $handle = fopen($arquivo, "w");
    // Escreve o texto no arquivo
    fwrite($handle, $texto);
    // Fecha o arquivo
    fclose($handle);
}
$array = ['gpu','memory','powersuply','ssds','processorInfo','motherboard', 'processors', 'cases'];
foreach ($array as $key => $value) {
    create($value);
}

?>