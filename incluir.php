<?php
    include 'db.php';
    if (isset($_POST['enviar'])){

        $titulo = $_POST['titulo'];
        $sql = "INSERT INTO tarefas (titulo_tarefa) VALUES ('$titulo')";
        $incluiu = $db->query($sql);
        if ($incluiu){
            header('location: index.php');
        }
    }
?>