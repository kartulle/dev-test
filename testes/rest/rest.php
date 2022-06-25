<?php

class CEP
{
    public static function getAddressByCep($cep)
    {

        $url = "https://api.postmon.com.br/v1/cep/" . $cep;
        return json_decode(file_get_contents($url));
        
    }
}

var_dump(CEP::getAddressByCep(57073470));

?>