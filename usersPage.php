<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/users.css">
    <script src="https://kit.fontawesome.com/85191b6578.js" crossorigin="anonymous"></script>
    <title>Gerenciar Utilizadores</title>
</head>

<body>
    <header>
        <h1>Gerenciar Usuários</h1>
        <nav>
            <ul>
                <li><a href="homePage.php">Home</a></li>
                <li><a href="usersPage.php">Users</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="add-user">
            <h2>Adicionar Novo Usuário</h2>
            <form action="addUsers.php" method="POST">
                <div class="form-group">
                    <label for="username">Nome:</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="role">Cargo:</label>
                    <div class="select-wrapper">
                        <select id="role" name="role" required>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Adicionar Usuário</button>
            </form>
        </section>

        <section id="user-list">
            <h2>Lista de Usuários</h2>
            <?php include('users.php') ?>
            <?php if (empty($users)): ?>
                <p>Não há utilizadores logados.</p>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Cargo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($user['username']); ?></td>
                                <td><?php echo htmlspecialchars($user['email']); ?></td>
                                <td><?php echo htmlspecialchars($user['role']); ?></td>
                                <td>
                                    <a href="editUser.php?id=<?php echo $user['id']; ?>" class="btn-edit">Editar</a>
                                    <a href="deleteUser.php?id=<?php echo $user['id']; ?>" class="btn-delete">Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Loja Online. Todos os direitos reservados.</p>
    </footer>
</body>

</html>