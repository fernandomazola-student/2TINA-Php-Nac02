<?php include "db.php"; ?>
<?php include "function.php"; ?>
<?php


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <br><br><br>
    <div class="col-md-4">

    </div>
    <form class="col-md-4" action="alterar_dados.php" method="post">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" placeholder="Ex: Fernando Mazola">
      </div>

      <div class="form-group">
        <label for="rg">Rg:</label>
        <input class="form-control" type="text" name="rg" placeholder="Ex: 359131335">
      </div>

      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input class="form-control" type="tel" name="telefone" placeholder="(11)2258-5418">
      </div>

      <div class="form-group">
        <label for="cidade">Cidade:</label>
        <select name="cidade" class="form-control">
          <?php
            mostraDadosCidades();
           ?>
        </select>
      </div>

      <div class="form-group">
        <label for="estado">Estado:</label>
        <select name="estado" class="form-control">
          <?php mostraDadosEstados(); ?>
        </select>
      </div>

      <center><input type="submit" class="col-md-12 btn btn-primary" name="alterar1" value="Atualizar"></center><br><br><br>
      <a href="select_sp.php" class="btn btn-info">Listar SP</a>
    </form>


  </body>
</html>
