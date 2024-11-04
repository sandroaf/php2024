<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Exemplo 2 </title>
</head>
<body>
    <?php 
        require_once('pessoa\pessoa.php');
        use pessoa\pessoa;
        use pessoa\aluno;

        echo "<h2>Pessoas</h2>";
        $pessoa[] = new pessoa('João','Santos', 25, 'Masculino');
        $pessoa[] = new pessoa('Maria','Bueno', 50, 'Feminino');
        $pessoa[1]->setNome('Jaqueline');
        $pessoa[] = new pessoa('Macelo','Pinheiro', 27, 'Masculino');
        $pessoa[] = new pessoa('Joaquim','Odonosor', 30, 'Masculino');
        foreach ($pessoa as $p) {
            echo $p->dados();
            echo "<br>";
        }

        echo "<h2>Alunos</h2>";
        $aluno[] = new aluno('Pedro','Silva', 25, 'Masculino', 123, 'Sistemas de Informação');
        $aluno[] = new aluno('Marcia','Cardozo', 50, 'Feminino', 124, 'Direito');
        $aluno[] = new aluno('Marcel','Mattos', 27, 'Masculino', 125, 'Engenharia Civil');
        $aluno[] = new aluno('Joaquima','Pereira', 30, 'Feminino', 126, 'Medicina');
        foreach ($aluno as $a) {
            echo $a->dados();
            echo "<br>";
        }
    ?>
    
</body>
</html>