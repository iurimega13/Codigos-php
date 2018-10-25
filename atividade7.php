<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>atividade07</title>
</head>
<body>
    <form action="atividade7.php" method="post">
        1º número: <br> <input type="text" name="num1"><br>
        <input type="text" name="funcao"><br>
        2º número: <br> <input type="text" name="num2"><br>
        <button name="button" >Calcular</button>
    </form>
    <?php
    if (!empty($_POST['button'])) {
        calcular()();
    }
        $num1 = @$_POST['num1'];
        $num2 = @$_POST['num2'];
        $funcao = @$_POST['funcao'];
        echo($num1.$funcao.$num2);
        function  calcular($num1,$num2,$funcao){
            if ($funcao == '+') {
                $resultado =($num1 + $num2);
                return $resultado;
            }
        echo $resultado;
        }
    ?>
</body>
</html>