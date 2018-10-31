<fieldset>
    <legend>Questão 9</legend>
    <form action="provaq1.php" method="post">
        Número 1: <input type="text" name="X"><br>
        Número 2: <input type="text" name="Y"><br>
        <button name="btn">Calcular</button>
    </form>
    <fieldset>
        <legend>Resultado</legend>
        <?php
            $X = @$_POST['X'];
            $Y = @$_POST['Y'];
            $maior;
            $menor;
            if ($X > $Y) {
                $maior = $X;
                $menor = $Y;
            } else {
                $maior = $Y;
                $menor = $X;
            }
            
            for ($i = $menor; $i <= $maior; $i++) { 
                if ($i %2 != 0) {
                    echo $i . '<br>';
                }
            }
        ?>
    </fieldset>
</fieldset>
