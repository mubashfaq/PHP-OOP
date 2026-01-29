<?php

// callstatic is like call but  call for normal method and callstatic for static method

class callStatic{
    private static function name($name){
        echo "My name is $name";
    }

    public static function __callStatic($method, $args){
        if(method_exists(self::class, $method)){
            return call_user_func_array([self::class, $method], $args);
        }else{
            echo "The function you accessed '$method' not present.";
        }
    }
}

callStatic::call('nomi');