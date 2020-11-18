<?php 
var_dump($_POST);
echo "<hr>";
echo($_POST['operacion']);
echo "<hr>";

$resultado=0;

if ($_POST['operacion']=='+') {
	$resultado = ($_POST['n1']  + $_POST['n2']);
}else{

	if ($_POST['operacion']=='-') {
	$resultado = ($_POST['n1']  - $_POST['n2']);}
	else{
	if ($_POST['operacion']='/') {
	$resultado = ($_POST['n1']  / $_POST['n2']);
	}else{
		if ($_POST['operacion']=='*') {
	$resultado = ($_POST['n1'] * $_POST['n2']);}
	
		}
		}
		}






	
// }else{
// 	if ($_POST['operacion']='/') {
// 	$resultado = ($_POST['n1']  / $_POST['n2']);
// }else{
// 	if ($_POST['operacion']='*') {
// 	$resultado = ($_POST['n1']  * $_POST['n2']);
// }

// }



echo("$resultado");
