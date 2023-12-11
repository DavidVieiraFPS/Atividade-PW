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
            display: flex; 
        }

        #menu {
            width: 100px;
            background-color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            height: 100vh; 
        }

        #menu a {
            color: white;
            text-decoration: none;
            font-size: 16px; 
            margin-bottom: 15px; 
            text-align: center;
            padding: 10px; 
            width: 100%; 
            box-sizing: border-box; 
        }

        #menu i {
            font-size: 24px; 
        }

        #content {
            flex: 1; 
            margin-left: 100px;
            padding: 20px;
        }

        #content form {
            display: flex;
            flex-direction: column;
            max-width: 300px; 
            margin: 0 auto; 
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

        #customer-table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        #customer-table th,
        #customer-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        #customer-table th {
            background-color: #f2f2f2;
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
    <title>Cadastro Cliente</title>
</head>
<body>

    <div id="menu">
        <a href="index3.php"><i class="fas fa-arrow-left"></i><br>Voltar</a>
    </div>

    <div id="content">
        <h1>Visualizar Produtos</h1>
        <form>


            <table id="customer-table">
                <tr>
                    <th>Nome:</th>
                    <td>Pedro Limpesas</td>
                </tr>
                <tr>
                    <th>Descrição:</th>
                    <td>Sofá Retratil</td>
                </tr>
                
                    <th>Valor:</th>
                    <td>R$500,00</td>
                </tr>
                <tr>
                    <th>Quantidade em Estoque:</th>
                    <td>6</td>
                </tr>
                <tr>
                    <th>Imagem(URl):</th>
                    <td>https://product-hub-prd.madeiramadeira.com.br/671602237/images/f290f16e-5f0a-4e4a-9cea-b1c230e5080estandardresolution.jpg</td>
              
            </table>
        </form>
    </div>

</body>
</html>
