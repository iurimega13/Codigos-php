<?php session_start(); ?>
<fieldset>
<legend>SISTEMA DE VOTO</legend>
    <form action="function.php" method="post">
        Partido 1 <button name="btn" value="1">Votar</button><br>
        Partido 2 <button name="btn" value="2">Votar</button><br>
    </form>
</fieldset>
<?php
    $btn = @$_POST['btn'];

    $_SESSION['partido1'];
    $_SESSION['partido2'];
    function votos(){ 
        global $partido1,$partido2,$btn;
        if ($btn == 1) {
            return $_SESSION['partido1']++;
        }
        if ($btn == 2) {
            return $_SESSION['partido2']++;
        }
        if ($btn == 0) {
            return $_SESSION['partido1'] = 0 . $_SESSION['partido2'] = 0;
        }
        
    }


?>
<form action="function.php" method="post">
    <?php votos();
    echo 'Resultado: Partido 1: ' . $_SESSION['partido1'] . '<br>';
    echo 'Resultado: Partido 2: ' . $_SESSION['partido2'] . '<br>';
    ?> <button name="btn" value="0">Limpar</button>
</form>
