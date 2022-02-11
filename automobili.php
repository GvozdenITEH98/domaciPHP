<?php include_once 'header.php'; ?>

<p id="car-img" class="rounded-pill"><i class="fas fa-car"></i></p>
<p class="text-center text-uppercase izaberite-p">Izaberite automobil</p>

<div class="text-center d-flex flex-wrap">
  <label for="exampleFormControlSelect2" class="mr-3">Sortiraj po </label>
  <select class="form-control mr-3" style="width: 150px;" id="exampleFormControlSelect2">
    <option></option>
    <option value="cena">Ceni</option>
    <option value="snaga">Snazi</option>
    <option value="godina">Godini</option>
  </select>
  <form id="search-form2" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" id="search-input" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>

<?php

$db->select("product", $rows = "*", null, null, null);
$proizvodi = $db->getResult()->fetch_all(MYSQLI_ASSOC);

?>

<section id="cars" class="mb-5">
  <div class="container">
    <div class="row" id="automobili-container">

      <?php foreach ($proizvodi as $proizvod) : ?>

        
            <div class="card-sadrzaj">
              <h4 class="card-naziv"><?php echo $proizvod['id'] ; ?></h4>
              <p class="card-cena"><?php echo $proizvod['name']; ?> </p>
              <p class="card-opis"><?php echo substr($proizvod['categoryId'], 0, 250); ?></p>
              </div>

            </div>
          </div>
        </div>

      <?php endforeach; ?>


    </div>
  </div>
</section>

<?php include_once 'footer.php'; ?>