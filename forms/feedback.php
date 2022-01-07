<?php
include 'db_connect.php';
echo $_GET['qu5'];
if(isset($_GET['qu5'])){

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

    $qu1= $qu2 = $qu3 = $qu4 = $qu5 = $qu6 = $qu7 = $qu8 = $qu9 = $qu10 = $qu11 = "";
    
  if(isset($_GET['qu1'])){
    $qu1 = test_input($_GET['qu1']);
} 
if(isset($_GET['qu2'])){
  $qu2 = test_input($_GET['qu2']);
} 
if(isset($_GET['qu3'])){
  $qu3 = test_input($_GET['qu3']);
} 
if(isset($_GET['qu4'])){
  $qu4 = test_input($_GET['qu4']);
} 
if(isset($_GET['qu5'])){
  $qu5 = test_input($_GET['qu5']);
} 
if(isset($_GET['qu6'])){
  $qu6 = test_input($_GET['qu6']);
} 
if(isset($_GET['qu7'])){
  $qu7 = test_input($_GET['qu7']);
} 
if(isset($_GET['qu8'])){
  $qu8 = test_input($_GET['qu8']);
} 
if(isset($_GET['qu9'])){
  $qu9 = test_input($_GET['qu9']);
} 
if(isset($_GET['qu10'])){
  $qu10 = test_input($_GET['qu10']);
} 
if(isset($_GET['qu11'])){
  $qu11 = test_input($_GET['qu11']);
} 

$sql = " INSERT INTO tbl_feedback( qu1, qu2, qu3, qu4, qu5, qu6, qu7,qu8, qu9, qu10, qu11) VALUES ('{$qu1}','{$qu2}','{$qu3}','{$qu4}','{$qu5}','{$qu6}','{$qu7}','{$qu8}','{$qu9}','{$qu10}','{$qu11}')";
    
if ($db->query($sql) == TRUE) {
    echo "Success!!";
    
    
} else {
    
    echo "Faliled! Server Error";
}
 
}
?>