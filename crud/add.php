<?php
include 'pelanggan.php';
$pelangganObj = new Pelanggan();

if(isset($_POST['submit'])){
  $pelangganObj->insertData($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CRUD Data dengan PHP OOP dan MySQL</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
  <div class="card text-center" style="padding:15px;">
  <h4>CRUD Data dengan PHP OOP dan MySQL</h4>
</div><br/>

<div class="container">
  <form action="add.php" method="POST">
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required=""/>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required=""/>
    </div>
    <div class="form-group">  
      <label for="username">Username:</label>
      <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required=""/>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required=""/>
    </div>
    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit"/>
</form>
</div>

<script src="https://ajax.googleapis.com/ajax/lib/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>