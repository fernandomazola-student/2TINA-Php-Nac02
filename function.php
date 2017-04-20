
<?php include "db.php";


function cadastrar(){
  global $connection;
  $nome = $_POST['nome'];
  $rg = $_POST['rg'];
  $telefone = $_POST['telefone'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];

  $query = "INSERT INTO cadastro(nome,rg,telefone,cidade,estado) VALUES ('$nome', '$rg', '$telefone', '$cidade', '$estado')";

  $resultado = mysqli_query($connection, $query);

  if (!$resultado) {
    die("Falha ao gravar");
  }else {
    echo '<div class="alert alert-success"><center><strong>Cadastrado!</strong></center></div>';
  }
}

function mostraDadosCidades(){
  global $connection;
  $query = "SELECT * FROM tb_estados";
  $resultado = mysqli_query($connection, $query);
  while($row = mysqli_fetch_assoc($resultado)){
    $id = $row['id'];
    $nome = $row['nome'];
    echo "<option value='$nome'>$nome</option>";
  }
}

function mostraDadosEstados(){
  global $connection;
  $query = "SELECT * FROM tb_estados";
  $resultado = mysqli_query($connection, $query);
  while($row = mysqli_fetch_assoc($resultado)){
    $id = $row['id'];
    $nome = $row['uf'];
    echo "<option value='$nome'>$nome</option>";
  }
}


function validarCad(){
  global $connection;
  $nome = trim($_POST['nome']);
  $rg = trim($_POST['rg']);
  $telefone = trim($_POST['telefone']);
  // $cidade = $_POST['cidade'];
  // $estado = $_POST['estado'];

  if($nome == null){
    echo '<div class="alert alert-danger"><center><strong>O campo nome não pode estar vázio!</strong></center></div>';
  }else if(strlen($nome) > 25 || strlen($nome) < 3){
    echo '<div class="alert alert-danger"><center><strong>O nome não pode ultrapassar 25 caracteres ou ser menor que 3 caracteres!</strong></center></div>';
  }else if(is_numeric($nome)){
    echo '<div class="alert alert-danger"><center><strong>O nome não pode conter números!</strong></center></div>';
  }else if(strlen($rg) > 9 || strlen($rg) < 9 ){
    echo '<div class="alert alert-danger"><center><strong>O rg não pode ser maior que 9 digitos ou menor que 9 digitos!</strong></center></div>';
  }else if($rg == null){
    echo '<div class="alert alert-danger"><center><strong>O campo rg não pode estar vázio!</strong></center></div>';
  }else if($telefone == null){
    echo '<div class="alert alert-danger"><center><strong>O campo telefone não pode estar vázio!</strong></center></div>';
  }else if(strlen($telefone) > 9 || strlen($telefone < 9)){
    echo '<div class="alert alert-danger"><center><strong>O telefone não pode ser maior que 9 digitos ou ter menos que 9 digitos!</strong></center></div>';
  }else{
    cadastrar();
  }
}




function select_sp(){
  global $connection;
  $query = "SELECT * FROM cadastro WHERE estado = 'SP' ";
  $resultado = mysqli_query($connection, $query);
  echo '<table class="table table-striped">';
  echo "<thead> <tr>  <th>Nome</th> <th>Estado</th> <th>Ações</th </tr> </thead>";
  while($row = mysqli_fetch_assoc($resultado)){
    echo '<tbody> <tr> <td>'. $row['nome'] . '</td> <td>'. $row['estado'] . '</td> <td><a class="btn btn-info" href="select_sp.php?delete='. $row['id'].'">Excluir</a> |   <input type="submit" class="btn btn-info" name="envia" value="Alterar"/>     </td> </tr> </tbody>';
   }
   echo " </table";
  if (!$resultado) {
    die('Erro' . mysql_error($connection));
  }else{
    echo "Retorno";
  }
}




function delCad(){
  global $connection;
  $id = $_GET['delete'];
  $query = "DELETE FROM cadastro WHERE id = '$id'";
  $resultado = mysqli_query($connection, $query);
  if(!$resultado){
    die("Deu ruim");
  }else{
    echo '<div class="col-md-3"></div><div class="alert alert-warning"><strong>Dados deletados!</strong></div>';
  }
}


?>
