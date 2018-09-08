<!DOCTYPE html>
<html lang="pt-BR">

<?php

include 'db.php';

$texto = htmlspecialchars($_POST['pesquisa']);
$sql = "SELECT * FROM tarefas WHERE titulo_tarefa LIKE '%$texto%'";
$registros = $db->query($sql);

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
            <h1>Lista de tarefas</h1>
        </center>
        <div class="row" style="margin-top: 70px;">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <button type="button" data-toggle="modal" data-target="#modalIncluir" class="btn btn-success">Incluir tarefa</button>
                    <button type="button" class="btn btn-default pull-right" onclick="print()">Imprimir</button>
                    <div class="col-md4">
                        <form action="pesquisar.php" method="post" class="form-group">
                            <input type="text" placeholder="Pesquisar" name="pesquisa" class="form-control">                           
                        </form>
                    </div>
                    <hr>
                    <br>
                    <div id="modalIncluir" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Inserir tarefa</h4>
                                </div>
                                <div class="modal-body">
                                <form method="post" action="incluir.php">
                                    <div class="form-group">
                                        <label>Título da tarefa</label>
                                        <input type="text" required name="titulo" class="form-control">
                                    </div>
                                    <input type="submit" name="enviar" value="Salvar" class="btn btn-success">
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php if(mysqli_num_rows($registros) < 1): ?>
                        <h2 class="text-danger text-center">Nenhum registro encontrado</h2>
                        <a href="index.php" class="btn btn-default pull-right">Retornar</a>
                    <?php else: ?>                        
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tarefa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($registro = $registros->fetch_assoc()): ?>
                                <tr>
                                    <th><?php echo $registro['id_tarefa'];?></th>
                                    <td class="col-md-10"><?php echo $registro['titulo_tarefa']?></td>
                                    <td><a href="atualizar.php?id=<?php echo $registro['id_tarefa'];?>" class="btn btn-success">Alterar</a></td>
                                    <td><a href="excluir.php?id=<?php echo $registro['id_tarefa'];?>" class="btn btn-danger">Excluir</a></td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>