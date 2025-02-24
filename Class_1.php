<?php
namespace Project\Class;
use Project\Interface\ComponentInterface_1;
use Project\Interface\ComponentInterface_2;
use Project\Interface\ComponentInterface_3;
use Project\Interface\ComponentInterface_4;
use Project\Interface\ComponentInterface_5;
use Project\Interface\ComponentInterface_6;
use Project\Interface\ComponentInterface_7;
use Project\Interface\ComponentInterface_8;
use Project\Interface\ComponentInterface_9;

class Class_1 {
   
    
    protected   $attr_1,
                $attr_2;

    public function __construct(string $arg_1, string $arg_2) {
        
        $this->attr_1 = $arg_1;
        $this->attr_2 = $arg_2;

    }

    /**
     * NB : Les Interfaces ne sont qu'un jus syntaxique qui donne l'impression de réaliser un héritage multiple. Au 
     * lieu d'essayer de programmer en PHP tel que l'on programme avec le language C ou C++ pourquoi ne profitez-vous 
     * de la puissance de PHP ?
     */ 
    public function test_Interface_1()
    {

        echo $this->attr_1." : ".$this->attr_2."<BR><BR>";

    }

}
