<?php
include 'pelanggan.php';
$pelangganObj = new Pelanggan();

if(isset($_GET['editId']) && !empty($_GET['editId'])){
  $editId = $_GET['editId'];
  $pelanggan = $pelangganObj->displayRecordById($editId);
}

if(isset($_POST['update'])){
  $pelangganObj->updateRecord($_POST);
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
    <div class="card text-center" styles="padding:15px;">
      <h4>CRUD Data dengan PHP OOP dan MySQL</h4>
</div><br/>

<div class="container">
  <form action="edit.php" method="POST">
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" name="unama" value="<?php echo $pelanggan['nama']; ?>" required=""/>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="uemail" value="<?php echo $pelanggan['email']; ?>" required=""/>
    </div>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" name="unusername" value="<?php echo $pelanggan['username']; ?>" required=""/>
    </div>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $pelanggan['id']; ?>"/>
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update"/>
    </div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/lib/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>