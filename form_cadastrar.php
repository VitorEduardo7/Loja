<head>
<link rel="stylesheet" href="css/style_cadastro.css">
</head>

<?php 
    include 'cabecalho.php';
?>
<body>
    <div class="container">
        <h2>Cadastro de Produto</h2>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do produto" required>
            </div>
            <div class="mb-3">
                <input type="text" name="preco" class="form-control" placeholder="Digite o preço do produto" required>
            </div>
            <div class="mb-3">
                <input type="text" name="quantidade" class="form-control" placeholder="Digite a quantidade" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <a href="index.php" class="btn btn-warning">Voltar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
