<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

?>

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
        <h1>Gerenciar Utilizadores</h1>
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
            <h2>Adicionar Novo Utilizador</h2>
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

                <button type="submit" class="btn-submit">Adicionar Utilizador</button>
            </form>
        </section>

        <section id="user-list">
            <h2>Lista de Utilizadores</h2>
            <?php include('users.php') ?>
            <?php if (empty($users)): ?>
                <p>Não há utilizadores cadastrados.</p>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Cargo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($user['id']); ?></td>
                                <td><?php echo htmlspecialchars($user['username']); ?></td>
                                <td><?php echo htmlspecialchars($user['email']); ?></td>
                                <td><?php echo htmlspecialchars($user['role']); ?></td>
                                <td>
                                    <a href="editUserPage.php?id=<?php echo $user['id']; ?>" class="btn-edit">Editar</a>
                                    <a href="deleteUserPage.php?id=<?php echo $user['id']; ?>" class="btn-delete">Excluir</button>
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

    <!-- Modal para Editar Utilizador -->
    <div class="modal-overlay" id="editModalOverlay">
        <div class="modal">
            <button class="close-btn" id="closeEditModalBtn">&times;</button>
            <h2>Editar Utilizador</h2>
            <form id="editUserForm" action="users.php" method="POST">
                <input type="hidden" id="editUserId" name="id">
                <div class="form-group">
                    <label for="editUsername">Nome:</label>
                    <input type="text" id="editUsername" name="username" required>
                </div>
                <div class="form-group">
                    <label for="editEmail">Email:</label>
                    <input type="email" id="editEmail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="editRole">Cargo:</label>
                    <div class="select-wrapper">
                        <select id="editRole" name="role" required>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn-submit">Salvar Alterações</button>
            </form>
        </div>
    </div>

    <!-- Modal para Excluir Utilizador -->
    <div class="modal-overlay" id="deleteModalOverlay">
        <div class="modal">
            <button class="close-btn" id="closeDeleteModalBtn">&times;</button>
            <h2>Excluir Utilizador</h2>
            <p>Tem certeza que deseja excluir este utilizador?</p>
            <form id="deleteUserForm" action="deleteUser.php" method="POST">
                <input type="hidden" id="deleteUserId" name="id">
                <button type="submit" class="btn-submit">Excluir</button>
            </form>
        </div>
    </div>

    <!-- <script src="js/users.js"></script> -->
</body>

</html>
</body>

</html>