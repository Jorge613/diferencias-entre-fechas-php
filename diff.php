<?php

$fecha1 = new DateTime("2018-008-30 01:15:52");
$fecha2 = new DateTime("2018-09-30 02:33:45");
$fecha = $fecha1->diff($fecha2);

//Mostrar Todos los Resultados.
printf('%d años, %d meses, %d días, %d horas, %d minutos', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i);

//Si solo desean obtener la diferencia en DIAS, hacer lo siguiente:
echo $fecha->d;
