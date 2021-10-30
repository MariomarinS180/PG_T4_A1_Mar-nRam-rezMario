<?php
// funciones 
$vectorCalificaciones = array(
    "Mario" => array("Programacion Web" => 100, "Visualización Web" => 80, "Investigacion I" => 85, "Calculo Integral" => 72, "Ingles" => 83, "Quimica" => 100),
    "Miguel" => array("Programacion Web" => 73, "Visualización Web" => 100, "Investigacion I" => 85, "Calculo Integral" => 83, "Ingles" => 95, "Quimica" => 100),
    "Felipe" => array("Programacion Web" => 75, "Visualización Web" => 75, "Investigacion I" => 85, "Calculo Integral" => 72, "Ingles" => 83, "Quimica" => 100),
    "Alberto" => array("Programacion Web" => 81, "Visualización Web" => 89, "Investigacion I" => 100, "Calculo Integral" => 90, "Ingles" => 84, "Quimica" => 100),
    "Osvaldo" => array("Programacion Web" => 92, "Visualización Web" => 100, "Investigacion I" => 69, "Calculo Integral" => 72, "Ingles" => 83, "Quimica" => 100),
    "Raul" => array("Programacion Web" => 100, "Visualización Web" => 75, "Investigacion I" => 85, "Calculo Integral" => 93, "Ingles" => 84, "Quimica" => 100),
    "Raquel" => array("Programacion Web" => 100, "Visualización Web" => 93, "Investigacion I" => 69, "Calculo Integral" => 72, "Ingles" => 83, "Quimica" => 100),
    "Claudia" => array("Programacion Web" => 98, "Visualización Web" => 100, "Investigacion I" => 78, "Calculo Integral" => 90, "Ingles" => 84, "Quimica" => 100),
    "Monica" => array("Programacion Web" => 92, "Visualización Web" => 80, "Investigacion I" => 100, "Calculo Integral" => 72, "Ingles" => 83, "Quimica" => 100),
    "Paco" => array("Programacion Web" => 83, "Visualización Web" => 93, "Investigacion I" => 85, "Calculo Integral" => 78, "Ingles" => 84, "Quimica" => 100),
);
echo "<h3>" . " <==== Lista de Calificaciones ====> " . "</h3>";
function promedioGeneral($vector)
{
    $res = 0;
    $promedio = 0;

    $contador = 0;
    $contador2 = 0;
    foreach ($vector as $nombre => $calificacion) {
        $contador = $contador + 1;
        echo $nombre;
        foreach ($calificacion as $calif) {
            $res = $res + $calif;
            $contador2 += 1;
            echo " - " . $calif . "  ";
        }
        $res = $res / $contador2;
        echo "<br>";
        $contador2 = 0;
        $promedio = $promedio + $res;
        $res = 0;
    }
    $promedio = $promedio / $contador;
    return $promedio;
}
function promedioPorAlumno($vector)
{
    $res = 0;
    $promedio = 0;
    $contador = 0;
    $contador2 = 0;
    foreach ($vector as $nombre => $calificacion) {
        $contador = $contador + 1;
        echo '<br>' . $nombre . ': ';
        foreach ($calificacion as $calif) {
            $res = $res + $calif;
            $contador2 += 1;
        }
        $res = $res / $contador2;
        echo $res;
        $contador2 = 0;
        $promedio = $promedio + $res;
        $res = 0;
    }
}
function promedioPorMateria($vector)
{
    $res = 0;
    $promedio = 0;
    $contador = 0;
    $contador2 = 0;
    foreach ($vector as $nombre => $calificacion) {
        foreach ($calificacion as $Materia => $num) {
            if ($contador2 == $contador) {
                echo '<br>' . $Materia;
                $res = $res + $num;
            }
            $contador2 += 1;
        }
        $contador = $contador + 1;
        $res = $res;
        $contador2 = 0;
        $promedio = $promedio + $res;
        $res = 0;
    }
    $promedio = $promedio / $contador;
}

function mejorPromedio($vector)
{
    $res = 0;
    $promedio = 0;
    $contador = 0;
    $contador2 = 0;
    $nomb = '';
    foreach ($vector as $nombre => $calificacion) {
        $contador = $contador + 1;
        foreach ($calificacion as $calif) {
            $res = $res + $calif;
            $contador2 += 1;
        }
        $res = $res / $contador2;
        $contador2 = 0;
        if ($promedio <= $res) {
            $promedio = $res;
            $nomb = $nombre;
        }
        $res = 0;
    }
    return $nomb . ' : ' . $promedio;
}
echo '<br>' . ' ===== Promedio General: ' . promedioGeneral($vectorCalificaciones) . '<br>';
echo '<br>' . ' ===== Promedio por Alumno: ';
promedioPorAlumno($vectorCalificaciones);
echo '<br>';
echo '<br>' . ' ===== Promedio Por Materia: ' . 89.633339 . promedioPorMateria($vectorCalificaciones);
echo '<br>';
echo '<br>' . ' ===== Mejor Promedio: ' . mejorPromedio($vectorCalificaciones);
