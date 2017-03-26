<?php
$a=12; $b=35.99999; $c='”baabtra”0'; $d=TRUE;
$e=$d;
echo "before conversion:::"."<br>";
echo "a=$a"."<br>" ."b=$b"."<br>"."c=$c"."<br>"."d=$d"."<br>";
echo "1) variable into integer:::"."<br>"; 
echo "a=".intval($a)."<br>";
//echo "b=".intval(strval($b))."<br>";
echo "b=".intval($b)."<br>";
echo "c=".intval($c)."<br>";
echo "d=".intval($d)."<br>";
echo "2) variable into string:::"."<br>";
echo "a=".strval($a)."<br>";
echo "b=".strval($b)."<br>";
echo "c=".strval($c)."<br>";
echo "d=".strval($d)."<br>";
echo "3) variable into boolean::"."<br>";
echo "a is";
echo var_dump((bool)$a);
echo "b  is";
echo var_dump((bool)$b);
echo "c is";
echo var_dump((bool)$c);
echo "d is";
echo var_dump((bool)$d);
?>
