<?php
class FileOwners
    {
        public static function groupByOwners($files)
        {
            $auxiliar = [];
            
            foreach($files as $chave => $valor){
                if(!array_key_exists($valor, $auxiliar)){
                    $auxiliar[$valor] = $chave;
                }
                else{
                    if(gettype($auxiliar[$valor]) != 'array'){
                        $auxiliar[$valor] = array($auxiliar[$valor]);
                    }
                    array_push($auxiliar[$valor], $chave);
                }
            }
            return $auxiliar;
        }        
    }
    $files = array
    (
        "Input.txt" => "Jose",
        "Code.py" => "Joao",
        "Output.txt" => "Jose",
        "Click.js" => "Maria",
        "Out.php" => "maria",
    );
    var_dump(FileOwners::groupByOwners($files));
?>