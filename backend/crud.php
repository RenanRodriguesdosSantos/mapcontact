<?php
include("conexao.php");
class Crud extends Conexao{
    private $crud;
    private $contador;

    private function preparedStatemants($query,$parametros){
        $this->countParametros($parametros);
        $this->crud = $this->conectaBD()->prepare($query);
        if($this->contador > 0){
            for($i=1; $i <= $this->contador; $i++){
                $this->crud->bindValue($i,$parametros[$i-1]);
            }
        }   
        $this->crud->execute();
    }
    private function countParametros($parametros){
        $this->contador = count($parametros);
    }
    public function insert($tabela, $campos, $condicao, $parametros){
        $this->preparedStatemants("insert into $tabela $campos values $condicao;", $parametros);
        return $this->crud;
    }
    public function select($tabela, $campos, $condicao, $parametros){
        $this->preparedStatemants("select $campos from $tabela $condicao", $parametros);
        return $this->crud;
    }
    public function update($tabela,$campos,$condicao,$parametros){
        $this->preparedStatemants("update $tabela set $campos $condicao;",$parametros);
        return $this->crud;
    }
    public function delete($tabela,$condicao,$parametros){
        $this->preparedStatemants("delete from $tabela $condicao",$parametros);
        return $this->crud;
    }
}