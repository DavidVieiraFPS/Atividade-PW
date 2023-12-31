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
        <a href="visualizarCliente.php"><i class="fas fa-user"></i><br>Cliente</a>
        <a href="visualizarFuncionario.php"><i class="fas fa-user-tie"></i><br>Funcionário</a>
        <a href="visualizarFornecedor.php"><i class="fas fa-truck"></i><br>Fornecedor</a>
        <a href="visualizarProduto.php"><i class="fas fa-box"></i><br>Produto</a>
        <a href="visualizarUsuario.php"><i class="fas fa-user-circle"></i><br>Usuário</a>
        <a href="index.php" onclick="confirmLogout()"><i class="fas fa-sign-out-alt"></i><br>Sair</a>
    </div>

    <div id="content">
        <h1>Tela inicial </h1>
        <p>Aqui você poderá ver os cadastros.</p>

     <img src="https://i.kym-cdn.com/entries/icons/facebook/000/037/984/thiccomniman.jpg"
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
               // Lógica de logout aqui
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