<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                    <button type="button" class="btn btn-default pull-right">Imprimir</button>
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
                                <form action="">
                                    <div class="form-grup">
                                        <label for=""></label>
                                        <input type="text" require name="tarefa" class="form-control">
                                    </div>
                                    <input type="submit" name="enviar" value="Salvar" class="btn btn-success">
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tarefa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td class="col-md-10">Mark</td>
                                <td>
                                    <ac href="" class="btn btn-success">Alterar</a>
                                </td>
                                <td>
                                    <ac href="" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>