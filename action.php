<?php
require_once "vendor/autoload.php";
use App\classes\Calculator;
use App\classes\OddEven;
use App\classes\Prime;

if(isset($_GET['pages']))
{
    if($_GET['pages']== 'home')
    {
        include 'pages/home.php';
    }
    elseif($_GET['pages']== 'oddeven')
    {
        include 'pages/oddeven.php';
    }
    elseif($_GET['pages']== 'prime')
    {
        include 'pages/prime.php';
    }
}
elseif (isset($_POST['btn']))
{
    $calculator= new Calculator($_POST);
    $result=$calculator->index();
    include 'pages/home.php';

}
elseif (isset($_POST['button']))
{
    $oddeven= new OddEven($_POST);
    $res=$oddeven->index();
    include 'pages/oddeven.php';

}
elseif (isset($_POST['primebtn']))
{
    $prime= new Prime($_POST);
    $reslt=$prime->index();
    include 'pages/prime.php';

}