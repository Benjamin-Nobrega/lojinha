<!--RGM: - Nome:
    RGM: - Nome:
    RGM: - Nome: -->

    
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Cadastro de Produtos</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">            
            <a class="nav-link" href="index.php">Cadastro de Produtos</a>
            <a class="nav-link" href="produtos.php">Listagem de Produtos</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="salvar.php" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    <div class="form-group">
                        <label>Produto</label>
                        <input type="text" name="proNome" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Quantidade</label>
                        <input type="number" name="proQtd" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Valor</label>
                        <input type="text" min="0" max="100" step=".01" name="proValor"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success"type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>