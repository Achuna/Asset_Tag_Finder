<?php 

require "config.php";


if(isset($_POST['Tag'])) {
    $asset = $_POST['Tag'];
      $name = $_POST['Name'];
      $location = $_POST['Location'];
      $serial = $_POST['Serial'];
      $manu = $_POST['Manufacturer'];
      $model = $_POST['Model'];
      $owner = $_POST['Owner'];
      $department = $_POST['Department'];
      $mac = $_POST['MAC_Address'];
      $part = $_POST['Part_Number'];
      $warranty = $_POST['Warranty'];
      $OS = $_POST['OS'];
      $repair = $_POST['Repair_History'];
      $purchase = $_POST['Purchase_Order'];
      $ticket = $_POST['Ticket'];
      $notes = $_POST['Notes'];

      
      if(strlen($asset) > 0) {
          $add = "INSERT INTO asset_tags (Tag, Location, Name, Serial, Manufacturer, Model, Owner, Department, MAC_Address, Part_Number, Warranty, OS, Repair_History, Purchase_Order, Ticket, Notes) VALUES ('$asset', '$location','$name','$serial','$manu','$model','$owner','$department','$mac','$part','$warranty','$OS','$repair','$purchase','$ticket','$notes')";
          
          $result = mysqli_query($con, $add);
          if($result) {
              echo "<p>Successfully Added Computer to 'Asset Tag Table'</p>";
          } else {
              echo "\nError Occurred";
          }
          
      }
      

      
      if(strlen($serial) > 0) {
            $add2 = "INSERT INTO serials_table (Tag, Location, Name, Serial, Manufacturer, Model, Owner, Department, MAC_Address, Part_Number, Warranty, OS, Repair_History, Purchase_Order, Ticket, Notes) VALUES ('$asset', '$location','$name','$serial','$manu','$model','$owner','$department','$mac','$part','$warranty','$OS','$repair','$purchase','$ticket','$notes')";
          
          $result = mysqli_query($con, $add2);
          if($result) {
              echo "<p>Successfully Added Computer to 'Serial Number Table'</p>";
          } else {
              echo "\nError Occurred";
          }
      }
      	
      
    
}


?>