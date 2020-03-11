<?php

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    
    switch ($acao) {
        
        case 'inserir':
            require_once __DIR__ . '/../model/evento.php';
            require_once __DIR__ . '/../model/DAO/eventoDAO.php';
        
            $id_evento = $_POST["id_evento"];
            $id_setor = $_POST["id_setor"];
            $cod_ibge = $_POST["cod_ibge"];
            $titulo = $_POST["titulo"];
            $descricao = $_POST["descricao"];
            $data_inicio = $_POST["data_inicio"];
            $data_fim = $_POST["data_fim"];
            $data_limite = $_POST["data_limite"];
            $data_sistema = $_POST["data_sistema"];
            $data_update = $_POST["data_update"];
            $local = $_POST["local"];
            $endereco = $_POST["endereco"];
            $cep = $_POST["cep"];
            $de_contrato = $_POST["de_contrato"];
            $de_comunicacao = $_POST["de_comunicacao"];
            $obs = $_POST["obs"];
            
            echo("entrou no control");

            $eventoDAO = new EventoDAO();
            $evento= new Evento();
            
            $evento->setIdEvento($id_evento);
            $evento->setSetor($id_setor);
            $evento->setCodIbge($cod_ibge);
            $evento->setTitulo($titulo);
            $evento->setDescricao($descricao);
            $evento->setDataInicio($data_inicio);
            $evento->setDataFim($data_fim);
            $evento->setDataLimite($data_limite);
            $evento->setDataSistema($data_sistema);
            $evento->setDataUpdate($data_update);
            $evento->setLocal($local);
            $evento->setEndereco($endereco);
            $evento->setCep($cep);
            $evento->setDeContrato($de_contrato);
            $evento->setDeComunicacao($de_comunicacao);
            $evento->setDataInicio($data_inicio);
            $evento->setObs($obs);
            
            
            $eventoDAO->cadastrar($evento);
            
            header("Location:../view/evento.php?msg=Evento cadastrada com sucesso!");
            
            break;

        case 'pesquisar':
            require_once __DIR__ . '/../Model/Turma.php';
            require_once __DIR__ . '/../Model/DAO/TurmaDAO.php';
            $turmaDao = new TurmaDAO();
            $listaTurma = $turmaDao->listarTurmas();


            require '../Visao/pesquisaTurma.php';

            break;
        
        case 'relacionar':
            require_once __DIR__ . '/../Model/Turma.php';
            require_once __DIR__ . '/../Model/DAO/TurmaDAO.php';
            
            $turmaDao = new TurmaDAO();
            $listaTurma = $turmaDao->relacionarTurma();


            require '../Visao/pesquisaTurma.php';

            break;

        case 'pesquisarTurma':
            require_once __DIR__ . '/../Model/Turma.php';
            require_once __DIR__ . '/../Model/DAO/TurmaDAO.php';

            $idtur = $_POST["idtur"];
            $turmaDao = new TurmaDAO();
            $listaTurma = $turmaDao->pesquisarPorTurma($idtur);


            require_once '../Visao/pesquisaTurma.php';

            break;

        case 'consultar':
            require_once __DIR__ . '/../Model/Turma.php';
            require_once __DIR__ . '/../Model/DAO/TurmaDAO.php';

            header("Location:../Visao/consultaTurma.php");

            break;

        case 'excluir':
            require_once __DIR__ . '/../Model/Turma.php';
            require_once __DIR__ . '/../Model/DAO/TurmaDAO.php';

            $idtur = $_GET["idtur"];

            $turmaDao = new TurmaDAO();

            $turmaDao->excluirTurma($idtur);
            $listaTurma = $turmaDao->listarTurmas();
            $msg = " Turma removida com sucesso. ";
            require '../Visao/pesquisaTurma.php';

            break;

        case 'cadastrar':
            require_once __DIR__ . '/../Model/Turma.php';
            require_once __DIR__ . '/../Model/DAO/TurmaDAO.php';

            require "../Visao/formTurma.php";

            break;

        case 'editar':
            require_once __DIR__ . '/../Model/Turma.php';
            require_once __DIR__ . '/../Model/DAO/TurmaDAO.php';

            $idtur = $_GET["idtur"];

            $turmaDao = new TurmaDAO();

            $turma = $turmaDao->recuperarTurmaPorID($idtur);
            
            $msg="Turma alterada com sucesso!";
            
            require "../Visao/formTurma.php";

            break;


        case 'atualizar':
            require_once __DIR__ . '/../Model/Turma.php';
            require_once __DIR__ . '/../Model/DAO/TurmaDAO.php';

            $idtur = $_POST["idtur"];
            $dias = $_POST["dias"];
            $turno = $_POST["turno"];
            $faixaEtaria = $_POST["faixaEtaria"];
            $horario = $_POST["horario"];
            
            $turma = new Turma();

            $turma->setIdtur($idtur);
            $turma->setDias($dias);
            $turma->setTurno($turno);
            $turma->setFaixaEtaria($faixaEtaria);
            $turma->setHorario($horario);

            $turmaDao = new TurmaDAO();

            $turmaDao->atualizarTurma($turma);

            $listaTurma = $turmaDao->listarTurmas();

            $msg = "Turma alterada com sucesso.";

            require '../Visao/pesquisaTurma.php';

            break;
        default:
            break;
    }
}
?>
                    