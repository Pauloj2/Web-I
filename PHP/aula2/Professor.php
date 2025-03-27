    <?php 
    include_once "Funcionario.php";

    class Professor extends Funcionario{
        var $disciplina;

        public function __construct($n, $s, $d){
            parent::__construct($n, $s);
            $this->disciplina = $d;
        }
        public function setDisciplina($disciplina){
            $this->disciplina = $disciplina;
        }
        static function teste(){
            return "Método de classe";
        }
    }

?>