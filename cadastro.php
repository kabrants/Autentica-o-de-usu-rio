<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futchamp - Futebol Online</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/in.png" type="image/x-icon">
    <script src="temporizador.js"></script>
</head>
<body>
   
    <!--Logo-->

      <header>
        <div class="logo-container">
            <img src="img/logo1.png" alt="Logo do Futchamp">

      </header>





    <!-- Barra lateral Menu -->
    <aside class="menu">
      <div class="login-form">
        <input type="text" placeholder="Usuário">
        <input type="password" placeholder="Senha">
        <div>
          <input class="bt" type="submit" name="Login" value="Login">
          <input class="bt" type="submit" name="Cadastro" value="Cadastre-se">
        </div>
      </div>
      <ul>
        <li><a href="#">Página Inicial</a></li>
        <li><a href="#">Níveis</a></li>
        <li><a href="#">Aprenda a jogar</a></li>
      </ul>
    <!-- Cadastro -->
    <div class="main-content">
      <div class="cadastro">
      <div class="cad" id="cadastro">
        <h1>Cadastre sua conta</h1>
        <form action="cadastro.php" method="post">
          <input type="text" id="login" name="login" placeholder="Digite seu Login"> <br>
          <input type="password" id="senha" name="senha" placeholder ="Digite uma senha segura"> <br>
          <input type="email" id="email" name="email" placeholder="Digite seu e-mail"> <br>
          <input type="submit" name="submit" id="b-cadastro" value="Cadastrar">
        </form>
      </div>
    </div>
</div>

    </aside>


      <footer>
        <p>Todos os direitos reservados para o Futchamp</p>
      </footer>

      <!--Configurações do PHP-->
      <?php

      if(isset($_POST['submit']))

        include_once('conectar.php');

        $nome = $_POST['login'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        $usuarios = mysqli_query($conexao, "INSERT INTO cadastro_usuario(login_usuario, senha_usuario, email_usuario) VALUES ('$nome', '$senha', '$email')");

        ?>
    
</body>
</html>