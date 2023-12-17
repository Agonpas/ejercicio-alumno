<?php
include 'Alumno.php';

$alumno1 = new Alumno("Irene", 25);

$alumno1->inscribirMateria("Matemáticas");
$alumno1->inscribirMateria("Historia");
$alumno1->inscribirMateria("Física");

$alumno1->mostrarInformacion();

$alumno1->inscribirMateria("Matemáticas");
?>