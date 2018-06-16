<?php
function soma(int ...$valores):float{
    return array_sum($valores);
}
var_dump( soma(2,2));
echo "<br/>";
echo soma(22,2);
echo "<br/>";
echo soma(21,2);
echo "<br/>";

?>