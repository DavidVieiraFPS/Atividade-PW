<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        /* Estilos gerais */
        html {
            font-family: 'Noto Sans', sans-serif;
            font-family: 'Roboto', sans-serif;
        }
        body {
            font-family: Arial, sans-serif;
            background: rgb(18, 18, 20);
            padding: 17px 64px;
            text-align: left;
        }

        h1 {
            font-size: 36px;
            color: rgb(225, 225, 230);
            margin-bottom: 20px;
        }
        p {
            line-height: 26px;
            color: rgb(168, 168, 179);
            font-size: 16px;
            margin-bottom: 40px;
        }
        .container {
            margin: 0px auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        /* Estilos do formulário */
        form {
            display: flex;
            flex-direction: column;
            background: rgb(32, 32, 36);
            border-radius: 5px;
            padding: 64px;
            align-items: center;
            text-align: left;

        }
        form h1 {
            font-size: 20px;
            width: -webkit-fill-available;
            margin-bottom: 20px;
            color: rgb(255, 255, 255);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: -webkit-fill-available;
            height: 50px;
            font-size: 20px;
            font-weight: 500;
            background: rgb(18, 18, 20);
            border-color: rgb(18, 18, 20);
            color: rgb(255, 255, 255);
            padding: 0px 1em 0px 1.65em;
            border-radius: 5px;
            outline: 0px;
            border: 2px solid rgb(40, 39, 44);
            transition: border 0.2s ease 0s;
        }

        input:focus, select:focus{
            border: 3px solid rgb(130, 87, 229);
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        .box-check {
            display: flex;
            align-items: center;
            gap: 4px;
            width: 100%;
        }
        .comunicacoes {
            font-size: 14px;
            margin-top: 14px;
            color: rgb(204, 204, 204);
            line-height: 26px;
        }

        button[type="submit"] {
            margin-top: 20px;
            background: rgb(130, 87, 229);
            border-radius: 5px;
            border: 0px;
            color: rgb(255, 255, 255);
            font-weight: bold;
            height: 50px;
            transition: background 0.2s ease 0s, color 0.2s ease 0s;
            font-size: 19px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        
        @media (max-width: 500px) {
            form {
                padding: 10px;
            }
        }
        @media (max-width: 1230px) {
            .container {
                flex-direction: column;
            }
        } 
    </style>
    <title>Tela inicial</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>Faça o login para entrar.</h1>
        </div>

        <form method="POST">
            <h1>Login</h1>

            <input type="text" id="nome" name="nome" class="form-control" required placeholder="Seu nome"><br><br>

            <input type="text" id="senha" name="senha" class="form-control" required placeholder="Sua Senha"><br><br>

            <button type="submit" formaction="index2.php">Entrar para cadastrar</button>
            <button type="submit" formaction="index3.php">Entrar para visualizar cadastros</button>
        </form>
    </div>
</body>
</html>
