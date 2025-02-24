<?php
namespace Project\Class;
use Project\Interface\ComponentInterface_5;
use Project\Interface\ComponentInterface_6;
use Project\Interface\ComponentInterface_7;
use Project\Interface\ComponentInterface_8;
use Project\Interface\ComponentInterface_9;

class Class_5 {
    
    protected   $attr_1,
                $attr_2;

    public function __construct(string $arg_1, string $arg_2) {
        
        $this->attr_1 = $arg_1;
        $this->attr_2 = $arg_2;

    }

    public function test_Interface_5()
    {

        echo $this->attr_1." : ".$this->attr_2."<BR><BR>";

    }

}