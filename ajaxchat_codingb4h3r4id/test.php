<?php

trait traitname {
    function traitmiras(){
      echo "trait adi&nbsp;".__TRAIT__;  
    }
}



function testMessage(){
    $parval = func_get_args();
    foreach ($parval as $result):
    echo $result."<br>";
    endforeach;
}
testMessage("salam","necesen","aye","aloo","ala baxda");
