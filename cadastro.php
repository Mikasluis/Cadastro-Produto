
<?php

// --------------------------------------------------
// RECEBENDO OS DADOS DO FORMULÁRIO
// --------------------------------------------------

$codigo = $_POST['codigo'] ?? '';
$nome = $_POST['nome'] ?? '';
$categoria = $_POST['categoria'] ?? '';
$preco = $_POST['preco'] ?? '';
$quantidade = $_POST['quantidade'] ?? '';
$validade = $_POST['validade'] ?? '';


// --------------------------------------------------
// VERIFICANDO SE TODOS OS CAMPOS FORAM PREENCHIDOS
// --------------------------------------------------

if (
    empty($codigo) ||
    empty($nome) ||
    empty($categoria) ||
    empty($preco) ||
    empty($quantidade) ||
    empty($validade)  
) {

    die("Erro: todos os campos devem ser preenchidos.");

}


// --------------------------------------------------
// NOME DO ARQUIVO CSV
// --------------------------------------------------

$arquivo = "produtos.csv";


// --------------------------------------------------
// VERIFICA SE O ARQUIVO JÁ EXISTE
// --------------------------------------------------

$arquivo_existe = file_exists($arquivo);


// --------------------------------------------------
// ABRE O ARQUIVO PARA GRAVAÇÃO
// "a" = adiciona dados no final do arquivo
// --------------------------------------------------

$fp = fopen($arquivo, "a");


// --------------------------------------------------
// SE FOR UM NOVO ARQUIVO, CRIA O CABEÇALHO
// --------------------------------------------------

if (!$arquivo_existe) {

    fputcsv(
        $fp,
        array(
            "Codigo",
            "Nome",
            "Categoria",
            "Preco",
            "Quantidade"
        ),
        ";"
    );

}


// --------------------------------------------------
// INSERE OS DADOS DO PRODUTO
// --------------------------------------------------

fputcsv(
    $fp,
    array(
        $codigo,
        $nome,
        $categoria,
        $preco,
        $quantidade
    ),
    ";"
);


// --------------------------------------------------
// FECHA O ARQUIVO
// --------------------------------------------------

fclose($fp);


// --------------------------------------------------
// EXIBE A MENSAGEM DE SUCESSO
// --------------------------------------------------

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Cadastro realizado</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }

        .mensagem {
            width: 500px;
            margin: 100px auto;
            background-color: white;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.15);
        }

        h1 {
            color: #28a745;
        }

        p {
            font-size: 17px;
            color: #444;
        }

        .dados {
            text-align: left;
            background-color: #f8f8f8;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
        }

        a {
            display: block;
            margin-top: 15px;
            padding: 12px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #0056b3;
        }

        .verde {
            background-color: #28a745;
        }

        .verde:hover {
            background-color: #1e7e34;
        }

    </style>

</head>

<body>

    <div class="mensagem">

        <h1>✓ Cadastro realizado!</h1>

        <p>
            Os dados foram inseridos no arquivo CSV com sucesso.
        </p>


        <div class="dados">

            <strong>Código:</strong>
            <?php echo htmlspecialchars($codigo); ?>

            <br><br>

            <strong>Produto:</strong>
            <?php echo htmlspecialchars($nome); ?>

            <br><br>

            <strong>Categoria:</strong>
            <?php echo htmlspecialchars($categoria); ?>

            <br><br>

            <strong>Preço:</strong>
            R$ <?php echo htmlspecialchars($preco); ?>

            <br><br>

            <strong>Quantidade:</strong>
            <?php echo htmlspecialchars($quantidade); ?>

        </div>


        <a href="index.php">
            Cadastrar outro produto
        </a>


        <a href="abrir_csv.php" class="verde">
            Abrir arquivo CSV
        </a>

    </div>

</body>

</html>


