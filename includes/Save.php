<!-- ***********************************************************************************
  Page Name  : Save.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 CGS 4854 RVC 85157
  Program #  : Program 3
  Purpose    : This page saves the record that the user inputted in the front end.

  Due Date   : 03/8/2024

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Helen Gomez }..........
 ******************************************************************************* -->

 <!-- Declaration of HTML 5 -->
 <!DOCTYPE html>

 <!-- Start of html -->
 <html> 
  
  <!-- Start of body -->
  <body> 
   
   <!-- Start of php language -->
   <?php
 
 /*
      echo "Employee ID: "$EmployeeID. "<br>";
      echo "Email: "$Email. "<br>";
      echo "First Name: ".$FirstName. "<br>";
      echo "Last Name: ".$LastName. "<br>";
      echo "Office Address: ".$OfficeAddress. "<br>";
      echo "City: ".$City. "<br>";
      echo "State: ".$State. "<br>";
      echo "Country: ".$Country. "<br>";
      echo "Zip: ".$Zip. "<br>";
      echo "Comments: ".$Comments. "<br>";
      echo "Position: ".$Position. "<br>";
      echo "Department: ".$Department. "<br>";
      echo "Days Work: ".$Weekends."<br>";
      echo "Days Work: ".$Weekdays."<br>";
      echo "Days Work: ".$Vacation."<br>";
      echo "Days Work: ".$Custom."<br>";
  */

  //If statement to determine if the PRIMARY KEY exists or creates a new data inputted in to the database
  $EmployeeID=trim($EmployeeID);
  if(strlen($EmployeeID) > 0)
  {
    $sql="INSERT INTO Employees (
      EmployeeID,
      Email,
      FirstName,
      LastName,
      OfficeAddress,
      City,
      State,
      Country,
      Zip,
      Comments,
      Position,
      Department,
      Weekends,
      Weekdays,
      Vacation,
      Custom
      ) VALUES
      (
      '$EmployeeID',
      '$Email',
      '$FirstName',
      '$LastName',
      '$OfficeAddress',
      '$City',
      '$State',
      '$Country',
      '$Zip',
      '$Comments',
      '$Position',
      '$Department',
      '$Weekends',
      '$Weekdays',
      '$Vacation',
      '$Custom'
    )";

    $found = $EmployeeID;

    //Prints message
    if(mysqli_query($connection, $sql))
    {
      $message = "<span style=\"color:blue;\"> RECORD $found ADDED</span><br\>";
    }
    else
    {
      $message = "<span style=\"color:red;\"> RECORD $found ALREADY EXISTS</span><br\>";
    }

  }
  else
  {
    $message = "<span style=\"color:red;\"> RECORD NOT ADDED<BR>EmployeeID CAN NOT BE EMPTY</span><br\>";
  }

  ?> <!--End of php language -->
</body> <!-- End of body -->
</html> <!-- End of html -->
        


