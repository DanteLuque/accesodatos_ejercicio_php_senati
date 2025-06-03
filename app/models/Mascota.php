<?php
require_once '../config/Database.php';
require_once '../entities/mascota.entity.php';

/**
 * Esta clase contiene la lógica para interactura con la DB
 */
class Mascota {

  private $pdo = null;

  public function __construct(){
    $this->pdo = Database::getConexion();
  }

  public function create(MascotaEntity $entity): int {
    $sql = 'INSERT INTO MASCOTAS (PROPIETARIO_ID, TIPO, NOMBRE, COLOR, GENERO, ESTA_VIVO) VALUES (?,?,?,?,?,?)';
    $query = $this->pdo->prepare($sql);
    $query->execute([
      $entity->__GET('propietarioId'),
      $entity->__GET('tipo'),
      $entity->__GET('nombre'),
      $entity->__GET('color'),
      $entity->__GET('genero'),
      true,
    ]);

    return $this->pdo->lastInsertId();
  }

  public function getAll(): array {
    $sql = "SELECT * FROM VIEW_MASCOTAS_CON_INFO_PROPIETARIOS";
    $query = $this->pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getById(): ?array {
    return [];
  }

  public function delete(): int {
    return 0;
  }

  /**
   * Actualiza los datos de las mascotas
   * @param mixed $params
   * @return int
   */
  public function update($params = []) {
    $sql = 'UPDATE MASCOTAS SET PROPIETARIO_ID=?, TIPO=?, NOMBRE=?, COLOR=?, GENERO=? WHERE ID=?';
    $query = $this->pdo->prepare($sql);
    $query->execute([
      $params['propietarioId'],
      $params['tipo'],
      $params['nombre'],
      $params['color'],
      $params['genero'],
      $params['id'],
    ]);
    return $query->rowCount();
  }
}