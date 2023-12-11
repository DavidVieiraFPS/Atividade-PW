<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex; /* Adicionado para ocupar toda a altura da página */
        }

        #menu {
            width: 100px;
            background-color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            height: 100vh; /* Adicionado para ocupar a altura total da página */
        }

        #menu a {
            color: white;
            text-decoration: none;
            font-size: 16px; /* Ajuste o tamanho da fonte */
            margin-bottom: 15px; /* Reduzi o espaçamento entre os itens */
            text-align: center;
            padding: 10px; /* Adicionado espaçamento interno */
            width: 100%; /* Faz cada item ocupar a largura total */
            box-sizing: border-box; /* Garante que o padding não aumente o tamanho total */
        }

        #menu i {
            font-size: 24px; /* Ajuste o tamanho do ícone */
        }

        #content {
            flex: 1; /* Adicionado para ocupar o restante do espaço disponível */
            margin-left: 100px; /* Ajustado para o tamanho inicial do menu */
            padding: 20px;
        }

        #content form {
            display: flex;
            flex-direction: column;
            max-width: 300px; /* Ajuste a largura máxima do formulário */
            margin: 0 auto; /* Centraliza o formulário na página */
        }

        #content form label {
            margin-top: 10px;
            font-size: 14px;
        }

        #content form input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        #content form button {
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            margin-top: 10px; /* Adicionado espaçamento acima do botão */
        }

        @media (max-width: 600px) {
            #menu {
                width: 0;
                overflow: hidden;
            }

            #menu a {
                margin-bottom: 0;
            }

            #content {
                margin-left: 0;
            }
        }
    </style>
    <title>Cadastro Fornecedor</title>
</head>
<body>

    <div id="menu">
        <a href="index2.php"><i class="fas fa-arrow-left"></i><br>Voltar</a>
    </div>

    <div id="content">
        <h1>Cadastro Fornecedor</h1>
        <form>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="cpf">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj" required>


            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" required>

            <label for="rua">Rua:</label>
            <input type="text" id="rua" name="rua" required>

            <label for="num">Número:</label>
            <input type="text" id="num" name="num" required>

            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" required>

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>

            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required>

            <label for="celular">Celular:</label>
            <input type="text" id="celular" name="celular" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>