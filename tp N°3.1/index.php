<?php

$name = 'juan,maria,pepe,andrea,jorgelina,cecilia';
$names = ["juan","maria","pepe","andrea","jorgelina","cecilia"];
var_dump($names);
asort($names);
echo "<br>-----------------------<br>";
var_dump($names);
echo "<br>-----------------------<br>";
$newArray = [];
foreach ($names as $key => $value) {
    array_push($newArray,ucfirst($value));
}
var_dump($newArray);
echo "<br>-----------------------<br>";
$cantidad = count($newArray);
$keys = [1,2,3,4,5,6];
$cantidad2 = count($keys);
echo $cantidad." ".$cantidad2;
$arrayAssociative = array_combine($keys,$names);
var_dump($arrayAssociative);
echo "<br>-----------------------<br>";
function ExisteValor($array,$valor){
    $resultado = in_array($valor,$array);
    if($resultado){
        return "el elemento ".$valor." existe en el arreglo ";
    }
    return "el elemento ".$valor." NO existe en el arreglo";
}
$res = ExisteValor($keys,1);
echo $res;
echo "<br>-----------------------<br>";
$clave = 13;
$res = array_key_exists($clave,$keys);
if($res){
    $valor = $keys[$clave];
    echo "key->".$clave." value->".$valor;
}else{
   echo "La clave ingresada no existe";
} 
echo "<br>-----------------------<br>";
$names_comas = implode(",",$arrayAssociative);
echo $names_comas;
?>