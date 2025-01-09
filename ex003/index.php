<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes de Tipos Primitivos</h1>
    <?php
        //TIPOS ESCALARES

        // // 0x = hexadecimal -- 0b = binário -- 0 = octal
        // $num = 010; // Vai apresentar o número 8 no navegador, pois 10 em Octal é 8
        // echo "O valor da variável é $num";

        // $v = 0x10;
        // var_dump($v);

        // $num = 3e2;
        // echo "O valor é $num";
        // var_dump($num);

        // $num = (integer) 3e2; //3x10(2) COERÇÃO
        // var_dump($num);

        // $num = (double) "950";
        // var_dump($num);

        // $casado = true;
        // var_dump($casado);
        // print "O valor de casado é $casado"; // Estudar um pouco mais sobre variáveis do tipo bool,


        //TIPOS COMPOSTOS

        //ARRAY

        // $vet = [6, 2.5, "Luiza", 3, true];
        // var_dump($vet);

        //OBJECT

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa; // $p é um objeto
        var_dump($p);

    ?>
</body>
</html>