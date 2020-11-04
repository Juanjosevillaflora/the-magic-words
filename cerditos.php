<?php 

pregunta1= $_POST["pregunta uno"];
pregunta2= $_POST["pregunta dos"];
pregunta3= $_POST["pregunta tres"];

$mensaje = "";

$puntos = 0;

if ($pregunta1 =="v") 
{
	$punto = $puntos + 3;
}
if ($pregunta2 =="v") 
{
	$punto = $puntos + 3;
}
if ($pregunta3 =="v") 
{
	$punto = $puntos + 3;
}
if ($puntos ==3)  
{
	$mensaje="Debes prestar mas atencion al audio libro"
}
if ($puntos ==6)  
{
	$mensaje="Estubo bien pero te falto la mitad"
}
if ($puntos ==9)  
{
	$mensaje="Exelente has prestado atencion al 100%"
}

echo "Resultados: $puntos <br> $mensaje <br>";
echo "<b>Respuestas</br><br>";
echo "¿De qué material se construyo la casa del primer cerdito🐷<br>2.¿De qué material se construyo la casa segunda casa del sengundo cerdito🐷🐷<br>¿De qué material se construyo la casa del tercer cerdito cerdito🐷🐷🐷";
?>