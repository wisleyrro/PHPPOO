<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex001</title>
</head>
<body>
    <pre>
    <?php
        require_once 'ContaBanco.php';
        $p1 = new ContaBanco(); //JUBILEU
        $p2 = new ContaBanco(); //CREUZA
        //ABRINDO CONTA JUBILEU
        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->setNumConta(1111);
        //ABRINDO CONTA CREUZA
        $p2->abrirConta("CP");
        $p2->setNumConta(2222);
        $p2->setDono("Creuza");
        //DEPOSITANDO
        $p1->depositar(300);
        $p2->depositar(500);
        //SACAR DINHEIRO

        $p1->pagarMensal();
        $p2->pagarMensal();

        $p1->sacar(338);
        $p2->sacar(630);
        $p1->fecharConta();
        $p2->fecharConta();


        print_r($p1);
        print_r($p2);

        




    ?>
    </pre>
    
</body>
</html>