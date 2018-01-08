<?php

namespace ddd\Domain\Model;


class Checker
{
    private $value;

    public function __construct($value_)
    {
        $this->value = $this->sanitize($value_);
    }
    
    
    public function check()
    {
         $len = strlen($this->value);   
         $counter = 0;
         for ($i = 0; $i < $len; $i += 1)
         {
             if ($this->value[$i] == '(') $counter += 1;  
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