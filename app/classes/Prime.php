<?php


namespace App\Classes;


class Prime
{
    protected $number;
    protected $result;
    protected $i;
    protected $j;
    public function __construct($post=null)
    {
        $this->number=$post['num'];
    }

    public function index()
    {
        if($this->number==1)
        {
           return $this->j=0;
        }
        for($this->i=2; $this->i<=$this->number/2;$this->i++)
        {
            if($this->number% $this->i ==0)
            {
                return $this->j= 0;

            }

        }
        return $this->j=1;

    }

}