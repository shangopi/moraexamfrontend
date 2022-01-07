<?php
include 'db_connect.php';

if(isset($_GET['id'])){
    $id =  htmlspecialchars($_GET['id'], ENT_QUOTES, 'UTF-8');



      $sql = "SELECT centre_id, centre_name, gender, place FROM tbl_exam_centres WHERE district_id = $id ";
      $sql2 = "SELECT coordinator, telephone FROM tbl_exam_districts WHERE district_id = $id";
      $result = $db->query($sql);
      $result2 = $db->query($sql2);
      ?>

<?php
            if ($db->query($sql2) == TRUE) {
                while($row2 = $result2->fetch_assoc()) {
                  echo '<h3 class=text-info>District coordinator : '.$row2['coordinator'].'</h3>';
                  echo '<h4 class=text-white>Contact Number : '.$row2['telephone'].'<h4>';
                 }
                 ?>
                 </tbody>
                 </table>

<?php



            } else {
                echo "Error ";
    

            }
            ?>
    

            <div style="background-color : white;">
            <table style="text-align : left;" class="table  table-hover table-striped">
              <thead>
                <tr>
                  <th scope="col">Centre ID</th>
                  <th scope="col">Centre's Name</th>
                  <th scope="col">Location</th>
                  <th scope="col">Gender</th>
                </tr>
              </thead>
              <tbody>
                        
                      
<?php
            if ($db->query($sql) == TRUE) {
                while($row = $result->fetch_assoc()) {?>
                  <tr>
                  <th scope="row"><?php echo $row['centre_id']; ?></th>
                  <td><?php echo $row['centre_name']; ?></td>
                  <td> <a href="<?php echo $row['place']; ?>" target="_blank" class="badge badge-success"> <i class=" fa fa-map" aria-hidden="true">  </i> </a></td>
                  <td><?php echo $row['gender']; ?></td>
                </tr>
                
                  
                 <?php }
                 ?>
                 </tbody>
                 </table>
                 </div>

<?php



            } else {
                echo "Error ";
    

            }
            





}

?>
            


              
                
                
            
            
                        
                      
