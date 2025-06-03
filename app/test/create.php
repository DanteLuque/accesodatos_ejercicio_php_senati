<?php

require_once '../entities/mascota.entity.php';
require_once '../models/Mascota.php';

$entity = new MascotaEntity();
$entity->__SET('propietarioId',1);
$entity->__SET('tipo','Gato');
$entity->__SET('nombre','Bils');
$entity->__SET('color','morado');
$entity->__SET('genero','M');
$entity->__SET('estaVivo',true);

$mascota = new Mascota();
$newId = $mascota->create($entity);
var_dump($newId);