<?php

namespace chupacabra007\parenthesis;


final class Checker
{    
    public static function check($value_)
    {
    	   $value = self::sanitize($value_);
         $len = strlen($value);   
         $counter = 0;
         
         for ($i = 0; $i < $len; $i += 1)
         {
             if ($value[$i] == '(') {
                 $counter += 1;  
             } elseif ($value[$i] == ')') {             
                 $counter -= 1;
             } else {
                 throw new \RuntimeException('Symbol \'' . $value[$i] . '\' is not allowed!');
             }
             
             if ($counter < 0) return false;        
         }
         
         return $counter == 0;
    }    
    
    private static function sanitize($value_)
    {
        return preg_replace('/\s+/', '', $value_);
    }
}