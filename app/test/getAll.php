<?php

require_once '../entities/mascota.entity.php';
require_once '../models/Mascota.php';

$mascota = new Mascota();
var_dump($mascota->getAll());