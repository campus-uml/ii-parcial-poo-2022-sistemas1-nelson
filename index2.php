<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
</head>
<body>
<?php
define('tam1', 5);
define('tam2', 10);
echo"<table border0=1>";
$n=1;
for($n1=1; $n1 <=tam1; $n1++)
{
    if($n1 % 2 == 0)
    echo "<tr bgcolor=#bdc3d6>";
    else
    echo "<tr>";
    for($n2=1; $n2<= tam2; $n2++)
    {
        echo "<td>" , $n, "</td>";
        $n=$n+1;
    }
    echo "</tr>";
}
echo"</table>";
?>
</body>
</html>