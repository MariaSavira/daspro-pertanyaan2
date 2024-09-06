<?php
class Pelanggan
{private $servername = "localhost";
private $username = "root";
private $password = "";
private $database = "crud_oop_sasa";
public $con;

public function __construct()
{$this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
if(mysqli_connect_error()){
  trigger_error("Failed to connect to MySql: " . mysqli_connect_error());
}else{
  return $this->con;
}}

public function insertData($post){
  $nama = $this->con->real_escape_string($_POST['nama']);
  $email = $this->con->real_escape_string($_POST['email']);
  $username = $this->con->real_escape_string($_POST['username']);
  $password = $this->con->real_escape_string(md5($_POST['password']));
  $query = "insert into pelanggan (nama, email, username, password) values ('$nama', '$email', '$username', '$password')";
  $sql = $this->con->query($query);
  if ($sql==true){
    header("Location:index.php?msgl=insert");
  }else{
    echo "Registration failed, try again!";
  }
}

public function displayData(){
  $query = "select * from `pelanggan`";
  $result = $this->con->query($query);
  if ($result->num_rows>0){
    $data = array ();
    while ($row = $result->fetch_assoc()){
      $data[] = $row;
    }
    return $data;
  }else{
    echo "No found records";
  }
}

public function displayRecordById($id){
  $query = "select * from pelanggan where id = '$id'";
  $result = $this->con->query($query);
  if($result->num_rows > 0 ){
    $row = $result->fetch_assoc();
    return $row;
  }else{
    echo "Record not found";
  }
}

public function updateRecord($postData){
  $nama = $this->con->real_escape_string($_POST['unama']);
  $email = $this->con->real_escape_string($_POST['uemail']);
  $username = $this->con->real_escape_string($_POST['unusername']);
  $id = $this->con->real_escape_string($_POST['id']);
  if(!empty($id) && !empty($postData)){
    $query = "UPDATE pelanggan set nama = '$nama', email = '$email', username = '$username' where id = '$id'";
    $sql = $this->con->query($query);
    if ($sql==true){
      header("Location:index.php?msg2=update");
    }else{
      echo "Registration update failed, try again!";
    }
  }
}

public function deleteRecord($id){
  $query = "delete from pelanggan where id = '$id'";
  $sql = $this->con->query($query);
  if ($sql==true){
    header("Location:index.php?msg3=delete");
  }else{
    echo "Record does not delete, try again!";
  }
}
}?>