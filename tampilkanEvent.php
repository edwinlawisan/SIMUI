<!DOCTYPE html>
<html>

<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 5px;
    margin-top: 25px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container-card {
    padding: 2px 16px;
}


/* The alert message box */
.alert {
    padding: 20px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
    text-align: center;
}
.alert.success {background-color: #4CAF50;}
/* The close button */
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
    color: black;
}
@media only screen and (max-width: 768px) {
  .flex-item{
    flex-basis: 90%;
  }
  #submit{
    margin-left: inherit;
    width: 150px;
  }
}
</style>


<head>
    <title>SIMUI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- bootstrap csss -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>

<body>
    
<?php
include 'navigationBar.php';
?>


<div class="container" style="margin-top: 40px;">
    <div class="jumbotron">
        <h1 class="display-4" style="color: dimgrey">Daftar Event</h1>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">RKF 2018</h5>
                <h6 class="card-subtitle mb-2 text-muted">12342144</h6>
                <p class="card-text">Jl. Margonda Raya, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424</p>
                <h5 class="text-harga">Rp 50.000</h5>
                <a href="#" class="card-link Detail-btn">Detail Event</a>
                <a href="#" class="card-link">Delete Event</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">RKF 2018</h5>
                <h6 class="card-subtitle mb-2 text-muted">12342144</h6>
                <p class="card-text">Jl. Margonda Raya, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424</p>
                <h5 class="text-harga">Rp 50.000</h5>
                <a href="#" class="card-link Detail-btn">Detail Event</a>
                <a href="#" class="card-link">Delete Event</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">RKF 2018</h5>
                <h6 class="card-subtitle mb-2 text-muted">12342144</h6>
                <p class="card-text">Jl. Margonda Raya, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424</p>
                <h5 class="text-harga">Rp 50.000</h5>
                <a href="#" class="card-link Detail-btn">Detail Event</a>
                <a href="#" class="card-link">Delete Event</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">RKF 2018</h5>
                <h6 class="card-subtitle mb-2 text-muted">12342144</h6>
                <p class="card-text">Jl. Margonda Raya, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424</p>
                <h5 class="text-harga">Rp 50.000</h5>
                <a href="#" class="card-link Detail-btn">Detail Event</a>
                <a href="#" class="card-link">Delete Event</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">RKF 2018</h5>
                <h6 class="card-subtitle mb-2 text-muted">12342144</h6>
                <p class="card-text">Jl. Margonda Raya, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424</p>
                <h5 class="text-harga">Rp 50.000</h5>
                <a href="#" class="card-link Detail-btn">Detail Event</a>
                <a href="#" class="card-link">Delete Event</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">RKF 2018</h5>
                <h6 class="card-subtitle mb-2 text-muted">12342144</h6>
                <p class="card-text">Jl. Margonda Raya, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424</p>
                <h5 class="text-harga">Rp 50.000</h5>
                <a href="#" class="card-link Detail-btn">Detail Event</a>
                <a href="#" class="card-link">Delete Event</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">RKF 2018</h5>
                <h6 class="card-subtitle mb-2 text-muted">12342144</h6>
                <p class="card-text">Jl. Margonda Raya, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424</p>
                <h5 class="text-harga">Rp 50.000</h5>
                <a href="#" class="card-link Detail-btn">Detail Event</a>
                <a href="#" class="card-link">Delete Event</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" styel="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">RKF 2018</h5>
                <h6 class="card-subtitle mb-2 text-muted">12342144</h6>
                <p class="card-text">Jl. Margonda Raya, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424</p>
                <h5 class="text-harga">Rp 50.000</h5>
                <a href="#" class="card-link Detail-btn">Detail Event</a>
                <a href="#" class="card-link">Delete Event</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">RKF 2018</h5>
                <h6 class="card-subtitle mb-2 text-muted">12342144</h6>
                <p class="card-text">Jl. Margonda Raya, Pondok Cina, Beji, Kota Depok, Jawa Barat 16424</p>
                <h5 class="text-harga">Rp 50.000</h5>
                <a href="#" class="card-link Detail-btn">Detail Event</a>
                <a href="#" class="card-link">Delete Event</a>
              </div>
            </div>
        </div>
    </div>

        <!-- The Modal -->
     <div class="modal flex" id="detail" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">RKF 2018</h3>
              <!--<h2 class="modal-title">adsfsa</h2>-->
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col-4">
                      <p>Id</p>
                  </div>
                  <div class="col-8">
                      <p>: 12342144</p>
                  </div>
                  <div class="col-4">
                      <p>Id Pembuat Event</p>
                  </div>
                  <div class="col-8">
                      <p>: 123745327</p>
                  </div>
                  <div class="col-4">
                      <p>Tanggal Event</p>
                  </div>
                  <div class="col-8">
                      <p>: 12 Oktober 2019</p>
                  </div>
                  <div class="col-4">
                      <p>Waktu</p>
                  </div>
                  <div class="col-8">
                      <p>: 09:00</p>
                  </div>
                  <div class="col-4">
                      <p>Kapasitas Event</p>
                  </div>
                  <div class="col-8">
                      <p>: 130 Orang</p>
                  </div>
                  <div class="col-4">
                      <p>Harga Tiket</p>
                  </div>
                  <div class="col-8">
                      <p>: Rp 50.000</p>
                  </div>
                  <div class="col-4">
                      <p>Lokasi</p>
                  </div>
                  <div class="col-8">
                      <p>: Jakarta</p>
                  </div>
                  <div class="col-4">
                      <p>Jenis Event</p>
                  </div>
                  <div class="col-8">
                      <p>: General</p>
                  </div>
                  <div class="col-4">
                      <p>Deskripsi</p>
                  </div>
                  <div class="col-8">
                      <p>: Blablbalbalblbalblablbalblbalbabl</p>
                  </div>
                  <div class="col-4">
                      <p>Kategori</p>
                  </div>
                  <div class="col-8">
                      <p>: Keagamaan</p>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
                <button class="btn" style="background-color: dimgrey; color : white;">Update Event</button>
                <button class="btn" style="background-color: red; color : white;">Delete Event</button>
            </div>
          </div>
          
        </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('detail');

// Get the button that opens the modal
var btn = document.getElementsByClassName("card-link Detail-btn")[0];

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>