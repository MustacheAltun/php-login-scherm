<?php
$som = 0;
for ($i=0; $i<1000; $i++)
{
    if ($i%3==0 || $i%5==0)
    {
        echo "deelbaar door 3 of 5: ";
        $som =$som +$i;
    }
    echo $i . "<br />";
}
echo "De som is: ".$som;
?>