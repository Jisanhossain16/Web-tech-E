<?php
for($i=0;$i<3;$i++)
{
    for($j=0;$j<=$i;$j++)
    {
        echo "*";
    }
    echo "<br>";
}

echo"<br>";

for($i=0;$i<3;$i++)
{
    for($j=0;$j<3-$i;$j++)
    {
        echo " " .$j+1;
    }
    echo "<br>";
}
?>