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
                    <li><a href="estoque.php">Usuario</a></li>
                </ul> 

                <div class="perfil-usuario">

                    <img src="FE.png" alt="Avatar do usuário">
                    <span>Felipe Abreu</span>
                </div>

            </nav>
         <main>
        <section class="card-form"> 
            <div class="form-header">
                <h2>Adicionar Categoria</h2>
                <p>Preencha os campos abaixo para criar um novo usuário no sistema.</p>
            </div>
            <form action="insere-usuario.php" method="POST">
            <div class="form-group">
                <label for="nome">Adicionar categoria</label>
                <input type="text" id="nome" name="nome" placeholder="Nome de categoria" required>
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
            </div>

            <div class="form-row">
                <div class="form-group flex-1">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <div class="form-group flex-1">
                    <label for="nivel">Nível</label>
                    <select id="nivel" name="nivel">
                        <option value="1">Usuário</option>
                        <option value="2">Administrador</option>
                    </select>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-save">Finalizar Cadastro</button>
                <a href="index.php" class="btn-cancel">Cancelar</a>
            </div>
        </form>
        </section>
    </main>
    </div>
    <?php include 'rodape.php'; ?>
</body>
</html>