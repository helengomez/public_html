<!-- ***********************************************************************************
  Page Name  : Controller4.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 CGS 4854 RVC 85157
  Program #  : Program 4
  Purpose    : This page will perform the backend of program 4

  Due Date   : 04/2/2024

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Helen Gomez }..........
******************************************************************************* -->

<!DOCTYPE html>  <!-- Declaration of HTML 5 -->

<html> <!-- Start of html -->

  <!-- Start of head -->
  <head>
    <title>Controller3.php</title>
  </head> <!-- End of head -->

  <!-- Start of body -->
  <body>
    <!-- Start of php -->
    <?php

      // Connects to the SQL database
      $connection = mysqli_connect("ocelot.aul.fiu.edu","spr24_hgome059","6339655","spr24_hgome059");
      
      //If statement to determine if the connection was successful
      if (mysqli_connect_errno())
      {
        echo "Failed to connect to MySql: " . mysqli_connect_error();
      } 
      else
      {
        //Determines if the database exists or Creates the database
        $dbName = "spr24_hgome059";
        $db_selected = mysqli_select_db($connection, $dbName);

        if(!$db_selected)
        {
          die($dbName . "does not exist, can't use it " . mysqli_error());
        }
        else
        {

          $tableName = "Employees";

          $query = mysqli_query($connection, "SELECT * from $tableName" );

          if(!$query)
          {
            echo "The " . $tableName . " table does not exist";
            echo "<br>Creating table : " . $tableName . "<br>";

            $sql = "CREATE TABLE " . $tableName . " (
              EmployeeID VARCHAR(100) NOT NULL,
              PRIMARY KEY(EmployeeID),
              Email VARCHAR(50),
              FirstName VARCHAR(100),
              LastName VARCHAR(100),
              OfficeAddress VARCHAR(200),
              City VARCHAR(100),
              State VARCHAR(50),
              Country VARCHAR(100),
              Zip VARCHAR(50),
              Comments VARCHAR(200),
              Position VARCHAR(19),
              Department VARCHAR(7),
              Weekends VARCHAR(8),
              Weekdays VARCHAR(8),
              Vacation VARCHAR(8),
              Custom VARCHAR(6)
            )";

            $result = mysqli_query($connection , $sql);

            if($result)
            {
              echo "table " . $tableName . " created<br><br>";
            }
            else
            {
              die("Can\'t create " . $tableName . " " . mysqli_error() );
            }
          }
        }
      }

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

      $found          = $_POST['found'];

      //Depending on which button the user pressed, the corresponding action will occur
      if ($_POST['Find'])
      {
        include('Find.php');
        include('program4.php');
      }
      else if ($_POST['Save'])
      {
        include('Save.php');
        include('program4.php');
      }
      else if ($_POST['Modify'])
      {
        include('Modify.php');
        include('program4.php');         
      }
      else if ($_POST['Delete'])
      {
        include('Delete.php'); 
        include('program4.php');       
      }
      else if ($_POST['Clear'])
      {
        include('Clear.php'); 
        include('program4.php');       
      }
      else if ($_POST['ContactMe'])
      {
        include('Contact_me.php');        
      }
      else if ($_POST['CSubmit'])
      {
        include('Contact_me_Controller.php');        
      }
      else if ($_POST['Help'])
      {
        include("Help.php");
      }
      else if ($_POST['About'])
      {
        include("About.php");
      }
      else{
        echo "<br><h4> You pressed an UNKNOWN button </h4>";
      }

      mysqli_close($connection);
      
      
    ?> <!--End of php -->

  </body> <!--End of body -->
  
</html> <!--End of html -->
        







