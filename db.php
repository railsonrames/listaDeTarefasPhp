<?php
    $db = new Mysqli;
    $db->connect('localhost','root','','lista_de_tarefas');
    if (!$db){
        echo "falha ao conectar ao banco";
    }
?>