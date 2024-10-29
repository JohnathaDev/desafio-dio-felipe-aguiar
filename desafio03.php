<?php 
class Heroi {
    public $nome;
    public $idade;
    public $classe;
    public function __construct($nome, $idade, $classe){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->classe = $classe;
    }
    
    public function attack() {
        $arma = "";
        
        switch ($this->classe) {
            case "Guerreiro":
                $arma = "Espada";
                
                break;
            case "Ninja":
                $arma = "Shuriken";
                break;

            case "Mago":
                $arma = "Magia";
                break;
                    
            case "Viking":
                $arma = "Machado";
                break;
            default:
                $arma = "Arma desconhecida";
            }
            
        echo "O {$this->nome}, de classe {$this->classe} atacou utilizando $arma.";
        
        }
        
    }
$hero = new Heroi("Carlos", 21, "Ninja");
$hero->attack();
?>