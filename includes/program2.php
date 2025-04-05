<!-- ***********************************************************************************
  Page Name  : program2.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 CGS 4854 RVC 85157
  Program #  : Program 2
  Purpose    : This page sets up the front end of program 2

  Due Date   : 02/15/2024

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Helen Gomez }..........
 ******************************************************************************* -->

<!DOCTYPE html>  <!-- Declaration of HTML 5 -->

<!-- Start of html -->
<html>
  <!-- Start of header -->
  <head>
      <title>GomezHProgram2</title>
  </head> <!-- End of header -->
          
  <!-- Start of body -->
  <body>
    <!-- Calls Gomezheader.php and mainMenu.php -->
    <?php  include( 'Gomez_header.php' );  ?><br>
    <?php  include( 'mainMenu.php' );  ?>

    <!-- Creates the front end part where the user can input their information -->
    <div>
      <form method="post" action="Controller2.php">
        <br>
        <table style="width: 50%; margin: 0px auto; padding-right: 10%;"> 
        <!-- Creates EmployeeID textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">Employee ID &nbsp;</td>
            <td style="width: 20%;">
              <input type="text" name="EmployeeID" value=" " style="width: 100%;">
            </td>
          </tr>

          <!-- Creates Email textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">Email &nbsp;</td>
            <td style="width: 20%;">
              <input type="text" name="Email" value=" " style="width: 100%;">
            </td>
          </tr>

          <!-- Creates First Name textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">First Name &nbsp;</td>
            <td style="width: 20%;">
              <input type="text" name="FirstName" value=" " style="width: 100%;">
            </td>
          </tr>

          <!-- Creates Last Name textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">Last Name &nbsp;</td>
            <td style="width: 20%;">
              <input type="text" name="LastName" value=" " style="width: 100%;">
            </td>
          </tr>

          <!-- Creates Office Address textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">Office Address &nbsp;</td>
            <td style="width: 20%;">
              <input type="text" name="OfficeAddress" value=" " style="width: 100%;">
            </td>
          </tr>

          <!-- Creates City textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">City &nbsp;</td>
            <td style="width: 20%;">
              <input type="text" name="City" value=" " style="width: 65%;">
            </td>
          </tr>

          <!-- Creates State textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">State &nbsp;</td>
            <td style="width: 20%;">
              <input type="text" name="State" value=" " style="width: 65%;">
            </td>
          </tr>

          <!-- Creates Country textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">Country &nbsp;</td>
            <td style="width: 20%;">
              <input type="text" name="Country" value=" " style="width: 65%;">
            </td>
          </tr>

          <!-- Creates Zip textbox -->
          <tr>
            <td style="width: 5%; text-align: right;">Zip &nbsp;</td>
            <td style="width: 20%;">
              <input type="text" name="Zip" value=" " style="width: 65%;">
            </td>
          </tr>
          
          <tr><td> &nbsp; </td></tr>

          <!-- Creates Comments textarea -->
          <tr>
            <td style="width: 5%; text-align: right;">Comments &nbsp;</td>
            <td style="width: 20%;">
              <textarea name="Comments" rows="5" cols="42"></textarea>
            </td>
          </tr>

          <tr><td> &nbsp; </td></tr>
          
          <!-- Creates Position dropdown -->
          <tr>
            <td style="width: 5%; text-align: right;">Position &nbsp;</td>
            <td style="width: 20%; text-align: left;">
              <select name= "Position" style="width: 100%" size="1";>
                <option value=" "> </option>
                <option value="Supervisor">Supervisor</option>
                <option value="Manager">Manager</option>
                <option value="Assistant Manager">Assistant Manager</option>
                <option value="Full-Time Associate">Full-Time Associate</option>
                <option value="Part-Time Associate">Part-Time Associate</option>
              </select>
            </td>
          </tr>


          <tr><td> &nbsp; </td></tr>

          <!-- Creates Department radio buttons -->
          <tr>
          <td style="width: 5%; text-align: right;">Department &nbsp;</td>
          <td style="width 20%; text-align: left;">
             <table>
               <tr>
                 <td style="width: 25%;"><input type="radio" name="Department" value="Deli">Deli</td>
                 <td style="width: 30%;"><input type="radio" name="Department" value="Kitchen">Kitchen</td>
                 <td style="width: 27%;"><input type="radio" name="Department" value="Food">Food</td>
                 <td style="width: 25%;"><input type="radio" name="Department" value="Crafts">Crafts</td>
                </tr>
              </table>
            </td>
        </tr>

        <!-- Creates Days Work checkboxes -->
        <tr>
           <td style="width: 5%; text-align: right;">Days Work  &nbsp;</td>
           <td style="width: 20%;">
             <table>
               <tr>
                 <td style="width: 23%;"><input type="checkbox" name="Weekends" value="Weekends">Weekends</td> 
                 <td style="width: 27%;"><input type="checkbox" name="Weekdays" value="Weekdays">Weekdays</td> 
                 <td style="width: 24%;"><input type="checkbox" name="Vacation" value="Vacation">Vacation</td> 
                 <td style="width: 25%;"><input type="checkbox" name="Custom" value="Custom">Custom</td> 
                </tr>
              </table>
            </td>
          </tr>

          <tr><td> &nbsp; </td></tr>

          <!-- Prints out $message -->
          <tr>
            <td style="width: 3%; text-align: right;"></td>
            <td style="width: 10%;" align=center>$message</td>
          </tr>

          <tr><td> &nbsp; </td></tr>

          <!-- Creates the buttons on the bottom of the page -->
          <tr>
            <td style="width: 15%;"> </td>
            <td style="width: 20%;" align=center>
              <input type="submit" name="Save" value="Save">&nbsp;
              <input type="submit" name="Find" value="Find">&nbsp;
              <input type="submit" name="Modify" value="Modify">&nbsp;
              <input type="submit" name="Delete" value="Delete">&nbsp;
              <input type="reset" name="ClearScreen" value="ClearScreen">
            </td>
          </tr>
        </table>
      </form>
    </div>

      <tr><td> &nbsp; </td></tr>

      <!-- Calls mainMenu.php at the end of the page -->
      <?php  include( 'mainMenu.php' );  ?>
  </body> <!-- End of body -->
</html> <!-- End of html -->
      

