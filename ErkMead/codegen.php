<?php
function getcode(){
$n=5;
$char='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomcod='ERK-';

for($i=0;$i<$n;$i++){

	$index=rand(0,strlen($char)-1);
	$randomcod.=$char[$index];
}
return $randomcod;
}

?>