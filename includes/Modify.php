<!-- ***********************************************************************************
  Page Name  : Modify.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 CGS 4854 RVC 85157
  Program #  : Program 3
  Purpose    : This page change a field that the user is requesting from the front end.

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
    <!-- Start of the php language -->
    <?php

    //Sets variable
    $found = $_POST['found'];

    //IF statement to determine if the PRIMARY KEY is found and modified
    if( (strlen(trim($found)) > 0) && ($found == $EmployeeID))
    {

      $query = "UPDATE Employees
                SET Email         = '$Email',
                FirstName         = '$FirstName',
                LastName          = '$LastName',
                OfficeAddress     = '$OfficeAddress',
                City              = '$City',
                State             = '$State',
                Country           = '$Country',
                Zip               = '$Zip',
                Comments          = '$Comments',
                Position          = '$Position',
                Department        = '$Department',
                Weekends          = '$Weekends',
                Weekdays          = '$Weekdays',
                Vacation          = '$Vacation',
                Custom            = '$Custom'

                WHERE EmployeeID  = '$EmployeeID'";

      $sql = mysqli_query($connection, $query);

      //Prints message
      if ($sql)
      {
        $message = "<span style=\"color:blue;\">RECORD $EmployeeID MODIFIED</span><br\>";
      }
      else
      {
        $message = "<span style=\"color:red;\">PROBLEM UPDATING RECORD</span><br\>";
      }
    }
    else
    {
      $message = "<span style=\"color:red;\">RECORD $EmployeeID CAN NOT BE MODIFIED, FIND IT FIRST</span><br\>";
    }
    ?> <!-- End of php language -->
  </body> <!-- End of body -->
</html> <!-- End of html -->


    

