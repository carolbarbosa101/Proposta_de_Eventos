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
          <h3 class="mb-0">Editar Eventos</h3>
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
          <div class="form-group col-md-6">
            <label for="recipient-titulo" class="col-form-label">Titulo:</label>
            <input value="<?php echo $titulo ?>" name="titulo" placeholder="" type="text" class="form-control"
              maxlength="14" id="recipient-titulo">
          </div>

          <div class="form-group col-md-3">
            <label for="recipient-data_inicio" class="col-form-label">Data de Inicio:</label>
            <input value="<?php echo $data_inicio ?>" name="data_inicio" placeholder="" type="date" class="form-control"
              id="recipient-data_inicio">
          </div>


          <div class="form-group col-md-3">
            <label for="recipient-data_fim" class="col-form-label">Data do Fim:</label>
            <input value="<?php echo $data_fim ?>" name="data_fim" placeholder="" type="date" class="form-control"
              id="recipient-data_fim">
          </div>

          <div class="form-group col-md-7">
            <label for="recipient-local" class="col-form-label">Nome do Local:</label>
            <input value="<?php echo $local ?>" name="local" placeholder="" type="text" class="form-control"
              maxlength="100" id="recipient-local">
          </div>

          <div class="form-group col-md-1">
            <label for="recipient-uf" class="col-form-label">UF:</label>
            <input value="<?php echo $uf ?>" name="uf" placeholder="" type="text" class="form-control" maxlength="2"
              id="recipient-uf">
          </div>

          <div class="form-group col-md-4">
            <label for="recipient-municipio" class="col-form-label">Municipio:</label>
            <input value="<?php echo $municipio ?>" name="municipio" placeholder="" type="text" class="form-control"
              maxlength="2" id="recipient-municipio">
          </div>

          <div class="form-group col-md-9">
            <label for="recipient-endereco" class="col-form-label">Endereco:</label>
            <input value="<?php echo $endereco ?>" name="endereco" placeholder="" type="text" class="form-control"
              maxlength="500" id="recipient-endereco">
          </div>

          <div class="form-group col-md-3">
            <label for="recipient-cep" class="col-form-label">Cep:</label>
            <input value="<?php echo $cep ?>" name="cep" placeholder="" type="text" class="form-control" maxlength="8"
              id="recipient-cep">
          </div>


          <div class="form-group col-md-12">
            <label for="recipient-obs" class="col-form-label">Observação:</label>
            <textarea value="<?php echo $obs ?>" name="obs" placeholder="" type="text" class="form-control"
              maxlength="5000" id="recipient-obs"></textarea>
          </div>

        </div>

      </div>

      <div class="modal-footer">
        <a href="Evento.php" class="btn btn-secondary">Cancelar</a>
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