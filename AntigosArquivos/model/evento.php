<?php
class Evento{
    private $id_evento, $id_setor, $cod_ibge, $titulo, $descricao, $data_inicio, 
    $data_fim, $data_limite, $data_sistema, $data_update, $local, $endereco, $cep, 
    $de_contrato, $de_comunicacao, $obs;

    
    public function getIdEvento() {
        return $this->id_evento;
    }

    public function setIdEvento($id_evento) {
        $this->id_evento = $id_evento;
    }

    public function getIdSetor() {
        return $this->id_setor;
    }

    public function setIdSetor($id_setor) {
        $this->id_setor = $id_setor;
    }

    public function getCodIbge() {
        return $this->cod_ibge;
    }

    public function setCodIbge($cod_ibge) {
        $this->cod_ibge = $cod_ibge;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getDataInicio() {
        return $this->data_inicio;
    }

    public function setDataInicio($data_inicio) {
        $this->data_inicio = $data_inicio;
    }

    public function getDataFim() {
        return $this->data_fim;
    }

    public function setDataFim($data_fim) {
        $this->data_fim = $data_fim;
    }

    public function getDataLimite() {
        return $this->data_limite;
    }

    public function setDataLimite($data_limite) {
        $this->data_limite = $data_limite;
    }

    public function getDataSistema() {
        return $this->data_sistema;
    }

    public function setDataSistema($data_sistema) {
        $this->data_sistema = $data_sistema;
    }

    public function getDataUpdate() {
        return $this->data_update;
    }

    public function setDataUpdate($data_update) {
        $this->data_update = $data_update;
    }

    public function getLocal() {
        return $this->local;
    }

    public function setLocal($local) {
        $this->local = $local;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getDeContrato() {
        return $this->de_contrato;
    }

    public function setDeContrato($de_contrato) {
        $this->de_contrato = $de_contrato;
    }

    public function getDeComunicacao() {
        return $this->de_comunicacao;
    }

    public function setDeComunicacao($de_comunicacao) {
        $this->de_comunicacao = $de_comunicacao;
    }

    public function getObs() {
        return $this->obs;
    }

    public function setObs($obs) {
        $this->obs = $obs;
    }
}