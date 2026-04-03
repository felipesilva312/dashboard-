<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuários</title>
    <link rel="stylesheet" href="tabelas.css">
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <nav>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="usuarios.php">Categorias</a></li>
                    <li><a href="postagens.php">Postagens</a></li>
                    <li><a href="estoque.php">Usuários</a></li>
                </ul> 

                <div class="perfil-usuario">

                    <img src="FE.png" alt="Avatar do usuário">
                    <span>Felipe Abreu</span>
                </div>

            </nav>
        <main>
        <div class="header-content">
            <h2>Gestão de categorias</h2>
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
                    <tr>
                        <td>01</td>
                        <td>Eric Freitas</td>
                        <td>eric@unifev.edu.br</td>
                        <td>Administrador</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Ana Souza</td>
                        <td>ana.souza@email.com</td>
                        <td>Editor</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Carlos Lima</td>
                        <td>carlos.lima@servidor.com</td>
                        <td>Usuário</td>
                        <td><span class="badge inativo">Inativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                    <td colspan="6" align="right"><a href="cad-categoria.php" class="btn-add"><i class="fa-solid fa-plus"></i> Adicionar Categoria</a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </main>
    </div>
    <?php include 'rodape.php'; ?>
</body>
</html>