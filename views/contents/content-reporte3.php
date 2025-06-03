<div>
  <h1>Lista de mascotas</h1>
  <table>
    <colgroup>
      <col style="width: 10%">
      <col style="width: 20%">
      <col style="width: 20%">
      <col style="width: 10%">
      <col style="width: 10%">
      <col style="width: 10%">
      <col style="width: 20%">
    </colgroup>
    <thead>
      <tr>
        <th>ID</th>
        <th>tipo</th>
        <th>nombre</th>
        <th>color</th>
        <th>genero</th>
        <th>estaVivo</th>
        <th>Propietario</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($mascotaLists as $mascota): ?>
      <tr>
        <td><?= $mascota['id']?></td>
        <td><?= $mascota['tipo']?></td>
        <td><?= $mascota['nombre']?></td>
        <td><?= $mascota['color']?></td>
        <td><?= $mascota['genero']?></td>
        <td><?= $mascota['estaVivo']?></td>
        <td><?= $mascota['propietario']?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>