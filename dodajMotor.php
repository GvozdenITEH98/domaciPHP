<?php include_once 'header.php'; ?>

<?php

if (isset($_POST['dodaj-motor'])) {
  $erros = [];
  $values = [];

  $marka =   $_POST['marka'];
  $naziv =   $_POST['naziv'];
  $kubikaza =   $_POST['kubikaza'];
  $konjaza =   $_POST['konjaza'];
  $kilometraza =   $_POST['kilometraza'];
  $slika =   $_POST['slika'];
  $godina =   $_POST['godina'];
  $opis =   $_POST['opis'];
  $cena =   $_POST['cena'];
  if (isset($_POST['polovan'])) {
    $polovnjak =   $_POST['polovan'];
    if ($polovnjak == "DA") {
      $polovnjak = true;
    } else {
      $polovnjak = false;
    }
  }

  if (empty($marka)) {
    array_push($erros, "Marka je obavezna.");
  }

  if (empty($naziv)) {
    array_push($erros, "Naziv je obavezna.");
  }

  if (empty($kubikaza)) {
    array_push($erros, "Kubikaza je obavezna.");
  }

  if (empty($konjaza)) {
    array_push($erros, "Konjaza je obavezna.");
  }

  if (empty($kilometraza)) {
    array_push($erros, "Kilometraza je obavezna.");
  }

  if (empty($slika)) {
    array_push($erros, "Slika je obavezna.");
  }

  if (empty($godina)) {
    array_push($erros, "Godina je obavezna.");
  }

  if (empty($opis)) {
    array_push($erros, "Opis je obavezna.");
  }

  if (empty($cena)) {
    array_push($erros, "Cena je obavezna.");
  }

  if (empty($polovnjak)) {
    array_push($erros, "Polje polovnjak je obavezno.");
  }


  if (count($erros) == 0) {
    array_push($values, $marka, $naziv, $kubikaza, $konjaza, $kilometraza, $slika, $godina, $opis, $cena, $polovnjak);
    $db->insert("motori", "marka, naziv, kubikaza, konjaza, kilometraza, img, godina, opis, cena, polovan", $values);
    header("Location: admin.php");
  }
}

?>

<section id="dodaj-motor" class="my-5">
  <div class="container">
    <h1 class="text-center mb-5">DODAJ MOTOR
      <hr>
    </h1>
    <div id="errors" class="text-center text-danger mb-5">
      <?php
      if (isset($erros)) {
        foreach ($erros as $error) {
          echo $error . "<br>";
        }
      }
      ?>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 offset-md-3 offset-sm-3">
        <form method="POST">

          <div class="form-group">
            <label for="marka">Marka</label>
            <input type="text" class="form-control" id="marka" value="<?php if (isset($marka)) echo $marka; ?>" name="marka" placeholder="Ford, Opel, Audi...">
          </div>

          <div class="form-group">
            <label for="naziv">Naziv</label>
            <input type="text" class="form-control" id="naziv" value="<?php if (isset($naziv)) echo $naziv; ?>" name="naziv" placeholder="Fiesta, Corsa, A8...">
          </div>

          <div class="form-group">
            <label for="kubikaza">Kubikaza</label>
            <input type="text" class="form-control" id="kubikaza" value="<?php if (isset($kubikaza)) echo $kubikaza; ?>" name="kubikaza" placeholder="1.3, 1.4, 1.6, 1.8...">
          </div>

          <div class="form-group">
            <label for="konjaza">Konjaza</label>
            <input type="number" class="form-control" id="konjaza" value="<?php if (isset($konjaza)) echo $konjaza; ?>" name="konjaza" placeholder="60, 80, 150, 280...">
          </div>

          <div class="form-group">
            <label for="kilometraza">Kilometraza</label>
            <input type="number" class="form-control" id="kilometraza" value="<?php if (isset($kilometraza)) echo $kilometraza; ?>" name="kilometraza" placeholder="10000, 256000...">
          </div>

          <div class="form-group">
            <label for="img">Slika URL</label>
            <input type="text" class="form-control" value="<?php if (isset($slika)) echo $slika; ?>" name="slika" id="img" placeholder="URL">
          </div>

          <div class="form-group">
            <label for="godina">Godina</label>
            <input type="number" class="form-control" id="godina" value="<?php if (isset($godina)) echo $godina; ?>" name="godina" placeholder="2010, 2015...">
          </div>

          <div class="form-group">
            <label for="Opis">Opis</label>
            <textarea class="form-control" id="Opis" rows="3" name="opis" placeholder="Opis"><?php if (isset($opis)) echo $opis; ?></textarea>
          </div>

          <div class="form-group">
            <label for="cena">Cena</label>
            <input type="number" class="form-control" id="cena" value="<?php if (isset($cena)) echo $cena; ?>" name="cena" placeholder="3000, 5500...">
          </div>

          <fieldset class="form-group">
            <label class="text-left font-size-17">Polovnjak</label>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="polovan" value="DA" <?php if (isset($polovnjak) && $polovnjak == "DA") echo "CHECKED"; ?>>
                DA
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="polovan" value="NE" <?php if (isset($polovnjak) && $polovnjak == "NE") echo "CHECKED"; ?>>
                NE
              </label>
            </div>
          </fieldset>

          <button type="submit" name="dodaj-motor" class="btn btn-primary w-100">DODAJ MOTOR</button>

        </form>
      </div>
    </div>
  </div>
</section>

<?php include_once 'footer.php'; ?>