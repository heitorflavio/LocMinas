<?php
require('../../config/start.php');
// print_r($_POST);


session_start();


if ($_SESSION['autenticado'] != 'Aprovado' || $_SESSION['autenticado'] == 'Reprovado') {

    header('location: /painel/content/login.php ');
}





// $query = "SELECT * FROM usuarios WHERE id='$id_user'";
// $result = $sqli->query($query);
// foreach ($result as $key => $value) {
//     # code...
//     print_r($value);
// }
// print_r($user);

$query = "SELECT * FROM usuarios ";
$pedidos = $sqli->query($query)->fetch_array();

// print_r($pedidos);
print_r($_SESSION);
?>

<section class="content">
  <div class="row">
    <div class="col-xs-12" style="margin-top: 10px; margin: 100px;">
    <h3 class="brand-text font-weight-light">Editar</h3>
      <form action="class/usuarios/editar.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="nome" value="<?php echo $pedidos['nome']?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $pedidos['email']?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="pass2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Telefone" name="telefone" value="<?php echo $pedidos['telefone']?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>

        <input type="submit" value="Editar" class="btn btn-success">

      </form>
    </div>
</section>