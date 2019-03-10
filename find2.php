<?php 

require "config.php";

$sql = "SELECT * FROM serials_table";

if(isset($_POST['Serial'])) {

$input = $_POST['Serial'];

$final = false;

$result= mysqli_query($con, $sql);
 while($row = mysqli_fetch_array($result)){
      $asset = $row['Tag'];
      $name = $row['Name'];
      $location = $row['Location'];
      $serial = $row['Serial'];
      $manu = $row['Manufacturer'];
      $model = $row['Model'];
      $owner = $row['Owner'];
      $department = $row['Department'];
      $mac = $row['MAC_Address'];
      $part = $row['Part_Number'];
      $warranty = $row['Warranty'];
      $OS = $row['OS'];
      $repair = $row['Repair_History'];
      $purchase = $row['Purchase_Order'];
      $ticket = $row['Ticket'];
      $Notes = $row['Notes'];
      
      if($serial == $input) {
          echo "    <p>
    SERIAL NUMBER FOUND!!!
        <br><br>
        <strong><u>COMPUTER INFORMATION:</u></strong>
        <br><br><br>
        <strong>Asset Tag:</strong> $asset
        <br><br>
        <strong>Computer Name:</strong> $name
        <br><br>
        <strong>Location:</strong> $location
        <br><br>
        <strong>Serial Number:</strong> $serial
        <br><br>
        <strong>Manufacturer:</strong> $manu
        <br><br>
        <strong>Model:</strong> $model
        <br><br>
        <strong>Owner:</strong> $owner
        <br><br>
        <strong>Department:</strong> $department
        <br><br>
        <strong>MAC Address:</strong> $mac
        <br><br>
        <strong>Part Number:</strong> $part
        <br><br>
        <strong>Warranty:</strong> $warranty
        <br><br>
        <strong>OS:</strong> $OS
        <br><br>
        <strong>Repair History:</strong> $repair
        <br><br>
        <strong>Purchase Order:</strong> $purchase
        <br><br>
        <strong>Ticket:</strong> $ticket
        <br><br>
        <strong>Notes:</strong> $notes
        <br><br>------------------------------------------------------<br><br>
    </p>";
          
          $final = true;
      }
 }
 
 if($final) {
     //echo "FOUND" . "<br>";
 } else {
     echo "<html>
<body>
    
    
    <p>
    ASSET TAG NOT FOUND
        <br><br>
        <strong><u>Add Computer to Database</u></strong>
        <br><br>
    </p>
    
    
<form action=\"https://cuasset.000webhostapp.com/add.php\" method=\"post\" target=\"_self\">
    
        Asset Tag:
        <input type=\"number\" name=\"Tag\" value=\"\" required> Required Field
<br><br>
            Location:
        <input type=\"text\" name=\"Location\" value=\"\">
<br><br>
            Computer Name:
        <input type=\"text\" name=\"Name\" value=\"\">
<br><br>
            Serial Number:
        <input type=\"text\" name=\"Serial\" value=\"\">
<br><br>
            Manufacturer:
        <input type=\"text\" name=\"Manufacturer\" value=\"\">
<br><br>
            Model:
        <input type=\"text\" name=\"Model\" value=\"\">
<br><br>
            Owner:
        <input type=\"text\" name=\"Owner\" value=\"\">
<br><br>
            Department:
        <input type=\"text\" name=\"Department\" value=\"\">
<br><br>
            MAC Address:
        <input type=\"text\" name=\"MAC_Address\" value=\"\">
<br><br>
            Part Number:
        <input type=\"text\" name=\"Part_Number\" value=\"\">
<br><br>
            Warranty:
        <input type=\"text\" name=\"Warranty\" value=\"\">
<br><br>
            OS:
        <input type=\"text\" name=\"OS\" value=\"\">
<br><br>
            Repair History:
        <input type=\"text\" name=\"Repair_History\" value=\"\">
<br><br>
            Purchase Order:
        <input type=\"text\" name=\"Purchase_Order\" value=\"\">
<br><br>
            Ticket:
        <input type=\"text\" name=\"Ticket\" value=\"\">
<br><br>
            Notes:
        <input type=\"text\" name=\"Notes\" value=\"\">
<br><br>
    
        <input type=\"submit\" value=\"Submit\">
    
</form>
    
    <br><hr><br>
    
    <p>
    
        <u><strong>Google Form and Excel Sheets</strong></u>
        <br><br>
        
        <a href=\"https://docs.google.com/forms/d/1PTUiM0apgGC03ieItaB6ST1QVfAmWVWx8XCLtiqsDic/viewform?edit_requested=true\">Inventory Updates Form</a>
        <br><br>
        <a href=\"https://docs.google.com/spreadsheets/d/1CM8xtlsvU412ILVDHRU9Wk6X7lmLYGGtGCoo2H4r6kI/edit\">True Database Excel Sheet</a>
        <br><br>
        <a href=\"https://docs.google.com/spreadsheets/d/15-2e9qqCH2A-kFAFq4m793P0lyvJ3ud9q3rgV48Lkfk/edit#gid=263461983\">Inventory Updates Excel Sheet</a>
        <br><br>
    
    </p>

</body>
</html>";
 }
}

?>