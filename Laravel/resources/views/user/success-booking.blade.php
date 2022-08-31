<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success Tes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/sukses/style.css">
  </head>
  <body>
    <div class="parent">
      <div class="row success-alert .d-flex justify-content-center align-items-center p-5">
        <div class="text-center card p-5 success-content">
            <div class="window1">
              <img src="img/success.svg" class="img-fluid">
              <h1>Pesanan <span class="">ID : XXXXX</span> diproses!</h1>
            </div>
            <a href="#tutor">
                <button class="btn btn-primary">Panduan Verifikasi</button>
            </a>
        </div> 
      </div>
      <div class="tutorial text-center text-white align-items-center justify-content-center" id="tutor">
          <img src="../img/wavesSuccess.svg">
          <h1>Verifikasi Pembayaran</h1>
          <!-- <div class="line"></div> -->
          <div class="tutorial-content p-5">
            <div class="step-one number card text-dark p-3">
              <h6>1</h6>
              <p>Bot akan mengirimkan pesan melalui whatsapp, pastikan nomor yang terdaftar sudah benar</p>
            </div>
            <div class="step-two card number text-dark p-3 mt-3">
            <h6>2 </h6>
              <p>Untuk melakukan verifikasi, kirimkan bukti transfer ke bot dengan menyertakan format: <br> <strong>verifikasi id_pemesanan xxxxx</strong></p>
            </div>
          </div>
      </div> 
    </div>
    <script>
        const number = document.querySelectorAll('.number')
        const stepTwo = document.querySelector('.step-two')
        if(window.innerWidth >= 720){ 
          stepTwo.classList.remove('mt-3');
          
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
