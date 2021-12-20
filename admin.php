<?php include_once 'header.php'; ?>

<?php

if (isset($_POST['delete'])) {
  if (isset($_POST['delete-id-automobil'])) {
    $id = $_POST['delete-id-automobil'];
    $db->delete("automobili", "id", $id);
  } else if (isset($_POST['delete-id-motor'])) {
    $id = $_POST['delete-id-motor'];
    $db->delete("motori", "id", $id);
  }
}

$db->select("automobili", $rows = "*", null, null, null);
$automobili = $db->getResult()->fetch_all(MYSQLI_ASSOC);

$db->select("motori", $rows = "*", null, null, null);
$motori = $db->getResult()->fetch_all(MYSQLI_ASSOC);

?>


<section id="automobili" class="container">
  <h1 class="text-center my-5">AUTOMOBILI
    <hr>
  </h1>
  <table class="table table-sm table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Marka</th>
        <th scope="col">Naziv</th>
        <th scope="col">Kilometraza</th>
        <th scope="col">Godina</th>
        <th scope="col">Polovan</th>
        <th scope="col">Gorivo</th>
        <th scope="col">Kubikaza</th>
        <th scope="col">Konjaza</th>
        <th scope="col">Opis</th>
        <th scope="col">Cena</th>
      </tr>
    </thead>
    <tbody>
      <?php $counter = 1;
      foreach ($automobili as $automobil) : ?>
        <tr>
          <th scope="row"><?php echo $counter++; ?></th>
          <td><?php echo $automobil['marka']; ?></td>
          <td><?php echo $automobil['naziv']; ?></td>
          <td><?php echo $automobil['kilometraza']; ?></td>
          <td><?php echo $automobil['godina']; ?></td>
          <td><?php echo $automobil['polovan']; ?></td>
          <td><?php echo $automobil['gorivo']; ?></td>
          <td><?php echo $automobil['kubikaza']; ?></td>
          <td><?php echo $automobil['konjaza']; ?> HP</td>
          <td><?php echo substr($automobil['opis'], 0, 30) . "..."; ?></td>
          <td><?php echo $automobil['cena']; ?></td>
          <td class="text-center text-warning"><a class="text-warning" href="updateAutomobil.php?id=<?php echo $automobil['id']; ?>"><i class="far fa-edit"></i></a></td>
          <form method="POST">
            <input type="hidden" name="delete-id-automobil" value="<?php echo $automobil['id']; ?>">
            <td class="text-center text-danger"><button class="delete-btn text-danger" name="delete" type="submit"><i class="fas fa-trash-alt"></i></button></td>
          </form>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <a href="dodajAutomobil.php" class="btn btn-primary">DODAJ NOVI <br>AUTOMOBIL</a>
</section>

<section id="motori" class="container mb-5">
  <h1 class="text-center my-5">MOTORI
    <hr>
  </h1>
  <table class="table table-sm table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Marka</th>
        <th scope="col">Naziv</th>
        <th scope="col">Kilometraza</th>
        <th scope="col">Godina</th>
        <th scope="col">Polovan</th>
        <th scope="col">Kubikaza</th>
        <th scope="col">Konjaza</th>
        <th scope="col">Opis</th>
        <th scope="col">Cena</th>
      </tr>
    </thead>
    <tbody>
      <?php $counter = 1;
      foreach ($motori as $motor) : ?>
        <tr>
          <th scope="row"><?php echo $counter++; ?></th>
          <td><?php echo $motor['marka']; ?></td>
          <td><?php echo $motor['naziv']; ?></td>
          <td><?php echo $motor['kilometraza']; ?> KM</td>
          <td><?php echo $motor['godina']; ?></td>
          <td><?php echo $motor['polovan']; ?></td>
          <td><?php echo $motor['kubikaza']; ?> CM3</td>
          <td><?php echo $motor['konjaza']; ?> HP</td>
          <td><?php echo substr($motor['opis'], 0, 30) . "..."; ?></td>
          <td><?php echo $motor['cena']; ?></td>
          <td class="text-center text-warning"><a class="text-warning" href="updateMotor.php?id=<?php echo $motor['id']; ?>"><i class="far fa-edit"></i></a></td>
          <form method="POST">
            <input type="hidden" name="delete-id-motor" value="<?php echo $motor['id']; ?>">
            <td class="text-center text-danger"><button class="delete-btn text-danger" name="delete" type="submit"><i class="fas fa-trash-alt"></i></button></td>
          </form>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <a href="dodajMotor.php" class="btn btn-primary">DODAJ NOVI <br>MOTOR</a>
</section>

<?php include_once 'footer.php'; ?>