<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>01</title>
</head>
<body bgcolor="gray">
    <form action="01.php" method="post">
        Digite um número: <input type="text" name="num"><br>
        <button name="button">Confimar</button>
    </form>
    <?php
        $num = @$_POST['num'];
        $count = $num;
        if ($num >= 2 && $num <= 20) {
            for ($i=1; $i <=($num);) { 
                $i++;
                for ($x=1; $x < $i;$x++) {
                        echo $x;
                        }echo '<br>';}
                for ($i= $count; 0 <=($count);) { 
                    $i = $count;
                    for ($x=1; $x < $i;$x++) {
                        echo $x;
                        }
                    $count--;
                    echo '<br>';
                    }
            } else {
            echo 'digite um número valido de 2 a 20';
        }
        
    ?>
</body>
</html>