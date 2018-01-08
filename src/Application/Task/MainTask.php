<?php

use Phalcon\Cli\Task;
use ddd\Domain\Model\Checker;

class MainTask extends Task
{
    public function mainAction(array $data)
    {
    	  if (isset($data[1]) && !empty($data[1]))
    	  {
    	      $checker = new Checker($data[1]);
    	      $success = $checker->check();
    	      
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