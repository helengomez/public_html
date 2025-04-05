 <!-- ***********************************************************************************
  Page Name  : Controller2.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 CGS 4854 RVC 85157
  Program #  : Program 2
  Purpose    : Controller2.php takes the information that the user inputted on the Program 2 page and prints it out formatted.

  Due Date   : 02/15/2024

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Helen Gomez }..........
******************************************************************************* -->

<!DOCTYPE html>  <!-- Declaration of HTML 5 -->

<html> <!-- Start of html -->

  <!-- Start of head -->
  <head>
    <title>Controller2.php</title>
  </head> <!-- End of head -->

  <!-- Start of body -->
  <body>
    <!-- Start of php -->
    <?php
        
      //Prints out 'This is Controller2.php
      echo "This is Controller2.php <br><br>";

      echo "Called from Program 2 <br><br>";

      //Takes the information that the user inputted and assigns to corresponding variable
      $EmployeeID     = $_POST['EmployeeID'];
      $Email          = $_POST['Email'];
      $FirstName      = $_POST['FirstName'];
      $LastName       = $_POST['LastName'];
      $OfficeAddress  = $_POST['OfficeAddress'];
      $City           = $_POST['City'];
      $State          = $_POST['State'];
      $Country        = $_POST['Country'];
      $Zip            = $_POST['Zip'];
      $Comments       = $_POST['Comments'];
      $Position       = $_POST['Position'];
      $Department     = $_POST['Department'];
      $Weekends       = $_POST['Weekends'];
      $Weekdays       = $_POST['Weekdays'];
      $Vacation       = $_POST['Vacation'];
      $Custom         = $_POST['Custom'];

      //Prints out the information that the user inputted
      echo "EmployeeID: ". $EmployeeID. "<br>";
      echo "Email: ".$Email. "<br>";
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

      //Prints out which button the user pressed
      if ($_POST['Find'])
      {
        echo "<br><h4> You pressed the Find button </h4>";
      }
      else if ($_POST['Save'])
      {
        echo "<br><h4> You pressed the Save button </h4>";
      }
      else if ($_POST['Modify'])
      {
        echo "<br><h4> You pressed the Modify button </h4>";         
      }
      else if ($_POST['Delete'])
      {
        echo "<br><h4> You pressed the Delete button </h4>";        
      }
      else{
        echo "<br><h4> You pressed an UNKNOWN button </h4>";
      }
      
    ?> <!--End of php -->
  </body> <!--End of body -->
</html> <!--End of html -->
        







