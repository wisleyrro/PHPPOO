<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo de Pessoa</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $p[0] = new Pessoa("Wisley", 25, "M");
            $p[1] = new Pessoa("maria", 25, "F");

            $l[0] = new Livro ("PHP Básico", "José da silva", 300, $p[0]);
            $l[1] = new Livro ("POO com PHP", "Maria de Souza", 500, $p[0]);
            $l[2] = new Livro ("POO Avançado", "Ana Paula", 800, $p[1]);

            print_r($l[0]);
            $l[0]->abrir();
            $l[0]->folhear(500);
            $l[0] ->detalhes();
        ?>
    </pre>
    
</body>
</html>