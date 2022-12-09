<?php 

class Conexao{

    private $host = 'localhost';
    private $db_name = 'nome_do_banco_de_dados';
    private $user = 'root'; //usuário do banco de dados
    private $pass = ''; //senha do banco de dados

    public function conectar(){

        try {

            $conexao = new PDO(

                "mysql:host=$this->host;dbname=$this->db_name",
                "$this->user",
                "$this->pass"

            );

            return $conexao;

        }catch(PDOException $e){

            echo '<p>'. $e->getMessage() .'</p>';

        }
        
    }
}

?>