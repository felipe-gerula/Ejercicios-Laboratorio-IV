<?php

$myNumber = 123; 
$numberString = "123";

$concatenar=$myNumber.$numberString;
$suma=$myNumber+$numberString;
echo "1)";
echo "concatenar : $concatenar <br>";
echo "sumar : $suma";
echo "<br>--------------------------------<br>";
echo "2)";
if ("tested") {
    echo "It`s right";
}
echo "<br>--------------------------------<br>";
echo "3)";
function Mul($var1 , $var2){
    return $var1 * $var2;
}
function Div($var1 , $var2){
    return $var1 / $var2;
}
$multi = Mul(1,2);
$divi = Div(4,2);
echo "multiplicacion = $multi<br>";
echo "division = $divi";
echo "<br>--------------------------------<br>";
echo "4)";
$array = [  
    1    => "first value",
    "1"  => "second value",    
    1.2  => "tirth value",    
    true => "fourth value",    
    1+0.2 => "fifth value",    
    false !== null => "sixth value", 
];
$cantidad = count($array);
echo "$cantidad";
var_dump($array);
echo "<br>--------------------------------<br>";
echo "5)";
$people = [ 
    ['name' => 'Martin', 'age' => 18, 'sex' => 'm'], 
    ['name' => 'Martina', 'age' => 25, 'sex' => 'f'], 
    ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'], 
    ['name' => 'Paula', 'age' => 12, 'sex' => 'f'], 
    ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'], 
    ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'], 
    ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'], 
];
$cantidad = count($people);
echo "a)<br>";
$mayores = 0;
for ($i=0; $i < $cantidad-1 ; $i++) { 
    if($people[$i]["age"] >= 18){
        echo "Nombre =".$people[$i]["name"]."-Edad=".$people[$i]["age"]."<br>";
        $mayores++;
    };
}
echo "Cantidad de mayores de edad = ".$mayores;
echo "<br>b)<br>";
for ($i=0; $i < $cantidad-1 ; $i++) { 
    if($people[$i]["age"] < 18 && $people[$i]["sex"] == "f"){
        echo "Nombre =".$people[$i]["name"]."-Edad=".$people[$i]["age"]."<br>";
        $mayores++;
    }    
}
echo "Cantidad de mujeres menores de edad = ".$mayores;
echo "<br>d)<br>";
for ($i=0; $i < $cantidad ; $i++){
    unset($people[$i]["name"]);
    unset($people[$i]["sex"]);
}
var_dump($people);
echo "<br>--------------------------------<br>";
echo "6)";
$dia = date("l");
$dias = array("Es fin de semana","Lunes","Martes","Miércoles","Jueves","Viernes","Es fin de semana");
echo "El dia de la semana es ".$dias[date("w")];
echo "<br>--------------------------------<br>";
echo "7)";
$total_sale = 4000;
$type_sale = "mascota";
if ($total_sale < 200) {
    if($type_sale == "mascota"){
        echo "No se puede realizar el envio";
    }else {
        echo "Los gastos de envío son 80 pesos";
    }
}elseif ($total_sale < 600 ) {
    echo "Los gastos de envío son 80 pesos";
}else{
    echo "el Envio es gratis";
}
if($total_sale > 2000){
    echo "<br>codigo de descuento = CODEDESC33";
}
echo "<br>--------------------------------<br>";
echo "8)";
$a = 7;
$b = 12;
$c = 43;
$d = 4;
$mayor = max($a,$b,$c,$d);
echo $mayor;
echo "<br>--------------------------------<br>";
echo "9)";
$nombre =$_POST['name']; 
$edad =$_POST['birthday']; 
$genero =$_POST['gender'];
echo "El nombre ingresado es: ".$nombre."<br> La edad es: ".$edad."<br> el genero es: ".$genero.".";
?>