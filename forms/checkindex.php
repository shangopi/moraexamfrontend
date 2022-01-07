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

$stmt = $db->prepare("SELECT name,indexnum,gender,centre FROM tbl_online WHERE nic = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
mysqli_stmt_store_result($stmt);

if(mysqli_stmt_num_rows($stmt) == 1){ 
    
  mysqli_stmt_bind_result($stmt,$name, $index_no, $gender, $centre);
  mysqli_stmt_fetch($stmt);
  echo "1^".$index_no."^".$name."^".$gender."^".$centre;
 

}
else{
  echo '0';
}

/*
$sql = "SELECT code, voted_no FROM tbl_online ";
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

*/
?>