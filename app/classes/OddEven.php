<?php


namespace App\Classes;


class OddEven
{
    protected $firstNumber;
    protected $lastNumber;
    protected $type;
    protected $result;
    protected $i;
    public function __construct($data=null)
    {
        if($data)
        {
            $this->firstNumber= $data['first_number'];
            $this->lastNumber= $data['last_number'];
            $this->type= $data['option'];
        }

    }


//    public function index()
//    {
//        if($this->type='odd')
//        {
//            for($this->i=$this->firstNumber; $this->i<= $this->lastNumber; $this->i++)
//            {
//                if($this->i%2 != 0)
//                {
//                    $this->result .=$this->i.' ';
//                }
////                else
////                {
////                    echo "Wrong Option Chosen";
////                }
//
//            }
//            return $this->result;
//
//
//        }
//
//        elseif ($this->type='even')
//
//        {
//            for($this->i=$this->firstNumber; $this->i<= $this->lastNumber; $this->i++)
//            {
//                if($this->i%2 == 0)
//                {
//                    $this->result .= $this->i.' ';
//                }
//
////                else
////                {
////                    echo "Wrong Option Chosen";
////                }
//
//
//            }
//            return $this->result;
//
//
//        }
//
//    }

    public function index()
    {
        if ($this->firstNumber < $this->lastNumber)
        {
            for($this->i=$this->firstNumber; $this->i<=$this->lastNumber; $this->i++)
            {
                if($this->type=='even')
                {
                    if($this->i%2==0)
                    {
                        $this->result .= $this->i. ' ';
                    }
                }
                elseif ($this->type=='odd')
                {
                    if($this->i%2!=0)
                    {
                        $this->result .= $this->i. ' ';
                    }

                }
            }


        }
        elseif($this->firstNumber > $this->lastNumber)
        {
            for($this->i=$this->firstNumber; $this->i<=$this->lastNumber; $this->i--)
            {
                if($this->type=='even')
                {
                    if($this->i%2==0)
                    {
                        $this->result .= $this->i. ' ';
                    }
                }
                elseif ($this->type=='odd')
                {
                    if($this->i%2!=0)
                    {
                        $this->result .= $this->i. ' ';
                    }

                }
            }


        }
        return $this->result;
    }

}