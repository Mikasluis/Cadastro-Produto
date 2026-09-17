
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Cadastro de Produtos</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: "New Rocker", system-ui;
            background-color: #230303;
            color: white;
        }

        .container {
            width: 450px;
            margin: 50px auto;
            background-color: #540101;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.15);
            color: white;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
            color: white;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid gray;
            border-radius: 5px;
            font-size: 15px;
            background: gray;
            color: white;
        }

        input::placeholder {
            color: white; /* Defina a cor desejada aqui */
        }

        input:focus {
            border-color: #007bff;
            outline: none;
        }

        .botoes {
            margin-top: 25px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-cadastrar {
            background-color: #007bff;
            color: white;
        }

        .btn-cadastrar:hover {
            background-color: #0056b3;
        }

        .btn-abrir {
            background-color: #28a745;
            color: white;
        }

        .btn-abrir:hover {
            background-color: #1e7e34;
        }

        .observacao {
            margin-top: 20px;
            text-align: center;
            font-size: 13px;
            color: #777;
        }

        h1{
            font-family: "New Rocker", system-ui;
            font-weight: 100px;
            font-style: normal;
            font-size: 50px;
            color: white;
        }

        .new-rocker-regular {
            font-family: "New Rocker", system-ui;
            font-weight: 400;
            font-style: normal;
        }

        


    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">

        <h1>Cadastro de Produto</h1>

        <form action="cadastro.php" method="POST">

            <label for="codigo">
                Código:
            </label>

            <input
                type="text"
                id="codigo"
                name="codigo"
                placeholder="Digite o código"
                required
            >


            <label for="nome">
                Nome do Produto:
            </label>

            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Digite o nome do produto"
                required
            >


            <label for="categoria">
                Categoria:
            </label>

            <input
                type="text"
                id="categoria"
                name="categoria"
                placeholder="Digite a categoria"
                required
            >


            <label for="preco">
                Preço:
            </label>

            <input
                type="number"
                id="preco"
                name="preco"
                step="0.01"
                placeholder="0.00"
                required
            >


            <label for="quantidade">
                Quantidade:
            </label>

            <input
                type="number"
                id="quantidade"
                name="quantidade"
                placeholder="Digite a quantidade"
                required
            >

            <label for="validade">
                Validade:
            </label>

            <input 
                type="date"
                id= "validade"
                name= "validade"
                placeholder="dd/mm/aaaa"
                required
            >

            <datalist id="opcoes-frutas">
                <option value="Maçã">
                <option value="Banana">
                <option value="Laranja">
                <option value="Morango">
                </datalist>


            <div class="botoes">

                <button
                    type="submit"
                    class="btn-cadastrar">
                    Cadastrar Produto
                </button>

            </div>

        </form>


        <!-- Botão para abrir o arquivo CSV -->

        <form action="abrir_csv.php" method="GET">

            <button
                type="submit"
                class="btn-abrir">
                Abrir arquivo CSV
            </button>

        </form>


        <div class="observacao">

            Sistema simples de cadastro de produtos

        </div>

    </div>

</body>

</html>

