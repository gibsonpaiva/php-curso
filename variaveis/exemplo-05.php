<?php
$nome = "Gibson";

function teste() {
    global $nome;
    echo $nome;

}

function teste2(){
      $nome = "Giulia";
      echo $nome. " Agora no teste2";

}

teste();
teste2();
 ?>
