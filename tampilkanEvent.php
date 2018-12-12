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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- bootstrap csss -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
        <?php
            require "connect.php";
            $dbconn = connection();
            $task = "SELECT * FROM SIMUI.EVENT;";
            $result =  pg_query($dbconn, $task);
            pg_close($dbconn);
              while ($row = pg_fetch_assoc($result)) {
                echo '<div class="col-sm">';
                echo '<div class="card" style="width: 18rem;">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['nama'] . '</h5>';
                echo '<h6 class="card-subtitle mb-2 text-muted">' . $row['tanggal']. '</h6>';
                echo '<p class="card-text">' . $row['lokasi']. ' street </p>';
                echo '<h5 class="text-harga"> Rp.' . $row['harga_tiket']. '</h5>';
                echo '<a href="#" onclick="link_clicked(this)" class="card-link" value='. $row['id_event'] .'>Detail Event</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              }
          ?>
    </div>
</div>

<script>

link_clicked = function(element){
  temp = element.getAttribute("value");
  window.location.href = "detil_event.php?id=" + temp;
};

//$.ajax({
  //type: 'POST',
  //url: 'tampilkanEvent.php',
  //data: {'variable': temp},
//});

</script>
</body>