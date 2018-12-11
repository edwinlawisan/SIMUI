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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        <h1 class="display-4" style="color: dimgrey">Daftar Kepanitiaan</h1>
    </div>

   

    <div class="row">
    
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">UIAW</h5>
                <a href="">bem.ui.ac.id</a>
                <p class="card-text">Seni Pemersatu Bangsa</p>
                <h6 class="card-subtitle mb-2 text-muted">bem@ui.ac.id</h6>
                <a href="#" class="card-link Detail-btn">Detail</a>
                <a href="#" class="card-link" onclick="document.getElementById('id01').style.display='block'" style="color: red">Delete</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">UIAW</h5>
                <a href="">bem.ui.ac.id</a>
                <p class="card-text">Seni Pemersatu Bangsa</p>
                <h6 class="card-subtitle mb-2 text-muted">bem@ui.ac.id</h6>
                <a href="#" class="card-link Detail-btn">Detail</a>
                <a href="#" class="card-link" onclick="document.getElementById('id01').style.display='block'" style="color: red">Delete</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">UIAW</h5>
                <a href="">bem.ui.ac.id</a>
                <p class="card-text">Seni Pemersatu Bangsa</p>
                <h6 class="card-subtitle mb-2 text-muted">bem@ui.ac.id</h6>
                <a href="#" class="card-link Detail-btn">Detail</a>
                <a href="#" class="card-link" onclick="document.getElementById('id01').style.display='block'" style="color: red">Delete</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">UIAW</h5>
                <a href="">bem.ui.ac.id</a>
                <p class="card-text">Seni Pemersatu Bangsa</p>
                <h6 class="card-subtitle mb-2 text-muted">bem@ui.ac.id</h6>
                <a href="#" class="card-link Detail-btn">Detail</a>
                <a href="#" class="card-link" onclick="document.getElementById('id01').style.display='block'" style="color: red">Delete</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">UIAW</h5>
                <a href="">bem.ui.ac.id</a>
                <p class="card-text">Seni Pemersatu Bangsa</p>
                <h6 class="card-subtitle mb-2 text-muted">bem@ui.ac.id</h6>
                <a href="#" class="card-link Detail-btn">Detail</a>
                <a href="#" class="card-link" onclick="document.getElementById('id01').style.display='block'" style="color: red">Delete</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">UIAW</h5>
                <a href="">bem.ui.ac.id</a>
                <p class="card-text">Seni Pemersatu Bangsa</p>
                <h6 class="card-subtitle mb-2 text-muted">bem@ui.ac.id</h6>
                <a href="#" class="card-link Detail-btn">Detail</a>
                <a href="#" class="card-link" onclick="document.getElementById('id01').style.display='block'" style="color: red">Delete</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">UIAW</h5>
                <a href="">bem.ui.ac.id</a>
                <p class="card-text">Seni Pemersatu Bangsa</p>
                <h6 class="card-subtitle mb-2 text-muted">bem@ui.ac.id</h6>
                <a href="#" class="card-link Detail-btn">Detail</a>
                <a href="#" class="card-link" onclick="document.getElementById('id01').style.display='block'" style="color: red">Delete</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">UIAW</h5>
                <a href="">bem.ui.ac.id</a>
                <p class="card-text">Seni Pemersatu Bangsa</p>
                <h6 class="card-subtitle mb-2 text-muted">bem@ui.ac.id</h6>
                <a href="#" class="card-link Detail-btn">Detail</a>
                <a href="#" class="card-link" onclick="document.getElementById('id01').style.display='block'" style="color: red">Delete</a>
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">UIAW</h5>
                <a href="">bem.ui.ac.id</a>
                <p class="card-text">Seni Pemersatu Bangsa</p>
                <h6 class="card-subtitle mb-2 text-muted">bem@ui.ac.id</h6>
                <a href="#" class="card-link Detail-btn">Detail</a>
                <a href="#" class="card-link" onclick="document.getElementById('id01').style.display='block'" style="color: red">Delete</a>
              </div>
            </div>
        </div>
        <?php
        include 'delButton.php';
        ?>
    </div>

        <!-- The Modal -->
     <div class="modal flex" id="detail" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">UIAW</h3>
              <!--<h2 class="modal-title">adsfsa</h2>-->
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col-4">
                      <p>Id</p>
                  </div>
                  <div class="col-8">
                      <p>: 1601234591</p>
                  </div>
                  <div class="col-4">
                      <p>Id Organisasi</p>
                  </div>
                  <div class="col-8">
                      <p>: 1606889811</p>
                  </div>
                  <div class="col-4">
                      <p>Id Email</p>
                  </div>
                  <div class="col-8">
                      <p>: bem@ui.ac.id</p>
                  </div>
                  <div class="col-4">
                      <p>Website</p>
                  </div>
                  <div class="col-8">
                      <p>: bem.ui.ac.id</p>
                  </div>
                  <div class="col-4">
                      <p>Tingkatan</p>
                  </div>
                  <div class="col-8">
                      <p>: Universitas</p>
                  </div>
                  <div class="col-4">
                      <p>Kategori</p>
                  </div>
                  <div class="col-8">
                      <p>: Kepanitiaan</p>
                  </div>
                  <div class="col-4">
                      <p>Logo</p>
                  </div>
                  <div class="col-8">
                      <p>: <strong>Not Found</strong></p>
                  </div>
                  <div class="col-4">
                      <p>Deskripsi</p>
                  </div>
                  <div class="col-8">
                      <p>: #KolaborasiDalamAksi</p>
                  </div>
                  <div class="col-4">
                      <p>Contact Person</p>
                  </div>
                  <div class="col-8">
                      <p>: 08131248595</p>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
                <button class="btn" style="background-color: dimgrey; color : white;" onclick="document.getElementById('id03').style.display='block'">Update Kepanitiaan</button>
                <div class = "w3-container">
                <button class="btn" style="background-color: red; color : white;" onclick="document.getElementById('id02').style.display='block'">Delete Kepanitiaan</button>
                </div>
            </div>
            <?php
              include 'delButton2.php';
             ?>
             <?php
              include 'updButton.php';
             ?>
          </div>
          
        </div>
        
  </div>

  <div class="w3-container w3-padding-16 w3-right">
	<button onclick="document.getElementById('buatPanitia').style.display='block'" class="w3-button w3-grey w3-large ">Tambahkan Kepanitiaan</button>
    <?php
        include 'createButton.php';
    ?>
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
window.onclick = function(Kepanitiaan) {
    if (Kepanitiaan.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>