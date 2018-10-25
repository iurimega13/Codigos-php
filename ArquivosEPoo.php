<?php
    $q1 = @$_POST['q1'];
    $q2 = @$_POST['q2'];
    $q3 = @$_POST['q3'];
    $q4 = @$_POST['q4'];
    $q5 = @$_POST['q5'];
    $total = 0;

    function questionario(){
        global $q1,$q2,$q3,$q4,$q5,$total;
        if ($q1 == 2) {
            echo 'Questão 1: Certa <br>';
            $total++;
        }else{
            echo 'Questão 1: Errada <br>';
        }
        if ($q2 == 3) {
            echo 'Questão 2: Certa <br>';
            $total++;
        } else {
            echo 'Questão 2: Errada <br>';
        }
        if ($q3 == 4) {
            echo 'Questão 3: Certa <br>';
            $total++;
        } else {
            echo 'Questão 3: Errada <br>';
        }
        if ($q4 == 4) {
            echo 'Questão 4: Certa <br>';
            $total++;
        } else {
            echo 'Questão 4: Errada <br>';
        }
        if ($q5 == 1) {
            echo 'Questão 5: Certa <br>';
            $total++;
        } else {
            echo 'Questão 5: Errada <br>';
        }
        if ($total > 2) {
            echo '<center><h1><font color="green">Passou</font></h1></center>';
        } else {
            echo '<center><h1><font color="red">Reprovou</font></h1></center>';
        }
        
    }
?>
<center><h2>Aula de Arquivos e POO - Questionario</h2></center>
<fieldset Style="margin: auto 10% 10%;">
    <legend>Questionario</legend>
    <form action="ArquivosEPoo.php" method="post">
        <fieldset>
            <legend>Questão 1</legend>
            Quanto é 1 + 1? <br>
            a. <input type="radio" name="q1" value="1"> &nbsp; 1<br>
            b. <input type="radio" name="q1" value="2"> &nbsp; 2<br>
            c. <input type="radio" name="q1" value="3"> &nbsp; 3<br>
            d. <input type="radio" name="q1" value="4"> &nbsp; 4<br>
        </fieldset>
        <br>
        <fieldset>
            <legend>Questão 2</legend>
            Quanto é 1 + 2? <br>
            a. <input type="radio" name="q2" value="1"> &nbsp; 1<br>
            b. <input type="radio" name="q2" value="2"> &nbsp; 2<br>
            c. <input type="radio" name="q2" value="3"> &nbsp; 3<br>
            d. <input type="radio" name="q2" value="4"> &nbsp; 4<br>
        </fieldset>
        <br>
        <fieldset>
            <legend>Questão 3</legend>
            Quanto é 1 + 3? <br>
            a. <input type="radio" name="q3" value="1"> &nbsp; 1<br>
            b. <input type="radio" name="q3" value="2"> &nbsp; 2<br>
            c. <input type="radio" name="q3" value="3"> &nbsp; 3<br>
            d. <input type="radio" name="q3" value="4"> &nbsp; 4<br>
        </fieldset>
        <br>
        <fieldset>
            <legend>Questão 4</legend>
            Quanto é 2 + 2? <br>
            a. <input type="radio" name="q4" value="1"> &nbsp; 1<br>
            b. <input type="radio" name="q4" value="2"> &nbsp; 2<br>
            c. <input type="radio" name="q4" value="3"> &nbsp; 3<br>
            d. <input type="radio" name="q4" value="4"> &nbsp; 4<br>
        </fieldset>
        <br>
        <fieldset>
            <legend>Questão 5</legend>
            Quanto é 4 - 3? <br>
            a. <input type="radio" name="q5" value="1"> &nbsp; 1<br>
            b. <input type="radio" name="q5" value="2"> &nbsp; 2<br>
            c. <input type="radio" name="q5" value="3"> &nbsp; 3<br>
            d. <input type="radio" name="q5" value="4"> &nbsp; 4<br>
        </fieldset>
        <br>
        <button name="btn">Confirmar</button>
    </form>
    <fieldset>
        <legend>Resultado</legend>
        <?php
            questionario();
        ?>
    </fieldset>
</fieldset>

