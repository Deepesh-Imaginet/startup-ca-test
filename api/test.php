
<?php
$a=998;
$b = $a+1;
$c= 0;
$d=0;

if ($b<=99) {
	

if ($b>=10) {
	echo $c.$b;
}
elseif ($b<10) {
echo $d.$c.$b;	
}
}
else {
	$e=1;
	if($b>999){
		$b = $c.$d.$e;
		echo $b;
	}
	elseif ($b>=100) {
echo $b;
}
}

?>