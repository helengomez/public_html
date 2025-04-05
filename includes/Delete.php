<!-- ***********************************************************************************
  Page Name  : Delete.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 CGS 4854 RVC 85157
  Program #  : Program 3
  Purpose    : This page deletes a record that the user is requesting in the front end.

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

    //Sets variables
    $record = "RECORD ". $EmployeeID ." DELETED";
    $found = $_POST['found'];
    $sql = "DELETE FROM Employees WHERE EmployeeID = '$EmployeeID'";
    $EmployeeID = trim($EmployeeID);

    //If statement to determine if PRIMARY KEY is found and deleted
    if ( (strlen(trim($found)) > 0) && ($found == $EmployeeID) )
    {
      if(mysqli_query($connection, $sql))
      {
        $message = "<span style=\"color:red;\"> RECORD $found DELETED </span><br\>";
        $found = "";
      } 
      else
      {
        $message = "Error deleting record: ". mysqli_error($connection);
      }
    }
    else
    {
      $message ="<span style=\"color: red;\">RECORD $EmployeeID CAN NOT BE DELETED, IT DOES NOT EXISTS</span><br\>";
    }

    ?> <!-- End of php language -->
  </body> <!-- End of body -->
</html> <!-- End of html -->