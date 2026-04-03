<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <title>Dashboard</title>
</head>
<body>

    <div class="dashboard-container">

        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="usuarios.php">categorias</a></li>
                <li><a href="postagens.php">Postagens</a></li>
                <li><a href="estoque.php">Usuários</a></li>
            </ul>

            <div class="perfil-usuario">
                <img src="FE.png" alt="Avatar do usuário">
                <span>Felipe Abreu</span>
            </div>
        </nav>

        <main>
            <section class="container-cards">

                <article class="card">
                    <h2>Módulo de Usuários</h2>
                    <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                    <a href="usuarios.php" class="btn">Acessar</a>
                </article>

                <article class="card">
                    <h2>Relatórios de Vendas</h2>
                    <p>Acompanhe os gráficos de desempenho deste mês.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

                <article class="card">
                    <h2>Configurações do Servidor</h2>
                    <p>Ajuste as portas do Apache e o banco de dados.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

            </section>
        </main>

    </div>

    <?php include 'rodape.php'; ?>

</body>
</html>