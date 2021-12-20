let select = document.getElementById("exampleFormControlSelect1");
let select2 = document.getElementById("exampleFormControlSelect2");
let form = document.getElementById("search-form");
let form2 = document.getElementById("search-form2");

if (select != null) {
  select.addEventListener('change', (event) => {
    let vrstaSorta = event.target.value;

    $.ajax({
      url: 'sort.php',
      type: 'POST',
      data: {
        vrstaSorta: vrstaSorta,
        table: "motori"
      },
      success: (response) => {
        let motori = JSON.parse(response);
        let html = "";

        motori.forEach(motor => {
          html += `<div class="col-md-4 col-sm-6 col-12 mt-4">
                    <div class="card">
                      <div class="card-img">
                        <img src="${motor.img}" alt="">
                        <div class="card-polovan">`;

          if (motor.polovan == 1) {
            html += "POLOVAN";
          } else {
            html += "NOV";
          }

          html += `                                         
                        </div>
                      </div>
                      <div class="card-sadrzaj">
                        <h4 class="card-naziv">${motor.marka} ${motor.naziv}</h4>
                        <p class="card-cena">${motor.cena} E</p>
                        <p class="card-opis">${motor.opis.substring(0, 250)}</p>
                        <div class="card-specs">
                          <div class="spec"><i class="far fa-calendar-alt"></i><br>${motor.godina}</div>
                          <div class="spec"><i class="fas fa-road"></i><br>${motor.kilometraza} KM</div>
                          <div class="spec"><img src="assets/images/car.svg" height="30px" width="30px" alt=""><br>${motor.kubikaza} cm3</div>
                          <div class="spec"><i class="fas fa-horse-head"></i><br>${motor.konjaza} HP</div>
                        </div>
  
                      </div>
                    </div>
                  </div>`;
        });

        document.getElementById('motori-container').innerHTML = html;
      }
    });
  });
}


if (select2 != null) {
  select2.addEventListener('change', (event) => {
    let vrstaSorta = event.target.value;

    $.ajax({
      url: 'sort.php',
      type: 'POST',
      data: {
        vrstaSorta: vrstaSorta,
        table: "automobili"
      },
      success: (response) => {
        console.log(response);
        let automobili = JSON.parse(response);
        let html = "";

        automobili.forEach(automobil => {
          html += `<div class="col-md-4 col-sm-6 col-12 mt-4">
                    <div class="card">
                      <div class="card-img">
                        <img src="${automobil.img}" alt="">
                        <div class="card-polovan">`;

          if (automobil.polovan == 1) {
            html += "POLOVAN";
          } else {
            html += "NOV";
          }

          html += `                                         
                        </div>
                      </div>
                      <div class="card-sadrzaj">
                        <h4 class="card-naziv">${automobil.marka} ${automobil.naziv}</h4>
                        <p class="card-cena">${automobil.cena} E</p>
                        <p class="card-opis">${automobil.opis.substring(0, 250)}</p>
                        <div class="card-specs">
                          <div class="spec"><i class="far fa-calendar-alt"></i><br>${automobil.godina}</div>
                          <div class="spec"><i class="fas fa-road"></i><br>${automobil.kilometraza} KM</div>
                          <div class="spec"><i class="fas fa-gas-pump"></i><br>${automobil.gorivo}</div>
                          <div class="spec"><i class="fas fa-horse-head"></i><br>${automobil.konjaza} HP</div>
                        </div>
  
                      </div>
                    </div>
                  </div>`;
        });

        document.getElementById('automobili-container').innerHTML = html;
      }
    });
  });
}

if (form != null) {
  form.addEventListener('submit', (event) => {
    event.preventDefault();

    let unetTekst = document.getElementById('search-input').value;

    $.ajax({
      url: 'search.php',
      type: 'POST',
      data: {
        unetTekst: unetTekst,
        table: "motori"
      },
      success: (response) => {
        console.log(response);
        let motori = JSON.parse(response);
        let html = "";

        motori.forEach(motor => {
          html += `<div class="col-md-4 col-sm-6 col-12 mt-4">
                    <div class="card">
                      <div class="card-img">
                        <img src="${motor.img}" alt="">
                        <div class="card-polovan">`;

          if (motor.polovan == 1) {
            html += "POLOVAN";
          } else {
            html += "NOV";
          }

          html += `                                         
                        </div>
                      </div>
                      <div class="card-sadrzaj">
                        <h4 class="card-naziv">${motor.marka} ${motor.naziv}</h4>
                        <p class="card-cena">${motor.cena} E</p>
                        <p class="card-opis">${motor.opis.substring(0, 250)}</p>
                        <div class="card-specs">
                          <div class="spec"><i class="far fa-calendar-alt"></i><br>${motor.godina}</div>
                          <div class="spec"><i class="fas fa-road"></i><br>${motor.kilometraza} KM</div>
                          <div class="spec"><img src="assets/images/car.svg" height="30px" width="30px" alt=""><br>${motor.kubikaza} cm3</div>
                          <div class="spec"><i class="fas fa-horse-head"></i><br>${motor.konjaza} HP</div>
                        </div>
  
                      </div>
                    </div>
                  </div>`;
        });

        document.getElementById('motori-container').innerHTML = html;
      }
    });
  });
}


if (form2 != null) {
  form2.addEventListener('submit', (event) => {
    event.preventDefault();

    let unetTekst = document.getElementById('search-input').value;

    $.ajax({
      url: 'search.php',
      type: 'POST',
      data: {
        unetTekst: unetTekst,
        table: "automobili"
      },
      success: (response) => {
        console.log(response);
        let automobili = JSON.parse(response);
        let html = "";

        automobili.forEach(automobil => {
          html += `<div class="col-md-4 col-sm-6 col-12 mt-4">
                    <div class="card">
                      <div class="card-img">
                        <img src="${automobil.img}" alt="">
                        <div class="card-polovan">`;

          if (automobil.polovan == 1) {
            html += "POLOVAN";
          } else {
            html += "NOV";
          }

          html += `                                         
                        </div>
                      </div>
                      <div class="card-sadrzaj">
                        <h4 class="card-naziv">${automobil.marka} ${automobil.naziv}</h4>
                        <p class="card-cena">${automobil.cena} E</p>
                        <p class="card-opis">${automobil.opis.substring(0, 250)}</p>
                        <div class="card-specs">
                          <div class="spec"><i class="far fa-calendar-alt"></i><br>${automobil.godina}</div>
                          <div class="spec"><i class="fas fa-road"></i><br>${automobil.kilometraza} KM</div>
                          <div class="spec"><i class="fas fa-gas-pump"></i><br>${automobil.gorivo}</div>
                          <div class="spec"><i class="fas fa-horse-head"></i><br>${automobil.konjaza} HP</div>
                        </div>
  
                      </div>
                    </div>
                  </div>`;
        });

        document.getElementById('automobili-container').innerHTML = html;
      }
    });
  });
}
