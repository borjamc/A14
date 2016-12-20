<!DOCTYPE html>
<html>
<head>
	<title>Recogida de informacion</title>
</head>
<body>
<?php

//Ecuacion para hacer la media de las notas

$multiplicador=$_POST["cal_prog"] + $_POST["cal_ed"] + $_POST["cal_llmm"] + $_POST["cal_bbdd"];
$media=$multiplicador/4;

echo "" . $_POST["nombre"];
echo " " . $_POST["apellido"];
echo "   " . $_POST["curso"];
echo "/" . $_POST["ciclo"];
echo "<br>";




//Esta es la nota media

echo "La media de las notas " . $media;

echo "<br>";

//Aqui empieza la condicion de cual es la nota mas alta

if ($_POST["cal_prog"]>$_POST["cal_ed"] && $_POST["cal_prog"]>$_POST["cal_llmm"] && $_POST["cal_prog"]>$_POST["cal_bbdd"]) {
	echo "La nota más alta es: " . $_POST["cal_prog"];
}elseif ($_POST["cal_ed"]>$_POST["cal_prog"] && $_POST["cal_ed"]>$_POST["cal_llmm"] && $_POST["cal_ed"]>$_POST["cal_bbdd"]) {
	echo "La nota más alta es: " . $_POST["cal_ed"];
}elseif ($_POST["cal_llmm"]>$_POST["cal_ed"] && $_POST["cal_llmm"]>$_POST["cal_prog"] && $_POST["cal_llmm"]>$_POST["cal_bbdd"]) {
	echo "La nota más alta es: " . $_POST["cal_llmm"];
}elseif ($_POST["cal_bbdd"]>$_POST["cal_prog"] && $_POST["cal_bbdd"]>$_POST["cal_ed"] && $_POST["cal_bbdd"]>$_POST["cal_llmm"]) {
	echo "La nota más alta es: " . $_POST["cal_bbdd"];

//Aqui empieza la condicion de cual es la nota mas baja

}

echo "<br>";

if ($_POST["cal_prog"]<$_POST["cal_ed"] && $_POST["cal_prog"]<$_POST["cal_llmm"] && $_POST["cal_prog"]<$_POST["cal_bbdd"]) {
	echo "La nota más baja es: " . $_POST["cal_prog"];
}elseif ($_POST["cal_ed"]<$_POST["cal_prog"] && $_POST["cal_ed"]< $_POST["cal_llmm"] && $_POST["cal_ed"]<$_POST["cal_bbdd"]) {
	echo "La nota mas baja es: " . $_POST["cal_ed"];
}elseif ($_POST["cal_llmm"]<$_POST["cal_prog"] && $_POST["cal_llmm"]<$_POST["cal_ed"] && $_POST["cal_llmm"]<$_POST["cal_bbdd"]) {
	echo "La nota mas baja es: " . $_POST["cal_llmm"];
}elseif ($_POST["cal_bbdd"]<$_POST["cal_prog"] && $_POST["cal_bbdd"]<$_POST["cal_ed"] && $_POST["cal_bbdd"]<$_POST["cal_llmm"]) {
	echo "La nota mas baja es: " . $_POST["cal_bbdd"];
}



 ?>
</body>
</html>
