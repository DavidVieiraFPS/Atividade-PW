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
            transition: width 0.3s ease; 
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
            transition: margin-left 0.3s ease; 
        }

        #menu-toggle {
            display: none;
            position: fixed;
            left: 15px;
            top: 15px;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }

        #modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .btn-modal {
            margin-top: 10px;
            cursor: pointer;
            padding: 8px 16px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
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

            #menu-toggle {
                display: block;
            }

            body.menu-open #menu {
                width: 100%;
            }

            body.menu-open #content {
                margin-left: 0;
            }
        }
    </style>
    <title>Menu</title>
</head>
<body>

    <div id="menu-toggle" onclick="toggleMenu()">&#9776;</div>

    <div id="menu">
        <a href="cadastroCliente.php"><i class="fas fa-user"></i><br>Cliente</a>
        <a href="cadastroFuncionario."><i class="fas fa-user-tie"></i><br>Funcionário</a>
        <a href="cadastroFornecedor.php"><i class="fas fa-truck"></i><br>Fornecedor</a>
        <a href="cadastroProduto.php"><i class="fas fa-box"></i><br>Produto</a>
        <a href="cadastroUsuario.php"><i class="fas fa-user-circle"></i><br>Usuário</a>
        <a href="index.php" onclick="confirmLogout()"><i class="fas fa-sign-out-alt"></i><br>Sair</a>
    </div>

    <div id="content">
        <h1>Tela inicial </h1>
        <p>Aqui você poderá fazer os seus cadastros.</p>

     <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/1b82ba2b-aff7-44e6-9afe-a57a5c42014d/dfw8rtm-58a47a78-c21b-48ce-aef5-0660dff326e1.png/v1/fill/w_886,h_902/omni_man_render_by_kingevan210_dfw8rtm-pre.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTMwMyIsInBhdGgiOiJcL2ZcLzFiODJiYTJiLWFmZjctNDRlNi05YWZlLWE1N2E1YzQyMDE0ZFwvZGZ3OHJ0bS01OGE0N2E3OC1jMjFiLTQ4Y2UtYWVmNS0wNjYwZGZmMzI2ZTEucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.ltgSVg_7fx3_V9NUEqqKOwai8Z1KZ-Bi2I3bo_JxyxU"
    </div>

    <!-- Modal -->
    <div id="modal">
        <p>Tem certeza que deseja sair?</p>
        <button class="btn-modal" onclick="logout()">Sim</button>
        <button class="btn-modal" onclick="closeLogoutModal()">Não</button>
    </div>

    <div id="overlay" class="overlay" onclick="closeLogoutModal()"></div>

    <script>
        function toggleMenu() {
            document.body.classList.toggle('menu-open');
        }

        function confirmLogout() {
            document.getElementById('modal').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function logout() {
          
            alert('Logout realizado com sucesso!');
            closeLogoutModal();
        }

        function closeLogoutModal() {
            document.getElementById('modal').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
</body>
</html>