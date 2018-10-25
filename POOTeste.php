<center><h1>Pagina inicial do sistema</h1></center>
<fieldset>
    <legend>Cadastro de aluno</legend>
    <form action="POOTeste.php" method="post">
        nome: <input type="text" name="nome"><br>
        idade: <input type="text" name="idade"><br>
        cpf:&nbsp;&nbsp; <input type="text" name="cpf"><br>
        <button name="button">Confirmar</button>
    </form>

<?php
    include_once('POO.php');
    $aluno = new aluno();
    $nome = @$_POST['nome'];
    $idade = @$_POST['idade'];
    $cpf = @$_POST['cpf'];
    function add(){
        global $aluno, $nome, $idade, $cpf;
        $aluno->setNome($nome);
        echo "Nome: " . $aluno->getNome() . "<br>";
        $aluno->setIdade($idade);
        echo "Idade: " . $aluno->getIdade() . "<br>";
        $aluno->setCpf($cpf);
        echo "Cpf: " . $aluno->getCpf() . "<br>";
    }
?>
</fieldset>
<fieldset>
    <legend>Resultado</legend>
    <?php add($nome,$idade,$cpf); ?>
</fieldset>