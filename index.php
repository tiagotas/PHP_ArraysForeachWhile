<?php

//  i | value
// [0] Joao 
// [1] José 
// [2] Maria 
// [3] Joana 

$lista_nome = array("Joao", "José", "Maria", "Joana");

//reset($lista_nome);

$lista_nome_copy = array_reverse($lista_nome);

while(key($lista_nome_copy) !== null) {

    echo "Olá, " . current($lista_nome_copy) . "<br />";
    
    next($lista_nome_copy);
}

echo "<hr />";


foreach($lista_nome as $nome) {

    echo "Olá, " . $nome . "<br />";
}