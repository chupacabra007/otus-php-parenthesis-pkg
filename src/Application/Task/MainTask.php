<?php

use Phalcon\Cli\Task;
use ddd\Domain\Model\Checker;

class MainTask extends Task
{
    public function mainAction(array $data)
    {
    	  if (isset($data[1]) && !empty($data[1]))
    	  {
    	      $checker = new Checker();
    	      $success = $checker->check($data[1]);
    	      
    	      if ($success) 
    	      {
        	       echo 'Parentheses are balanced!' . PHP_EOL;
    	      } else {
    	          echo 'Parentheses are not balanced!' . PHP_EOL;
    	      }
    	         
    	  } else 
    	  {
            echo 'String is empty!' . PHP_EOL;    	  
    	  }
    }   
}