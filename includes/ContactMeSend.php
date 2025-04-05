<!-- ***********************************************************************************
  Page Name  : ContactMeSend.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 CGS 4854 RVC 85157
  Program #  : Program 3
  Purpose    : This page will display a message after the email has beent sent out.

  Due Date   : 03/8/2024

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Helen Gomez }..........
 ******************************************************************************* -->

 <!-- Declaration of HTML 5 -->
 <!DOCTYPE html>

 <!-- Start of html -->
 <html>
  <!-- Start of head -->
  <head>
    <title>ContactMeSend</title>
  </head> <!-- End of head -->

  <!-- Start of body -->
  <body>
    <!-- Create the format of the page after the ContactMe email was sent -->
    <?php include('Gomez_header.php') ?><br>
    <font color="red" size = "5"><strong><center>CONTACT ME</center></strong></font> <br>
    <?php include('mainMenu.php') ?><br><br>
    <center><?php echo "Your message has been submitted to ".$to ?></center><br>
    <center><?php echo "Thank You!" ?> </center><br>
  </body> <!-- End of body -->

</html> <!-- End of html -->
    

