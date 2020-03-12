<?php
    $acao = "inserir";
?>
<html>

<head>
    <title>Eventos</title>
</head>

<body>
    <h1>Eventos</h1>
    <div style="text-align:center; width:100%">
        <form action="../control/evento_control.php?acao=<?= $acao?>"><br>
            <select name="id_setor" id="id_setor">
                <option value="1">ID SETOR</option>
            </select>
            <br>
            <select name="cod_ibge" id="cod_ibge">
                <option value="1">Municipio</option>
            </select>
            <br>
            <label for="titulo">
                <input type="text" name="titulo" id="titulo" placeholder="Titulo">
            </label>
            <br>
            <label for="descricao">
                <input type="text" name="descricao" id="descricao" placeholder="descricao">
            </label>
            <br>
            <label for="data_inicio">
                <input type="date" name="data_inicio" id="data_inicio" placeholder="data_inicio">
            </label>
            <br>
            <label for="data_fim">
                <input type="date" name="data_fim" id="data_fim" placeholder="data_fim">
            </label>
            <br>
            <label for="data_limite">
                <input type="date" name="data_limite" id="data_limite" placeholder="data_limite">
            </label>
            <br>
            <label for="data_sistema">
                <input type="date" name="data_sistema" id="data_sistema" placeholder="data_sistema">
            </label>
            <br>
            <label for="data_update">
                <input type="date" name="data_update" id="data_update" placeholder="data_update">
            </label>
            <br>
            <label for="local">
                <input type="text" name="local" id="local" placeholder="local">
            </label>
            <br>
            <label for="endereco">
                <input type="text" name="endereco" id="endereco" placeholder="endereco">
            </label>
            <br>
            <label for="cep">
                <input type="text" name="cep" id="cep" placeholder="cep">
            </label>
            <br>
            <label for="de_contrato">
                <input type="text" name="de_contrato" id="de_contrato" placeholder="de_contrato">
            </label>
            <br>
            <label for="de_comunicacao">
                <input type="text" name="de_comunicacao" id="de_comunicacao" placeholder="de_comunicacao">
            </label>
            <br>
            <label for="obs">
                <input type="text" name="obs" id="obs" placeholder="obs">
            </label>
            <br>
            <button type="submit">Enviar</button>
            <p><?php echo($acao); ?></p>
        </form>
    </div>
</body>

</html>
