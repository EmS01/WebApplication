<?php
session_start();
$_SESSION['nome_usuario'] = 'Emily';
?>

<html>

	<head>
       <title>Login</title>
       <meta charset="utf-8">
       <link rel="shortcut icon" href="https://i.imgur.com/xtxyiN6.png.icon" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="estilo2.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
  .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    } 

    .navbar {
        margin-bottom: 0;
        background-color: #FFF0F5;
        z-index: 9999;
        border: 0;
        font-size: 12px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
        font-family: Montserrat, sans-serif;
      }
      .navbar li a, .navbar .navbar-brand {
        color: #000000;
        
      }
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #000000;
        background-color: #FFF0F5;
      }
      .navbar-default .navbar-toggle {
        border-color: #FFF0F5;
        color: #000000;
      }

       
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }

        
        .form-floating {
          width: 300px;
          height: calc(1.5em + .75rem + 2px);
           margin-left: auto;
            margin-right: auto; 

        }

    </style>
	</head>

	<body class="text-center">

        <!-- BARRA DE NAVEGAÇÃO-->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="https://i.imgur.com/xtxyiN6.png" alt="logo" style="width:40px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="/menuPrincipal">Home</a>
            </li>
            <li class="nav-item">
          <a class="nav-link" href="/sobreNos">Quem somos</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/Receitas">Receitas</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="/produtos">Cursos</a>
          </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Registre-se
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/cadastro">Cadastre-se</a>
                <a class="dropdown-item" href="/login">Login</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquise aqui">
            <button class="btn btn-outline-primary-2 my-sm-0" type="submit" style="background-color: #00CED1;">Pesquisar</button>
          </form>
        </div>
    </nav>
    <!-- FIM BARRA DE NAVEGAÇÃO-->


        <!-- FORMULÁRIO PARA LOGIN-->
      
        <main class="form-signin">
          <form action="/validarLogin" method="post">
            <img class="mb-4" src="https://i.imgur.com/xtxyiN6.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            

            <div class="form-floating">
      <input type="text" class="form-control" placeholder="Username" name="nomeUsuario" required autofocus >
      
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="senha" placeholder="Password" required>
      
    </div>

            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn" type="submit" style="width: 300px; background-color:  #FFF0F5; color: #000000;">Executar</button>
          </form>
        </main>
<a href="/menuPrincipal"> Acesse aqui </a>

<footer class="container-fluid text-center">
  <p>Easy cooking © </p>
</footer>
    </body>

  </html>