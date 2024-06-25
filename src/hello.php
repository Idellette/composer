<?php

namespace App;
class Hello
{
    public string $message;
    
    public function talk(string $lang = 'fr'): string
    {
       
            $message = 'Hello World ! ';
        
        
        return $message;
    }

}