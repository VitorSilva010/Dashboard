<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <header>

    </header>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>
        <main>

            <div class="header-content">
                <div>
                    <h2>Gestão de Usuário</h2>
                    <p>Visualizar e gerenciar as permições de usuário do sistema</p>
                </div>

                <a href="cad-usuarios.php" class="btn-add">Adicionar usuario <i class="fa-solid fa-plus"></i></a>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Acesso</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Vitor Silva</td>
                            <td>122985@unifev.edu.br</td>
                            <td>Administrador</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td>
                                <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-icon"><i class="fa-solid fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Luciana</td>
                            <td>lucian78@gmail.com</td>
                            <td>Editor</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td>
                                <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-icon"><i class="fa-solid fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Ruan</td>
                            <td>ruangabri@gmail.com</td>
                            <td>Usuario</td>
                            <td><span class="badge inativo">Inativo</span></td>
                            <td>
                                <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-icon"><i class="fa-solid fa-trash-can"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan="6" align="right">Informação da quantidade de registro</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
