<?php 
$x = 75; 
$y = 25;
 ?>
 <?php
function addition() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
	$GLOBALS['x']++;
}
 
addition(); 
echo $z; 
echo $x;

?>
<?php
echo $x;

?>