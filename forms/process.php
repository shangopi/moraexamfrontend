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
    $vote_for = test_input($_POST['vote_for']);
}
$_SESSION['voted_no'] = 1;

$sql = "UPDATE junior SET vote_for='{$vote_for}', voted_no = voted_no+1 WHERE code='{$id}'";

if ($db->query($sql) === TRUE) {
  echo "Voted Successfully";
  header('Location: ../votingpage.php');
} else {
  echo "Error .. Please contact 0766891372 " ;
}

?>
            


              
                
                
            
            
                        
                      
