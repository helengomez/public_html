<!-- ***********************************************************************************
  Page Name  : Contact_me_Controller.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 CGS 4854 RVC 85157
  Program #  : Program 3
  Purpose    : This page will perform the backend of the Contact Me page

  Due Date   : 03/8/2024

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Helen Gomez }..........
 ******************************************************************************* -->

 <!-- Declaration of HTML 5 -->
 <!DOCTYPE html>

 <!-- Start of html -->
 <html>

  <!-- Start of Body -->
  <body>
    <!-- Start of php language -->
    <?php
      // If statement to send out email once the submit button is pressed
      if( isset($_POST['CSubmit']))
      {
        $to = "michael.robinson@cs.fiu.edu";
        $subject = "Gomez Helen Diana";
        $CEmail = $_POST['CEmail'];
        $CLName = $_POST['CLName'];
        $CFName = $_POST['CFName'];
        $CCategory = $_POST['CCategory'];
        $CHours = $_POST['CHours'];
        $CPay = $_POST['CPay'];
        $COther = $_POST['COther'];
        $CPosition = $_POST['CPosition'];
        $CComments = $_POST['CComments'];

        $body = "Your Email:        $CEmail\nLast Name:        $CLName\nFirst Name:        $CFName\n\nCategory:           $CCategory\nTopic:          $CWeekends\nTopic:         $CWeekdays\nTopic:         $CVacation\n\nPosition:             $CPosition\n\nComments:        $CComments\n";

        //Send email
        mail($to, $subject, $body);

        //Calls the ContactMeSend.php page
        include('ContactMeSend.php');
      }
    ?> <!-- End of php language -->

  </body> <!-- End of body -->

</html> <!-- End of html -->
