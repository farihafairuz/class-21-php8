<?php


namespace App\classes;


class Calculator
{
    protected $firstNumber;
    protected $lastNumber;
    protected $option;
    protected $result;

    public function __construct($post=null)
    {
        if ($post)
        {
            $this->firstNumber= $post['first_number'];
            $this->lastNumber= $post['last_number'];
            $this->option= $post['option'];
        }

    }
    protected function add()
    {
        return $this->firstNumber+ $this->lastNumber;

    }
    protected function subtract()
    {
        return $this->firstNumber - $this->lastNumber;

    }
    protected function multiply()
    {
        return $this->firstNumber * $this->lastNumber;

    }
    protected function division()
    {
        return $this->firstNumber / $this->lastNumber;

    }
    protected function mod()
    {
        return $this->firstNumber % $this->lastNumber;

    }

    public function index()
    {
     switch ($this->option)
     {
         case '+':
             $this->result= $this->add();
             break;

         case '-':
             $this->result= $this->subtract();
             break;

         case '*':
             $this->result= $this->multiply();
             break;

         case '/':
             $this->result= $this->division();
             break;

         case '%':
             $this->result= $this->mod();
             break;
     }
     return $this->result;

    }

}