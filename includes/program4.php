<!-- ***********************************************************************************
  Page Name  : program4.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 CGS 4854 RVC 85157
  Program #  : Program 4
  Purpose    : This page sets up the front end of program 4.

  Due Date   : 04/02/2024

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Helen Gomez }..........
******************************************************************************* -->

<!DOCTYPE html>  <!-- Declaration of HTML 5 -->

<!-- Start of html -->
<html>

  <!-- Start of header -->
  <head>
    <!--Title of Program 4-->
    <title>GomezHelenProgram4</title>

    <!--Start of Javascript-->
    <script>

      //Creates currentTime function
      function currentTime() 
      {
        //Gets the current time the user is on the website
        var today = new Date();
        var hour = today.getHours();
        var minutes = today.getMinutes();
        var sec = today.getSeconds();

        minutes = checkTime(minutes);
        sec = checkTime(sec);

        document.getElementById('txt').innerHTML = "Current Time: " + hour + ":" + minutes + ":" + sec;

        var T = setTimeout(function(){currentTime()},500);
      }

      //Creates the checkTime function
      function checkTime(i) 
      {
        //Checks the time that the user is on the website
        if(i<10) { 
          i = "0" + i 
        };
        return i;
      }

    </script> <!--End of javascript-->

    <!--Start of CSS style-->
    <style> 

      .tooltip 
      {
        position: relative;
        display: inline-block;
        }
        
      .tooltip .tooltiptext
      {
        visibility: hidden;
        width: 120px;
        background-color: pink;
        color: black;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -60px;
        opacity: 0;
        transition: opacity 0.5s;
      }

      .tooltip .tooltiptext::after 
      {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: pink transparent transparent transparent;
      }

      .tooltip:hover .tooltiptext
      {
        visibility: visible;
        opacity: 1;
      }

    </style> <!--End of CSS style -->

  </head> <!-- End of header -->
          
  <!-- Start of body -->
  <body>

    <!-- Calls Gomezheader.php and mainMenu.php -->
    <?php  include( 'Gomez_header.php' );  ?><br>
    <table style="width: 48%; margin: 0px auto; padding-center: 10%;"> 
      <tr>
        <td style="width: 67%; text-align: left;">
          <body>
            <script>
              loggedInTime();
                    
              var temp1;
              
              function loggedInTime( temp )
              {
                var date = new Date();  
                var temp2 =  "Logged in: " + date;
                temp1 = temp2;
                document.write( temp1 );
              }
              currentTime();
            </script>
          </body>
        </td>
        <td style="width: 25%; text-align: right;">
          <body onload = "currentTime()">
            <div id="txt"></div>
          </body>
        </td>
      </tr>
      <tr><td> &nbsp; </td></tr>
    <table>
    <font color="red" size="6"><strong><center>Program 4</center></strong></font>
    <?php  include( 'mainMenu.php' );  ?>

    <!-- Creates the front end part where the user can input their information -->
    <div>
      <form method="post" action="Controller4.php">
        <br>
        <table style="width: 60%; margin: 0px auto; padding-right: 10%;"> 
        <!-- Creates EmployeeID textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">
              <div class = "tooltip">
                Employee ID &nbsp;
                <span class="tooltiptext">
                  REQUIRED: Please enter your Employee ID in the text box
                </span>
              </div>
            </td>
            <td style="width: 20%;">
              <input type="text" name="EmployeeID" placeholder = "Employee ID"value="<?php echo $EmployeeID ?>" style="width: 100%;">
            </td>
          </tr>

          <!-- Creates Email textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">
              <div class = "tooltip">
                Email &nbsp;
                <span class="tooltiptext">
                  Please enter your Email in the text box
                </span>
              </div>
            </td>
            <td style="width: 20%;">
              <input type="text" name="Email" placeholder="Email" value="<?php echo $Email ?>" style="width: 100%;">
            </td>
          </tr>

          <!-- Creates First Name textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">
              <div class = "tooltip">
                First Name &nbsp;
                <span class="tooltiptext">
                  Please enter your First Name in the text box
                </span>
              </div>
            </td>
            <td style="width: 20%;">
              <input type="text" name="FirstName" placeholder="First Name" value="<?php echo $FirstName ?>" style="width: 100%;">
            </td>
          </tr>

          <!-- Creates Last Name textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">
              <div class = "tooltip">
                Last Name &nbsp;
                <span class="tooltiptext">
                  Please enter your Last Name in the text box
                </span>
              </div>
            </td>
            <td style="width: 20%;">
              <input type="text" name="LastName" placeholder="Last Name" value="<?php echo $LastName ?>" style="width: 100%;">
            </td>
          </tr>

          <!-- Creates Office Address textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">
              <div class = "tooltip">
                Office Address &nbsp;
                <span class="tooltiptext">
                  Please enter your Office Address in the text box
                </span>
              </div>
            </td>
            <td style="width: 20%;">
              <input type="text" name="OfficeAddress" placeholder="Office Address" value="<?php echo $OfficeAddress ?>" style="width: 100%;">
            </td>
          </tr>

          <!-- Creates City textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">
            <div class = "tooltip">
                City &nbsp;
                <span class="tooltiptext">
                  Please enter your City in the text box
                </span>
              </div>
            </td>
            <td style="width: 20%;">
              <input type="text" name="City" placeholder="City" value="<?php echo $City ?>" style="width: 65%;">
            </td>
          </tr>

          <!-- Creates State textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">
            <div class = "tooltip">
                State &nbsp;
                <span class="tooltiptext">
                  Please enter your State in the text box
                </span>
              </div>
            </td>
            <td style="width: 20%;">
              <input type="text" name="State" placeholder="State" value="<?php echo $State ?>" style="width: 65%;">
            </td>
          </tr>

          <!-- Creates Country textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">
            <div class = "tooltip">
                Country &nbsp;
                <span class="tooltiptext">
                  Please enter your Country in the text box
                </span>
              </div>
            </td>
            <td style="width: 20%;">
              <input type="text" name="Country" placeholder="Country" value="<?php echo $Country ?>" style="width: 65%;">
            </td>
          </tr>

          <!-- Creates Zip textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">
            <div class = "tooltip">
                Zip &nbsp;
                <span class="tooltiptext">
                  Please enter your Zip Code in the text box
                </span>
              </div>
            </td>
            <td style="width: 20%;">
              <input type="text" name="Zip" placeholder="Zip" value="<?php echo $Zip ?>" style="width: 65%;">
            </td>
          </tr>
          
          <tr><td> &nbsp; </td></tr>

          <!-- Creates Comments textarea -->
          <tr>
            <td style="width: 5%; text-align: right;">
            <div class = "tooltip">
                Comments &nbsp;
                <span class="tooltiptext">
                  Please enter your Comments in the text box
                </span>
              </div>
            </td>
            <td style="width: 20%;">
              <textarea name="Comments" placeholder="Comments" rows="5" cols="42"><?php echo $Comments;?></textarea>
            </td>
          </tr>
          
          <tr><td> &nbsp; </td></tr>
          
          <!-- Creates Position dropdown -->
          <tr>
            <td style="width: 5%; text-align: right;">
            <div class = "tooltip">
                Position &nbsp;
                <span class="tooltiptext">
                  Please select your Position from this dropdown
                </span>
              </div>
            </td>
            <td style="width: 20%; text-align: left;">
              <select name= "Position" style="width: 100%" size="1";>
                <option value=" " <?php if ($Position == " ") echo selected ?>                                      > </option>
                <option value="Supervisor" <?php if ($Position == "Supervisor") echo selected ?>                    >Supervisor</option>
                <option value="Manager" <?php if ($Position == "Manager") echo selected ?>                          >Manager</option>
                <option value="Assistant Manager" <?php if ($Position == "Assistant Manager") echo selected ?>      >Assistant Manager</option>
                <option value="Full-Time Associate" <?php if ($Position == "Full-Time Associate") echo selected ?>  >Full-Time Associate</option>
                <option value="Part-Time Associate" <?php if ($Position == "Part-Time Associate") echo selected ?>  >Part-Time Associate</option>
              </select>
            </td>
          </tr>


          <tr><td> &nbsp; </td></tr>

          <!-- Creates Department radio buttons -->
          <tr>
          <td style="width: 5%; text-align: right;">
          <div class = "tooltip">
                Department &nbsp;
                <span class="tooltiptext">
                  Please select your Department from these options
                </span>
              </div>
            </td>
          <td style="width 20%; text-align: left;">
             <table>
               <tr>
                 <td style="width: 25%;"><input type="radio" <?php if ($Department == "Deli") echo checked; ?> 
                    name="Department" value="Deli">Deli</td>
                 <td style="width: 30%;"><input type="radio" <?php if ($Department == "Kitchen") echo checked; ?>
                    name="Department" value="Kitchen">Kitchen</td>
                 <td style="width: 27%;"><input type="radio" <?php if ($Department == "Food") echo checked; ?>
                    name="Department" value="Food">Food</td>
                 <td style="width: 25%;"><input type="radio" <?php if ($Department == "Crafts") echo checked; ?>
                    name="Department" value="Crafts">Crafts</td>
                </tr>
              </table>
            </td>
        </tr>

        <!-- Creates Days Work checkboxes -->
        <tr>
           <td style="width: 5%; text-align: right;">
           <div class = "tooltip">
                Days Work &nbsp;
                <span class="tooltiptext">
                  Please select one or more of these options
                </span>
              </div></td>
           <td style="width: 20%;">
             <table>
               <tr>
                 <td style="width: 23%;"><input type="checkbox" name="Weekends" 
                 <?php if ($Weekends == "Weekends") echo checked; ?> value="Weekends">Weekends</td> 
                 <td style="width: 27%;"><input type="checkbox" name="Weekdays" 
                 <?php if ($Weekdays == "Weekdays") echo checked; ?> value="Weekdays">Weekdays</td> 
                 <td style="width: 24%;"><input type="checkbox" name="Vacation" 
                 <?php if ($Vacation == "Vacation") echo checked; ?> value="Vacation">Vacation</td> 
                 <td style="width: 25%;"><input type="checkbox" name="Custom" 
                 <?php if ($Custom == "Custom") echo checked; ?> value="Custom">Custom</td> 
                </tr>
              </table>
            </td>
          </tr>

          <tr><td> &nbsp; </td></tr>

          <!-- Prints out $message -->
          <tr>
            <td style="width: 3%; text-align: right;"> </td>
            <td style="width: 10%;" align=center>
              <?php echo $message ?>
            </td>
          </tr>

          <tr><td> &nbsp; </td></tr>

          <!-- Creates the buttons on the bottom of the page -->
          <tr>
            <td style="width: 20%;"> </td>
            <td style="width: 30%;" align=center>
              <input type="submit" name="Find" value="Find">&nbsp;
              <input type="submit" name="Save" value="Save">&nbsp;
              <input type="submit" name="Modify" value="Modify">&nbsp;
              <input type="submit" name="Delete" value="Delete">&nbsp;
              <input type="submit" name="Clear" value="Clear">&nbsp;
              <input type="submit" name="ContactMe" value="ContactMe">&nbsp;
              <input type="submit" name="Help" value="Help">&nbsp;
              <input type="submit" name="About" value="About">&nbsp;
              <input type="hidden" name="found" value="<?php echo $found ?>" > 
            </td>
          </tr>
        </table>
      </form>
    </div>

      <tr><td> &nbsp; </td></tr>

      <!-- Calls mainMenu.php at the end of the page -->
      <?php  include( 'mainMenu.php' );  ?> <br>
      <font face="Times New Roman" color="darksalmon" size="6"><center>Helen Gomez</center></font>
  </body> <!-- End of body -->
</html> <!-- End of html -->
      

