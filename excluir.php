<?php
    include 'db.php';
    $id = (int)$_GET['id'];

    $sql = "DELETE FROM tarefas WHERE id_tarefa = '$id'";
    $excluiu = $db->query($sql);

    if ($excluiu){
        header('location: index.php');
    }
?>