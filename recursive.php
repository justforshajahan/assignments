<?php
function numbers()
{
preg_replace_callback('/ /',function(){
	static $i;
	print ++$i."<br>";
},
str_repeat(' ', 100));
}
numbers();
?>
