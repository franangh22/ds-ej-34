<?php

require_once '../../modelo/Equipo.php';
require_once '../../modelo/Jugador.php';
require_once 'responses/consultarTodosResponse.php';

header('Content-Type: application/json');

$resp = new consultarTodosResponse();

$j1 = new Jugador();
$j1->Nombre = 'Pedro Gonzalez';
$j1->Posicion = 'Delantero';
$j1->Debut = '17 de agosto de 2005';
$j1->Goles = 10;

$j2 = new Jugador();
$j2->Nombre = 'Daniel Sanchez';
$j2->Posicion = 'Delantero';
$j2->Debut = '16 de diciembre de 2010';
$j2->Goles = 0;

$j3 = new Jugador();
$j3->Nombre = 'Juan Perez';
$j3->Posicion = 'Defensor';
$j3->Debut = '17 de septiembre de 2019';
$j3->Goles = 10;

$j4 = new Jugador();
$j4->Nombre = 'Ignacio gonzalez';
$j4->Posicion = 'Arquero';
$j4->Debut = '17 de enero de 2020';
$j4->Goles = 1;

$j5 = new Jugador();
$j5->Nombre = 'Ariel Cosentino';
$j5->Posicion = 'Mediocampista';
$j5->Debut = '16 de diciembre de 2001';
$j5->Goles = 2;

$j6 = new Jugador();
$j6->Nombre = 'Diego Dominguez';
$j6->Posicion = 'Defensor';
$j6->Debut = '15 de febrero de 2018';
$j6->Goles = 5;

$j7 = new Jugador();
$j7->Nombre = 'Gustavo Santos';
$j7->Posicion = 'Delantero';
$j7->Debut = '16 de diciembre de 2009';
$j7->Goles = 3;

$e1 = new Equipo();
$e1->Id = 1;
$e1->Nombre = 'Equipo 1';
$e1->ListJugadores[] = $j1;
$e1->ListJugadores[] = $j2;
$e1->ListJugadores[] = $j3;
$e1->Fundacion = '3 de noviembre de 1903 (118 años)';
$e1->Presidente = 'Javier Perez';

$e2 = new Equipo();
$e2->Id = 2;
$e2->Nombre = 'Equipo 2';
$e2->ListJugadores[] = $j4;
$e2->ListJugadores[] = $j5;
$e2->ListJugadores[] = $j6;
$e2->ListJugadores[] = $j7;
$e2->Fundacion = '5 de abril de 1923';
$e2->Presidente = 'Ignacio Quinteros';

$resp->ListEquipos[] = $e1;
$resp->ListEquipos[] = $e2;


echo json_encode($resp);
