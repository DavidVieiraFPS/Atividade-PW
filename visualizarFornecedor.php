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
            margin-top: 10px; 
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
        <h1>Visualizar Fornecedores</h1>
        <form>
           

            <table id="customer-table">
                <tr>
                    <th>Nome:</th>
                    <td>João Algusto</td>
                </tr>
                <tr>
                    <th>CNPJ:</th>
                    <td>36.384.058/0001-23</td>
                </tr>
                
                <tr>
                    <th>CEP:</th>
                    <td>12345-678</td>
                </tr>
                <tr>
                    <th>Rua:</th>
                    <td>Rua do fornecedor</td>
                </tr>
                <tr>
                    <th>Número:</th>
                    <td>123</td>
                </tr>
                <tr>
                    <th>Bairro:</th>
                    <td>Bairro do fornecedor</td>
                </tr>
                <tr>
                    <th>Cidade:</th>
                    <td>Cidade do fornecedor</td>
                </tr>
                <tr>
                    <th>Estado:</th>
                    <td>UF</td>
                </tr>
                <tr>
                    <th>Celular:</th>
                    <td>(11) 98765-4321</td>
                </tr>
                <tr>
                    <th>E-mail:</th>
                    <td>fornecedor@email.com</td>
                </tr><tr>
               
            </table>
        </form>
    </div>

</body>
</html>
