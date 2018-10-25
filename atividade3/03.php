<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>02</title>
</head>
<body bgcolor="gray">
    <?php
    $anos = 0;
    $chico = 1.50;
    $ze = 1.10;
        for ($ze; $ze < $chico;) { 
            $anos++;
            $chico += 0.20;
            $ze += 0.30;
        }
        echo $anos.' anos até o ze passar o chico';
    ?>
</body>
</html>