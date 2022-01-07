<?php
include 'db_connect.php';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['id'])){
  $id = test_input($_POST['id']);
}
else{
  echo'server error';
}

$sql = "SELECT code, voted_no FROM junior ";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($id==$row['code']){
      echo 'success';
      echo $row['voted_no'];
    }
    
  }
} else {
  echo "error";
}


?>