document.querySelectorAll('.addcart').forEach(button => {
    button.addEventListener('click', () => {
        const productId = button.getAttribute('data-id');

        fetch('cartPage.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ id: productId })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Produto adicionado ao carrinho com sucesso!');
                } else {
                    alert('Erro ao adicionar produto ao carrinho.');
                }
            })
            .catch(error => {
                console.error('Erro:', error);
            });
    });
});