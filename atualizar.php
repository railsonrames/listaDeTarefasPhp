<!DOCTYPE html>
<html lang="pt-BR">

<?php

include 'db.php';

$id = (int)$_GET['id'];
// var_dump($id);
$sql = "select * from tarefas where id_tarefa='$id'";
// var_dump($sql);
$registros = $db->query($sql);
$registro = $registros->fetch_assoc();
// var_dump($registro);
if(isset($_POST['enviar'])){
    $titulo = htmlspecialchars($_POST['titulo']);
    $sql_update = "update tarefas set titulo_tarefa='$titulo' where id_tarefa='$id'";
    $db->query($sql_update);
    header('location: index.php');
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Lista de tarefas</title>
</head>

<body>
    <div class="container">
        <center>
            <h1>Atualizar tarefa</h1>
        </center>
        <div class="row" style="margin-top: 70px;">
            <div class="col-md-10 col-md-offset-1">
                <hr>
                <br>
                <form method="post">
                    <div class="form-group">
                        <label>Título da tarefa</label>
                        <input type="text" required name="titulo" value="<?php echo $registro['titulo_tarefa']; ?>"
                            class="form-control">
                    </div>
                    <input type="submit" name="enviar" value="Salvar" class="btn btn-success">
                    <a href="index.php" class="btn btn-default">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>