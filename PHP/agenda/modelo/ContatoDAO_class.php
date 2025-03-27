<?php

use Dba\Connection;

    include_once("ConnectionFactory_class.php");
    include_once("Contato_class.php");

    class ContatoDAO{
        
        public $con = null;

        public function __construct(){
            $conF = new ConnectionFactory();
            $this->con = $conF->getConnection();
        }
    }

?>