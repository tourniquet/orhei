<?php
$handle = @fopen("maxime.txt", "r");
$i = -1;
if($handle)
{
        while(!feof($handle))
        {
                $i++;
                $buffer= fgets($handle, 4096);
                if($buffer != NULL)
                {
                        $maxima[$i] = $buffer;
                }
        }
}


//print_r($maxima);

$x = rand(0, count($maxima)-1);

$maxima = explode("|", $maxima[$x]);

//print_r($maxima);
?>