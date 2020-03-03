<?php 
if (isset($_GET['s']))
{
    $s=$_GET['s'];
    switch($s)
    {
            case'arama.php':
            include("getmezblog/arama.php");
            break; 
    }
}



?>