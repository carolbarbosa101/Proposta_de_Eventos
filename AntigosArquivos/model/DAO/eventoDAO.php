<?php
require_once 'conexao.php';
class EventoDAO {
    
    public function cadastrar(Evento $cadastrarEvento) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO evento (id_evento, id_setor, cod_ibge, titulo, descricao, data_inicio, data_fim, data_limite, data_sistema, data_update, local, endereco, cep, de_contrato, de_comunicacao, obs) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrarEvento->getIdEvento());
            $stmt->bindValue(2, $cadastrarEvento->getIdSetor());
            $stmt->bindValue(3, $cadastrarEvento->getCodIbge());
            $stmt->bindValue(4, $cadastrarEvento->getTitulo());
            $stmt->bindValue(5, $cadastrarEvento->getDescricao());
            $stmt->bindValue(6, $cadastrarEvento->getDataInicio());
            $stmt->bindValue(7, $cadastrarEvento->getDataFim());
            $stmt->bindValue(8, $cadastrarEvento->getDataLimite());
            $stmt->bindValue(9, $cadastrarEvento->getDataSistema());
            $stmt->bindValue(10, $cadastrarEvento->getDataUpdate());
            $stmt->bindValue(11, $cadastrarEvento->getLocal());
            $stmt->bindValue(12, $cadastrarEvento->getEndereco());
            $stmt->bindValue(13, $cadastrarEvento->getCep());
            $stmt->bindValue(14, $cadastrarEvento->getDeContrato());
            $stmt->bindValue(15, $cadastrarEvento->getDeComunicacao());
            $stmt->bindValue(16, $cadastrarEvento->getObs());
           
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function update(ClassEntidade $editarEntidade) {
        
    //var_dump($editarEntidade);
    //die();
        try {
            $pdo = Conexao::getInstance();
            $sql = "UPDATE entidade SET nome = ?, endereco = ?, numero = ?, bairro = ?, cep = ?, nome_municipio = ?, uf =? , observacao = ? WHERE cnpj = ? ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $editarEntidade->getNome());
            $stmt->bindValue(2, $editarEntidade->getEndereco());
            $stmt->bindValue(3, $editarEntidade->getNumero());
            $stmt->bindValue(4, $editarEntidade->getBairro());
            $stmt->bindValue(5, $editarEntidade->getCep());
            $stmt->bindValue(6, $editarEntidade->getNome_municipio());
            $stmt->bindValue(7, $editarEntidade->getUf());
            $stmt->bindValue(8, $editarEntidade->getObservacao());

            $stmt->bindValue(9, $editarEntidade->getCnpj());
            

            //var_dump($editarEntidade);
            //die();
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function listarEntidade(){
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT cnpj, nome, endereco, numero, bairro, cep, nome_municipio, uf, observacao FROM entidade ORDER BY cnpj ASC";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(); // fetchAll() retorna um array contendo varios dados. 
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }

    public function visualizarEntidade(ClassEntidade $visualizarEntidade){
        try {
            $pdo = Conexao::getInstance();

            $sql = "SELECT cnpj, nome, endereco, numero, bairro, cep, nome_municipio, uf, observacao 
            FROM entidade 
            WHERE cnpj = ? 
            LIMIT 1";

            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(1, $visualizarEntidade->getCnpj());

            $stmt->execute();
            return $stmt->fetchAll(); // fetchAll() retorna um array contendo varios dados. 
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }

    // apagar registro pelo id
    public function apagarEntidade(ClassEntidade $apagarEntidade) {
        //var_dump($apagarEntidade);
            //die;
        try {
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM entidade WHERE cnpj = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $apagarEntidade->getCnpj());
           
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function todosEntidade(){
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT cnpj, nome FROM entidade ORDER BY nome ASC";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(); // fetchAll() retorna um array contendo varios dados. 
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }

}