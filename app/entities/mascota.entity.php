<?php
/**
 * Summary of MascotaEntity
 * Entidad MascotaEntity contiene todos los atributos necesarios para la clase Mascota
 */
class MascotaEntity{
  private $id;
  private $propietarioId;
  private $tipo;
  private $nombre;
  private $color;
  private $genero;
  private $estaVivo;

  // metodos magicos para accesores
  public function __GET($attribute){
    return $this->$attribute;
  }

  public function __SET($attribute, $value){
    $this->$attribute = $value;
  }
}