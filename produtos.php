<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <title>Cadastro de Clientes</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="clientes.php">Listagem de Clientes</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <?php
                  include("conectar.php");
                  $sql = "SELECT * FROM produtos";
                  //Aqui vamos receber o resultado do select na tabela clientes
                  $resultado = $conexao->query($sql) or die($conexao->error);
                  //Aqui vamos receber o resultado, que significa que tem algu dado na tabela clientes
                  $qtdLinhas = $resultado->num_rows;
                  //Caso tenha tenha alguma linha, vamos montar a tabela para mostrar os dados encontrados na tabela clientes
                  if($qtdLinhas > 0)
                  {
                    print "<p>Encontrou <b>$qtdLinhas</b> resultado(s)</p>";
                    print "<table class='table table-striped table-hover'>";
                    print "<tr>";
                      print "<th>Id Produto</th>";
                      print "<th>Nome Produto</th>";
                      print "<th>quantidade do Produto</th>";
                      print "<th>Valor do Produto R$</th>";
                      print "<th>Ações</th>";
                      print "</tr>";
                    //Aqui vamos perguntar se acabaram as linhas, ou sej, se chegou ao final do conteúdo da tabela clientes  
                    while($linhas = $resultado->fetch_object())
                    {
                      print "<tr>";
                      print "<td>".$linhas->cliId."</td>";
                      print "<td>".$linhas->proNome."</td>"     ;
                      print "<td>".$linhas->proQtd  ."</td>";
                      print "<td>".$linhas->proValor."</td>";
                      print "<td>
                               <button class='btn btn-success' onclick=\"location.href='editar.php?idCli=".$linhas->cliId."';\">Editar</button>
                               <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir este cliente?')){location.href='salvar.php?acao=excluir&idCli=".$linhas->cliId."';}else{false;}\">Excluir</button>
                             </td>";
                      print "</tr>";
                    }
                    print "</table>";
                  }
                  else
                  {
                    print "<p>Nenhum resultado encontrado</p>";
                  }
              ?>
          </div>
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>