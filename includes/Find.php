<!-- ***********************************************************************************
  Page Name  : Find.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 CGS 4854 RVC 85157
  Program #  : Program 3
  Purpose    : This page finds the record that the user is requesting from the front end.

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

      //Set variable
      $sql = "SELECT * FROM Employees where EmployeeID = '$EmployeeID' ";
      
      //If statement to determine if the PRIMARY KEY exists and is found
      if($result = mysqli_query($connection, $sql))
      {
        $rowcount = mysqli_num_rows($result);

        //Prints out the information related to the PRIMARY KEY if found
        while($row = mysqli_fetch_array( $result ))
        {
          $EmployeeID     = $row['EmployeeID'];
          $Email          = $row['Email'];
          $FirstName      = $row['FirstName'];
          $LastName       = $row['LastName'];
          $OfficeAddress  = $row['OfficeAddress'];
          $City           = $row['City'];
          $State          = $row['State'];
          $Country        = $row['Country'];
          $Zip            = $row['Zip'];
          $Comments       = $row['Comments'];
          $Position       = $row['Position'];
          $Department     = $row['Department'];
          $Weekends       = $row['Weekends'];
          $Weekdays       = $row['Weekdays'];
          $Vacation       = $row['Vacation'];
          $Custom         = $row['Custom'];
        }    
        
        //Prints message
        if($rowcount)
        {
          $found = $EmployeeID;
          $message = "<span style=\"color:blue;\">RECORD $found FOUND</span><br\>";
        }
        else if (strlen($EmployeeID) == 0)
        {
          $message = "<span style=\"color:red;\">EmployeeID CAN NOT BE EMPTY</span><br\>";

          $EmployeeID     = "";
          $Email          = "";
          $FirstName      = "";
          $LastName       = "";
          $OfficeAddress  = "";
          $City           = "";
          $State          = "";
          $Country        = "";
          $Zip            = "";
          $Comments       = "";
          $Position       = "";
          $Department     = "";
          $Weekends       = "";
          $Weekdays       = "";
          $Vacation       = "";
          $Custom         = "";

          $found          = "";
        }
        else
        {
          $message = "<span style=\"color:red;\">RECORD $EmployeeID NOT FOUND</span><br\>";

          $EmployeeID     = "";
          $Email          = "";
          $FirstName      = "";
          $LastName       = "";
          $OfficeAddress  = "";
          $City           = "";
          $State          = "";
          $Country        = "";
          $Zip            = "";
          $Comments       = "";
          $Position       = "";
          $Department     = "";
          $Weekends       = "";
          $Weekdays       = "";
          $Vacation       = "";
          $Custom         = "";

          $found          = "";
        }
      }
    ?> <!-- End of php language --> 
  </body> <!-- End of body -->
</html> <!-- End of html -->