<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Usuários</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background-color: #1a1a1a;
            color: #ffffff;
            padding: 2rem;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1, h2 {
            color: #fff;
            margin-bottom: 2rem;
            font-weight: 300;
            text-align: center;
        }

        form {
            background-color: #2a2a2a;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #b3b3b3;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1.5rem;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            background-color: #404040;
            outline: none;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
            background-color: #2a2a2a;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #404040;
        }

        th {
            background-color: #333;
            color: #fff;
            font-weight: 500;
        }

        tr:hover {
            background-color: #333;
        }

        .separate-button {
            margin-top: 1rem;
        }

        .section {
            margin-bottom: 3rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h1>Cadastro de Usuários</h1>
            <form action="insert.php" method="POST">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="idade">Idade</label>
                <input type="text" id="idade" name="idade" required>

                <label for="rg">RG</label>
                <input type="text" id="rg" name="rg" required>

                <input type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="section">
            <h2>Usuários Cadastrados</h2>
            <form method="POST" action="index.php">
                <input type="submit" name="ver_usuarios" value="Atualizar Lista">
            </form>

        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Idade</th>
                <th>RG</th>
            </tr>
            <?php
            if (isset($_POST['ver_usuarios'])) {
                include 'select.php';
            }
            ?>
        </table>
        </div>
    </div>
</body>
</html>