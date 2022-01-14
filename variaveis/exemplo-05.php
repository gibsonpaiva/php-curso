<?php 
$nome = "Gibson";

function teste(){

    global $nome;
    
    echo $nome;
}
function teste2(){
    $nome = "Paiva";
    echo $nome. " agora no teste2";
}

teste();

teste2();

?>