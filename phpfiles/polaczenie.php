<?php
function polacz()
{
    global $pol;
    $pol=mysqli_connect('localhost','root','','projekt');
    if($pol==true)
    {
        mysqli_set_charset($pol,"utf8");

        return true;
    }
    else return false;
}
?>