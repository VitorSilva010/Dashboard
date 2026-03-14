<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <main>
    <div class="header-content">
        <h2> Gestão de Usuários</h2>
        <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
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
                <!-- Exemplo de usuário -->
                <tr>
                    <td>01</td>
                    <td>Vitor</td>
                    <td>vitor.silva@example.com</td>
                    <td>Administrador</td>
                    <td>Ativo</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Editar</button>
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Maria Oliveira</td>
                    <td>maria.oliveira@example.com</td>
                    <td>Usuário</td>
                    <td>Ativo</td>
                    <td>
                        <button class="btn btn-sm btn-primary">Editar</button>
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
</body>
</html>