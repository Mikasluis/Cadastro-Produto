
<?php

$arquivo = "produtos.csv";


// --------------------------------------------------
// VERIFICA SE O ARQUIVO EXISTE
// --------------------------------------------------

if (!file_exists($arquivo)) {

    die("
        <h2>Arquivo ainda não existe.</h2>
        <p>Cadastre pelo menos um produto primeiro.</p>
        <a href='index.php'>Voltar para o cadastro</a>
    ");

}


// --------------------------------------------------
// ABRE O ARQUIVO CSV
// --------------------------------------------------

$fp = fopen($arquivo, "r");


// --------------------------------------------------
// LÊ O CABEÇALHO
// --------------------------------------------------

$cabecalho = fgetcsv($fp, 1000, ";");

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Produtos Cadastrados</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 30px;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #007bff;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .botoes {
            margin-top: 25px;
            text-align: center;
        }

        .botao {
            display: inline-block;
            padding: 12px 20px;
            margin: 5px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .voltar {
            background-color: #007bff;
        }

        .voltar:hover {
            background-color: #0056b3;
        }

        .quantidade {
            margin-top: 20px;
            text-align: center;
            color: #555;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Produtos Cadastrados</h1>


    <table>

        <thead>

            <tr>

                <?php

                // Exibe o cabeçalho

                foreach ($cabecalho as $coluna) {

                    echo "<th>" .
                         htmlspecialchars($coluna) .
                         "</th>";

                }

                ?>

            </tr>

        </thead>


        <tbody>

            <?php

            // Contador de produtos

            $total = 0;


            // Lê cada linha do CSV

            while (($dados = fgetcsv($fp, 1000, ";")) !== false) {

                echo "<tr>";

                foreach ($dados as $valor) {

                    echo "<td>" .
                         htmlspecialchars($valor) .
                         "</td>";

                }

                echo "</tr>";

                $total++;

            }


            // Fecha o arquivo

            fclose($fp);

            ?>

        </tbody>

    </table>


    <div class="quantidade">

        Total de produtos cadastrados:
        <strong><?php echo $total; ?></strong>

    </div>


    <div class="botoes">

        <a href="index.php" class="botao voltar">
            ← Voltar para o cadastro
        </a>

    </div>

</div>

</body>

</html>


