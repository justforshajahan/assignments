<?php 
define("a",100);
define("b",200);
echo "a=".constant("a")."<br>";
echo "b=".constant("b")."<br>";
define("a",80);
define("b",50);
echo "a=".constant("a")."<br>";
echo "b=".constant("b");
?>
