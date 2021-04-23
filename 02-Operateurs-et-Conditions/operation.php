<?php 

$var15 = 15;
$var5 = 5;
$var8 = 8;

$vara = $var15+$var5+$var8;  
$varb = $var15*($var5-$var8);
$varc = ($var8-$var5)/$var15;

echo "$var15 + $var5 + $var8 = $vara";
echo "<br/ >$var15 * ($var5 - $var8) = $varb";
echo "<br/ >($var8 - $var5) / $var15 = $varc";

if ($vara <20 or $varb <20 or $varc <20){

    echo '<br/ >Une des opération renvoie moins de 20';

}

?>  