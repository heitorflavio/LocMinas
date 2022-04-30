<?php
session_start();


if($_SESSION['autenticado']!='Aprovado' || $_SESSION['autenticado']=='Reprovado'){
   
    header('location: /painel/content/login/login.php ');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LocMinas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <style>
    .teste {
      background-color: red;
      width: 400px;
      height: 400px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="home.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="LocMinas Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LocMinas</span>
        </a>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class=""></i>
              <p>
                Cadastro
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link " onclick="clientes('clientes/clientes.php');">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="usuarios('usuarios/usuarios.php');" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuários</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="produtos('produtos/produtos.php')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produtos</p>
                </a>
              </li>
              
            </ul>
           
              <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Ordens
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link " onclick="clientes('clientes/clientes.php');">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Abrir Ordem</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="clientes('clientes/clientes.php');">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ordens</p>
                  </a>
              </li>
            </ul>

            <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link " onclick="clientes('clientes/clientes.php');">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buscar Clientes</p>
                  </a>
              </li>
              </li>
            </ul>       
            
            <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Caixa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link " onclick="clientes('clientes/clientes.php');">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Extrato</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="clientes('clientes/clientes.php');">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Movimentação Diária</p>
                  </a>
              </li>
            </ul>
              
              
           

              <li class="nav-item">
                <a href="login/login.php" class="nav-link">
                  <i class=""></i>
                  <p>Sair</p>
                </a>
              </li>
             
    </aside>

</div>
<div  id="content">



</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    

  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script>
  function usuarios(url){
    if(!document.getElementById('loading')){
      let imgLoading = document.createElement('img');
      imgLoading.id = 'loading';
      imgLoading.src = 'img/loading.gif';
      imgLoading.className = 'rounded mx-auto d-block';

      document.getElementById('content').appendChild(imgLoading);
    }
    let ajax = new XMLHttpRequest();
    ajax.open('POST',url);

    ajax.send();
    // console.log(ajax);
    ajax.onreadystatechange = ()=> {
      if(ajax.readyState == 4 && ajax.status ==200){
        
        document.getElementById('loading').remove();
        document.getElementById('content').innerHTML = ajax.responseText; 
      }
    }
  }

  function clientes(url){
    if(!document.getElementById('loading')){
      let imgLoading = document.createElement('img');
      imgLoading.id = 'loading';
      imgLoading.src = 'img/loading.gif';
      imgLoading.className = 'rounded mx-auto d-block';

      document.getElementById('content').appendChild(imgLoading);
    }
    let ajax = new XMLHttpRequest();
    ajax.open('POST',url);

    ajax.send();
    // console.log(ajax);
    ajax.onreadystatechange = ()=> {
      if(ajax.readyState == 4 && ajax.status ==200){
        
        document.getElementById('loading').remove();
        document.getElementById('content').innerHTML = ajax.responseText; 
      }
    }
  }

  function produtos(url){
    if(!document.getElementById('loading')){
      let imgLoading = document.createElement('img');
      imgLoading.id = 'loading';
      imgLoading.src = 'img/loading.gif';
      imgLoading.className = 'rounded mx-auto d-block';

      document.getElementById('content').appendChild(imgLoading);
    }
    let ajax = new XMLHttpRequest();
    ajax.open('POST',url);

    ajax.send();
    // console.log(ajax);
    ajax.onreadystatechange = ()=> {
      if(ajax.readyState == 4 && ajax.status ==200){
        
        document.getElementById('loading').remove();
        document.getElementById('content').innerHTML = ajax.responseText; 
      }
    }
  }
</script>
</body>
</html>

