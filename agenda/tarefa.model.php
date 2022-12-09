<?php 
class Tarefa{
    private $id;
    private $id_status;
    private $tarefa;
    private $data_cadastro;
    private $lalal;

    public function __get($at){

        return $this->$at;

    }

    public function __set($at, $vl){
        $this->$at = $vl;
    }
}


?>