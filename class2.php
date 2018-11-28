<?php
    include_once('class.php');
    $dados = new Dados();
    if (@$_POST['btn'] == 'btn1') {
        $nome = @$_POST['nome'];
        $fone = @$_POST['fone'];
    }
    function Add($nome,$fone){
        global $dados;
        $arq = fopen('dados.txt', 'a');
        $dados->setNome($nome);
        $dados->setFone($fone);
        $n = $dados->getNome();
        $f = $dados->getFone();
        fwrite($arq,$n .' ' . $f . '\r\n');
        Mostrar();
    }
    function Mostrar(){
        $arq = fopen('dados.txt','a');
        $ler =  file('dados.txt');
        echo $ler;
    }

?>
<fieldset>
    <legend>Class</legend>
        
    <form action="class2.php" method="post">
        Nome: <input type="text" name="nome"><br>
        Telefone: <input type="text" name="fone"><br>
        <button type="submit" name="btn1">Enviar</button>
    </form>
</fieldset>