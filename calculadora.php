<?php
    $num1 = @$_POST['num1'];
    $num2 = @$_POST['num2'];
    $funcao = @$_POST['slct'];

    function calcular(){
        global $num1,$num2,$funcao;
        if ($funcao == 1) {
            echo '<center><h4>' . ($num1 + $num2) . '</h4></center>';
        } else if($funcao == 2){
            echo '<center><h4>' . ($num1 - $num2) . '</h4></center>';
        } else if($funcao == 3){
            echo '<center><h4>' . ($num1 * $num2) . '</h4></center>';
        } else{
            echo '<center><h4>' . ($num1 / $num2) . '</h4></center>';
        }
        
    }
?>
<fieldset>
    <legend>Calculadora</legend>
    <center><form action="calculadora.php" method="post">
        Número 1: <input type="text" name="num1"><br>
        <select name="slct" >
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">*</option>
            <option value="4">/</option>
        </select><br>
        Número 2: <input type="text" name="num2"><br>
        <button name="btn">Calcular</button>
    </form>
    </center>
</fieldset>
<fieldset>
    <legend>Resultado</legend>
    <?php calcular(); ?>
</fieldset>
