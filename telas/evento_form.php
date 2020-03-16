<?php
    // Cabeçalho
    include_once("_cabecalho.php");
    ?>

<!-- Conteudo -->
<b>
<main id="main_conteudo">
  <div class="container">
    <div class="row mb-5">
      <div id="mainHeader" class="col-md-6 d-flex align-items-center">
        <span id="mainHeaderIcon">
          <i class="fas fa-globe-asia"></i>
        </span>
        <span>
          <h3 class="mb-0">Cadastrar Evento</h3>
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
            <input 
              value="<?php echo $titulo ?>"
              name="titulo"
              placeholder=""
              type="text" 
              class="form-control"
              maxlength="14" id="recipient-titulo">
          </div>

          <div class="form-group col-md-3">
            <label for="recipient-data_inicio" class="col-form-label">Data de Inicio:</label>
            <input 
              value="<?php echo $data_inicio ?>"
              name="data_inicio"
              placeholder=""
              type="datetime-local"
              class="form-control"
              id="recipient-data_inicio">
          </div>


          <div class="form-group col-md-3" >
            <label for="recipient-data_fim" class="col-form-label">Data do Fim:</label>
            <div class='input-group date' id='datetimepicker1'>
            <input 
              value="<?php echo $data_fim ?>"
              name="data_fim"
              placeholder=""
              type="text"
              class="form-control"
              id="recipient-data_fim">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </div>
          </div>

          <div class="form-group col-md-7">
            <label for="recipient-local" class="col-form-label">Nome do Local:</label>
            <input 
              value="<?php echo $local ?>"
              name="local"
              placeholder=""
              type="text"
              class="form-control"
              maxlength="100" id="recipient-local">
          </div>

          <div class="form-group col-md-1">
            <label for="recipient-uf" class="col-form-label">UF:</label>
            <input 
              value="<?php echo $uf ?>"
              name="uf"
              placeholder=""
              type="text"
              class="form-control"
              maxlength="2"
              id="recipient-uf">
          </div>

          <div class="form-group col-md-4">
            <label for="recipient-municipio" class="col-form-label">Municipio:</label>
            <input 
              value="<?php echo $municipio ?>"
              name="municipio"
              placeholder=""
              type="text"
              class="form-control"
              maxlength="2" id="recipient-municipio">
          </div>

          <div class="form-group col-md-9">
            <label for="recipient-endereco" class="col-form-label">Endereco:</label>
            <input 
              value="<?php echo $endereco ?>"
              name="endereco"
              placeholder=""
              type="text"
              class="form-control"
              maxlength="500" id="recipient-endereco">
          </div>

          <div class="form-group col-md-3">
            <label for="recipient-cep" class="col-form-label">Cep:</label>
            <input 
              value="<?php echo $cep ?>"
              name="cep"
              placeholder=""
              type="text"
              class="form-control" maxlength="8"
              id="recipient-cep">
          </div>


          <div class="form-group col-md-12">
            <label for="recipient-obs" class="col-form-label">Observação:</label>
            <textarea 
              value="<?php echo $obs ?>"
              name="obs"
              placeholder=""
              type="text"
              class="form-control"
              maxlength="5000"
              id="recipient-obs"></textarea>
          </div>

        </div>
        <hr>
        <span>
          <h3 class="mb-0">Demandas do contrato de Eventos</h3>
        </span>
        <br>
        <div class="">
          <input type="checkbox" value="1" id="1" name="1" >
          <label for="1"> Transporte (van, ônibus, carro, etc)</label><br>
          
          <input type="checkbox" value="1" id="2" name="2" >
          <label for="2"> Alimentação (água, brunch, coffe break, etc)</label><br>
          
          <input type="checkbox" value="1" id="3" name="3" >
          <label for="3"> Iluminação (spot, refletor, etc)</label><br>

          <input type="checkbox" value="1" id="4" name="4" >
          <label for="4"> Montagem de Estruturas (boxtruss, banheiros químicos, barricada, elétrico, piso, tenda, etc)</label><br>
        
          <input type="checkbox" value="1" id="5" name="5" >
          <label for="5"> Mobiliário (mesa, balcão, cadeiras, etc)</label><br>

          <input type="checkbox" value="1" id="6" name="6" >
          <label for="6"> Paisagismo (arranjos, vasos, etc)</label><br>

          <input type="checkbox" value="1" id="7" name="7" >
          <label for="7"> Escritório (flipchart, bandeiras, etc)</label><br>

          <input type="checkbox" value="1" id="8" name="8" >
          <label for="8"> Informático (link de internet, notebook, rede física, de internet, access point, switch, etc)</label><br>

          <input type="checkbox" value="1" id="9" name="9" >
          <label for="9"> Material gráfico(adesivo, banner, camisetas, blimps, crachá, faixa, lona, placas, etc)</label><br>
           
          <input type="checkbox" value="1" id="10" name="10" >
          <label for="10"> Serviços especializados (limpeza, brigadista, carregadores, designer, editor de filmagem, libras, mestre de cerimônias, recepcionistas, operadores de som /iluminação, etc)</label><br>

          <input type="checkbox" value="1" id="11" name="11" >
          <label for="11"> Equipamentos diversos (dvd player, televisor, frigobar, gerador, projetor, etc)</label><br>

          <input type="checkbox" value="1" id="12" name="12" onchange="myFunction('myCheck1')"  >
          <label for="12"> Outros: </label><br>
          <input type="text" name="teste" id="myCheck1" disabled />

        </div>
        <hr>
        <span>
          <h3 class="mb-0">Demandas do Comunicação Social</h3>
        </span>
        <br>
        <div class="">
          <input type="checkbox" value="1" id="13" name="13" >
          <label for="13"> Não há demanda de Cmunicação Social</label><br>
          
          <input type="checkbox" value="1" id="14" name="14" >
          <label for="14"> Layout - Criação de marca</label><br>
          
          <input type="checkbox" value="1" id="15" name="15" >
          <label for="15"> Layout - Criação de Identidade Visual</label><br>

          <input type="checkbox" value="1" id="16" name="16" >
          <label for="16"> Material Gráfico - Edição de folder e/ou cartilha</label><br>
        
          <input type="checkbox" value="1" id="17" name="17" >
          <label for="17"> Material Gráfico - Edição de livreto</label><br>

          <input type="checkbox" value="1" id="18" name="18" >
          <label for="18"> Material Gráfico - Edição de livro</label><br>

          <input type="checkbox" value="1" id="19" name="19" >
          <label for="19"> Material Gráfico - Impressão de folder e/ou cartilha (discriminar a quantidade estimada no campo seguinte)</label><br>

          <input type="checkbox" value="1" id="20" name="20" >
          <label for="20"> Material Gráfico - Impressão de livreto (discriminar a quantidade estimada no campo seguinte)</label><br>

          <input type="checkbox" value="1" id="21" name="21" >
          <label for="21"> Material Gráfico - Impressão do livro (discriminar a quantidade estimada no campo seguinte)</label><br>
           
          <input type="checkbox" value="1" id="22" name="22" >
          <label for="22"> Audiovisual - Produção de vídeo</label><br>

          <input type="checkbox" value="1" id="23" name="23" >
          <label for="23"> Audiovisual - Gravação de evento</label><br>

          <input type="checkbox" value="1" id="24" name="24" >
          <label for="24"> Jornalismo - Elaboração de matérias </label><br>

          <input type="checkbox" value="1" id="25" name="25" onchange="myFunction('myCheck2')" >
          <label for="25"> Outros: </label><br>
          <input type="text" name="teste" id="myCheck2" disabled />

        </div>
      </div>

      <div class="modal-footer">
        <a href="Evento.php" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-info">
          Salvar
        </button>
        <button type="submit" class="btn btn-primary">
          Enviar
        </button>
      </div>
  </div>

  </form>


  </div>

</main>
</b>
<script>
function myFunction(valor) {
  if(document.getElementById(valor).disabled == true){
  	document.getElementById(valor).disabled = false;
  }else{
  	document.getElementById(valor).disabled = true;
  }
}

  $(function () {
    $('#datetimepicker1').datetimepicker();
 });
</script>

<?php
    // Rodape
    include_once('_rodape.php');
?>