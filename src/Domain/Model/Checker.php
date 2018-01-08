<?php

namespace ddd\Domain\Model;


class Checker
{
    
    public function __construct() { }
    
    
    public function check($value_)
    {
    	   $value = $this->sanitize($value_);
         $len = strlen($value);   
         $counter = 0;
         for ($i = 0; $i < $len; $i += 1)
         {
             if ($value[$i] == '(') $counter += 1;  
             else $counter -= 1;
             if ($counter < 0) return false;        
         }
         return $counter == 0;
    }
    
    
    private function sanitize($value_)
    {
        return preg_replace('/\s+/', '', $value_);    
    }
}