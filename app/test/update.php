<?php

require_once '../models/Mascota.php';

$mascota = new Mascota();

$params = [
  'propietarioId' => 2,
  'tipo' => 'PERRO',
  'nombre' => 'Senato',
  'color' => 'transparente',
  'genero' => 'M',
  'id' => 5
];

$affectRows = $mascota->update($params);
var_dump($affectRows);