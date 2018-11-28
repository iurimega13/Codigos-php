<?php
    session_start();
    $usuario = @$_POST['usuario'];
    $senha = @$_POST['senha'];
    if ($usuario == 'iuri' && $senha == '1234') {
        $_SESSION['usuario'] = $usuario;
        echo 'LOgado com sucesso seja bem vindo' . $usuario;
    } else {
        if ($usuario && $senha) {
            echo 'Usuario e senha incorretos.';
        }
    }
    
    
    
?>
<fieldset>
    <legend>Sistema de login</legend>
    <form action="loginSession2.php" method="post">
        Usuario: <input type="text" name="usuario"><br>
        senha: <input type="text" name="senha"><br>
        <button name="btn" value="1">Logar</button>&nbsp;
    </form>
</fieldset>