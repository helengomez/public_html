<!-- ***********************************************************************************
  Page Name  : Contact_me.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 CGS 4854 RVC 85157
  Program #  : Program 3
  Purpose    : This page will display all the information formatted 

  Due Date   : 03/8/2024

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Helen Gomez }..........
 ******************************************************************************* -->

 <!-- Declaration of HTML 5 -->
 <!DOCTYPE html>

 <!-- Start of html -->
 <html>
  <!-- Start of header -->
  <head>
      <title>Contact Me</title>
  </head> <!-- End of header -->
          
  <!-- Start of body -->
  <body>
    <!-- Calls Gomezheader.php and mainMenu.php and creates header -->
    <?php  include( 'Gomez_header.php' );  ?><br>
    <font color="red" size = "5"><strong><center>CONTACT ME</center></strong></font> <br>
    <?php  include( 'mainMenu.php' );  ?>

    <div>
      <form method="post" action="Contact_me_Controller.php">
        <br>
        <table style="width: 50%; margin: 0px auto; padding-right: 10%;"> 
        <!-- Creates Email textbox -->
          <tr>
            <td style="width: 5%; text-align: left;">Your Email &nbsp;</td>
            <td style="width: 80%;">
              <input type="text" name="CEmail" value="<?php echo $CEmail ?>" style="width: 61%;">
            </td>
          </tr>
  
        <!-- Creates LastName textbox -->
        <tr>
          <td style="width: 5%; text-align: left;">Last Name &nbsp;</td>
          <td style="width: 80%;">
            <input type="text" name="CLName" value="<?php echo $CLName ?>" style="width: 61%;">
          </td>
        </tr>

        <!-- Creates FirstName textbox -->
        <tr>
          <td style="width: 5%; text-align: left;">First Name &nbsp;</td>
          <td style="width: 80%;">
            <input type="text" name="CFName" value="<?php echo $CFName ?>" style="width: 61%;">
          </td>
        </tr>     
        
        <tr><td> &nbsp; </td></tr>

        <!-- Creates Category Radio Buttons -->
        <tr>
          <td style="width: 5%; text-align: left;">Category &nbsp;</td>
          <td style="width 80%; text-align: left;">
             <table>
               <tr>
                 <td style="width: 26%;"><input type="radio" <?php if ($CCategory == "Urgent") echo checked; ?> 
                    name="CCategory" value="Urget">Urgent</td>
                 <td style="width: 30%;"><input type="radio" <?php if ($CCategory == "Normal") echo checked; ?>
                    name="CCategory" value="Normal">Normal</td>
                 <td style="width: 28%;"><input type="radio" <?php if ($CCategory == "Casual") echo checked; ?>
                    name="CCategory" value="Casual">Casual</td>
                </tr>
              </table>
            </td>
        </tr>

        <!-- Creates Topic checkboxes -->
        <tr>
           <td style="width: 5%; text-align: left;">Topic  &nbsp;</td>
           <td style="width: 80%;">
             <table>
               <tr>
                 <td style="width: 35%;"><input type="checkbox" name="CHours" 
                 <?php if ($CHours == "Hours") echo checked; ?> value="Hours">Hours</td> 
                 <td style="width: 40%;"><input type="checkbox" name="CPay" 
                 <?php if ($CPay == "Pay") echo checked; ?> value="Pay">Pay</td> 
                 <td style="width: 35%;"><input type="checkbox" name="COther" 
                 <?php if ($COther == "Other") echo checked; ?> value="Other">Other</td> 
                </tr>
              </table>
            </td>
          </tr>

          <tr><td> &nbsp; </td></tr>

          <!-- Creates Position Dropdown -->
          <tr>
            <td style="width: 5%; text-align: left;">Position &nbsp;</td>
            <td style="width: 80%; text-align: left;">
              <select name= "CPosition" style="width: 63%" size="1";>
                <option value=" " <?php if ($CPosition == " ") echo selected ?>                                      > </option>
                <option value="Supervisor" <?php if ($CPosition == "Supervisor") echo selected ?>                    >Supervisor</option>
                <option value="Manager" <?php if ($CPosition == "Manager") echo selected ?>                          >Manager</option>
                <option value="Assistant Manager" <?php if ($CPosition == "Assistant Manager") echo selected ?>      >Assistant Manager</option>
                <option value="Full-Time Associate" <?php if ($CPosition == "Full-Time Associate") echo selected ?>  >Full-Time Associate</option>
                <option value="Part-Time Associate" <?php if ($CPosition == "Part-Time Associate") echo selected ?>  >Part-Time Associate</option>
              </select>
            </td>
          </tr>

          <tr><td> &nbsp; </td></tr>

          <!-- Creates Comments textarea -->
          <tr>
            <td style="width: 5%; text-align: left;">Comments &nbsp;</td>
            <td style="width: 80%;">
              <textarea name="CComments" rows="5" cols="32"><?php echo $CComments; ?></textarea>
            </td>
          </tr>

          <tr><td> &nbsp; </td></tr>

          <!-- Creates Buttons on the bottom -->
          <tr>
            <td style="width: 20%;"> </td>
            <td style="width: 80%;" align=center>
              <input type="submit" name="CSubmit" value="Submit">&nbsp;
              <input type="reset" name="CClear" value="Clear">&nbsp;
            </td>
          </tr>

          <tr><td> &nbsp; </td></tr>

        </table>
      </form>
    </div>

    <!-- Calls mainMenu.php -->
    <?php  include( 'mainMenu.php' );  ?>

  </body> <!-- End of body -->
 </html> <!-- End of html -->

