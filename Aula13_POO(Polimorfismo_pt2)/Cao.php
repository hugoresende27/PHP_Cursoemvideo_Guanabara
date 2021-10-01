<?php
require_once 'Lobo.php';
class Cao extends Lobo

{
    function som()
    {
        echo "<p>AOAOAOAOAOAOAOA!!!";
    }
    function reagirFrase($f)
    {
        if ($f=="Ola" || $f=="Comida")
        {
            echo ("AOAO!abana o rabo");
        }
        else
        {
            echo ("RRRRRRRRosna");
        }

    }
    function reagirHora($h,$m)
    {
        if ($h<12)
        {
            echo "<p>Abanar!!!";
        }
        else if ($h>=18)
        {
            echo "<p>Ignorar!!!";
        }
        else
        {
            echo "<p>Abanar e Ladrar!!!";
        }

        
    }
    function reagirDono($d)
    {
        if ($d)
        {
            echo "<p>ABANA";
        }
        else
        {
            echo "<p>ROSNA";
        }
    }
    function reagirIP($i,$p)
    {
        if($i>5)
        {
            if($p<10)
            {
                echo "<p>Abana!";
            }
            else
            {
                echo "<p>Ladra!";
            }
        }
        else
        {
            if ($p<10)
            {
                echo "<p>Rosna!";
            }
            else
            {
                echo "<p>Ignora";
            }
        }
        
    }


}
?>