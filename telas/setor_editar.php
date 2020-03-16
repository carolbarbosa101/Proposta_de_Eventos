<?php
    // Cabeçalho
    include_once("_cabecalho.php");
    ?>

<!-- Conteudo -->
<main id="main_conteudo">
  <div class="container">
    <div class="row mb-5">
      <div id="mainHeader" class="col-md-6 d-flex align-items-center">
        <span id="mainHeaderIcon">
          <i class="fas fa-globe-asia"></i>
        </span>
        <span>
          <h3 class="mb-0">Editar Setor</h3>
        </span>
      </div>

    </div>
  </div>

  <div class="container">

    <?php
                // Se a variavél de sessão existir, exibir a informação ela contem
                if(isset($_SESSION['msg'])) {
                    echo $_SESSION['msg']; // Exibir conteudo da variavel
                    unset($_SESSION['msg']); // após exibir a informação do alerta, destruir a variavel, para que ao recarregar a página o alerta não permanessa na pagina.
                }
            ?>

    <!-- FORMULARIO -->
    <form action="#" method="post">

      <div class="modal-body">

        <!-- Chave primaria para saber qual registro editar do banco | input hidden para que o usuario não visualize -->
        <div class="row">
          <div class="form-group col-md-4">
            <label for="recipient-nome" class="col-form-label">Setor:</label>
            <input 
              value="<?php echo $nome ?>" 
              name="nome" 
              placeholder="" 
              type="text" 
              class="form-control"
              maxlength="100" 
              id="recipient-nome">
          </div>

          <div class="form-group col-md-2">
            <label for="recipient-sigla" class="col-form-label">Sigla:</label>
            <input
              value="<?php echo $sigla ?>"
              name="sigla"
              placeholder=""
              type="texy"
              class="form-control"
              maxlength="10" 
              id="recipient-sigla">
          </div>


          <div class="form-group col-md-6">
            <label for="recipient-responsavel" class="col-form-label">Responsavel:</label>
            <input 
              value="<?php echo $responsavel ?>"
              name="responsavel"
              placeholder=""
              type="text"
              class="form-control"
              maxlength="100" 
              id="recipient-responsavel">
          </div>

          <div class="form-group col-md-2">
            <label for="recipient-fone1" class="col-form-label">Telefone 1:</label>
            <input 
              value="<?php echo $fone1 ?>" 
              name="fone1"
              placeholder=""
              type="text"
              class="form-control"
              maxlength="11"
              id="recipient-fone1">
          </div>

          <div class="form-group col-md-2">
            <label for="recipient-fone2" class="col-form-label">Telefone 2:</label>
            <input 
              value="<?php echo $fone2 ?>" 
              name="fone2"
              placeholder=""
              type="text"
              class="form-control"
              maxlength="11"
              id="recipient-fone2">
          </div>

          <div class="form-group col-md-8">
            <label for="recipient-email" class="col-form-label">E-mail:</label>
            <input 
              value="<?php echo $email ?>" 
              name="email"
              placeholder=""
              type="text"
              class="form-control"
              maxlength="100"
              id="recipient-email">
          </div>

        </div>

      </div>

      <div class="modal-footer">
        <a href="Setor.php" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">
          Salvar
        </button>
      </div>
  </div>

  </form>


  </div>

</main>

<?php
    // Rodape
    include_once('_rodape.php');
?>