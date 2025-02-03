// Selecionar os elementos do modal de edição
const editModalOverlay = document.getElementById('editModalOverlay');
const closeEditModalBtn = document.getElementById('closeEditModalBtn');
const editUserForm = document.getElementById('editUserForm');

// Selecionar os elementos do modal de exclusão
const deleteModalOverlay = document.getElementById('deleteModalOverlay');
const closeDeleteModalBtn = document.getElementById('closeDeleteModalBtn');
const deleteUserForm = document.getElementById('deleteUserForm');

// Mostrar os dados do user no model de edição
function showEditModal(userId) {
    // Obter os dados do usuário com base no userId (isso pode ser feito através de uma chamada AJAX, por exemplo)
    const userData = getUserData(userId);

    // Preencher o formulário de edição com os dados do usuário
    document.getElementById('editUserName').value = userData.name;
    document.getElementById('editUserEmail').value = userData.email;
    // Adicione mais campos conforme necessário

    // Mostrar o modal de edição
    editModalOverlay.style.display = 'block';
}

// Função para obter os dados do usuário (exemplo fictício)
function getUserData(userId) {
    fetch('response.json')
        .then(response => response.json())
        .then(data => {
            // Encontrar o usuário com base no userId
            const user = data.find(user => user.id === userId);
            if (user) {
                return user;
            } else {
                throw new Error('User not found');
            }
        })
        .catch(error => {
            console.error('Error fetching user data:', error);
        });

    function getUserData(userId) {
        return users.find(user => user.id === userId);
    }
}
// Fazer uma chamada AJAX para obter os dados do usuário a partir de um JSON


// Fechar o modal de edição
closeEditModalBtn.addEventListener('click', () => {
    editModalOverlay.style.display = 'none';
});