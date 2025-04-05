<!-- ***********************************************************************************
  Page Name  : Help.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 RVC 85157
  Program #  : Program 4
  Purpose    : This page brings the user to the HELP page where each button's purpose is described.

  Due Date   : 04/02/2024

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Helen Gomez }..........
******************************************************************************* -->

<!DOCTYPE html>  <!-- Declaration of HTML 5 -->

<!-- Start of html -->
<html>

  <body> <!-- Start of body -->
  
  <script> //Start of Javascript

    //Calls the help function
    help();

    //Creates the help function
    function help()
      {
        // Open the new window for the HELP page
        var myWindow = window.open("", "Help","width=500, height=500, scrollbars=yes,resizable=yes, left=100, top=100");    	
        
        //Displays the header of the HELP page
        myWindow.document.write("<head>");
        myWindow.document.write("<title>Help Page</title>");
        myWindow.document.write("</head>");
        myWindow.document.write("<div>");
        myWindow.document.write("<div><h1 style='color:indigo'><center>HELP</center></h1></div>");
        myWindow.document.write("<div><h3 style='color:indigo'><center>Find the purposes and mini descriptions of the buttons below</center></h3></div>");
        myWindow.document.write("<hr color='palevioletred'>");

        //Displays the information about the SAVE button in the help page
        myWindow.document.write("<div>");
        myWindow.document.write("<ul style='list-style-type:disc'>");
        myWindow.document.write("<li><h3 style='color:mediumvioletred'>SAVE:</h3>");
        myWindow.document.write("<div>When the SAVE button is pressed, the information that is currently in the fields will be saved and correspond to the Employee ID field.</div><br></li>");
        myWindow.document.write("<div>Once the information is saved, the message <span style='color:blue'>RECORD Employee ID ADDED</span> will appear.<br><br>If there is an error, a message will appear stating <span style='color:red'>RECORD Employee ID ALREADY EXISTS</span> or <span style='color:red'> RECORD NOT ADDED EmployeeID CAN NOT BE EMPTY.</span><br><br></div>");
        
        //Displays the information about the FIND button in the help page
        myWindow.document.write("<li><h3 style='color:mediumvioletred'>FIND.</h3>");
        myWindow.document.write("<div>When the FIND button is pressed, the information that corresponds to the information in the Employee ID field will apear in their corresponding fields.</div><br></li>");
        myWindow.document.write("<div>The message <span style='color:blue'>RECORD Employee ID FOUND</span> will appear once the information is found and displayed.<br><br>If there is an error, a message will appear stating <span style='color:red'>EmployeeID CAN NOT BE EMPTY</span> or <span style='color:red'>RECORD EmployeeID NOT FOUND</span>.</div><br></li>");

        //Displays the information about the MODIFY button in the help page
        myWindow.document.write("<li><h3 style='color:mediumvioletred'>MODIFY</h3>");
        myWindow.document.write("<div><strong>You must FIND a record first before using the MODIFY button.</strong></div><br>");
        myWindow.document.write("<div>When the MODIFY button is pressed, the information corresponding to the Employee ID field will update to the information in the fields at that time.</div><br></li>");
        myWindow.document.write("<div>The message <span style='color:blue'>RECORD Employee ID Modified</span> will appear once the information is updated.</div><br></li>");
        myWindow.document.write("<div>If there is an error, a message will appear stating <span style='color:red'>RECORD CAN NOT BE MODIFIED, FIND IT FIRST</span>.</div><br></li>");


        //Displays the information about the DELETE button in the help page
        myWindow.document.write("<li><h3 style='color:mediumvioletred'>DELETE.</h3>");
        myWindow.document.write("<div><strong>You must FIND a record first before using the DELETE button.</strong></div><br>");
        myWindow.document.write("<div>When the DELETE button is pressed, the information corresponding to the Employee ID will be deleted and removed from the database.</div><br></li>");
        myWindow.document.write("<div>The message <span style='color:red'>RECORD Employee ID DELETED</span> will appear once the information is deleted.</div><br></li>");
        myWindow.document.write("<div>If there is an error, a message will appear stating <span style='color:red'>RECORD Employee ID CAN NOT BE DELETED, IT DOES NOT EXISTS</span>.</div><br></li>");
        
        //Displays the information about the CLEAR button in the help page
        myWindow.document.write("<li><h3 style='color:mediumvioletred'>CLEAR.</h3>");
        myWindow.document.write("<div>When the CLEAR button is pressed, any information that is currrently in the fields will be erased. The information that is already in the database will remain in the datebase.</div><br></li>");
        myWindow.document.write("<div>Any message that is currently on screen will be removed.</div><br></li>");

        //Displays the information about the CONTACTME button in the help page
        myWindow.document.write("<li><h3 style='color:mediumvioletred'>CONTACTME</h3>");
        myWindow.document.write("<div>When the CONTACTME button is pressed, the user will be brought to the CONTACTME page where the user can send a message to the website owner.</div><br></li>");
        myWindow.document.write("<div>On the CONTACTME page, the user will be able to input their information. <br><br>Once the user sends their email, the message <span style='color:midnightblue'><strong>Your message has been submitted to [email]!</strong></span> will appear.</div><br></li>");

        //Displays the information about the HELP button in the help page
        myWindow.document.write("<li><h3 style='color:mediumvioletred'>HELP</h3>");
        myWindow.document.write("<div>When the HELP button is pressed, a new window will appear, bringing the user to a page that lists all the buttons on the main page and the purposes of those buttons.</div><br></li>");
        myWindow.document.write("<div>To return to the main page, the user can exit out of the HELP page and click 'previous page' button on the top left.</div><br></li>");

        //Displays the information about the ABOUT button in the help page
        myWindow.document.write("<li><h3 style='color:mediumvioletred'>ABOUT.</h3>");
        myWindow.document.write("<div> When the ABOUT button is pressed, the user will be brought to a new page, where there is a description of what the website is for.</div><br></li>");
        myWindow.document.write("<div>To return to the main page, the user can click 'previous page' button on the top left.</div><br></li>");
        myWindow.document.write("</ul>");

        myWindow.document.write("</div>");
      
      } //End of creating the help function

    </script> <!-- End of Javascript -->

  </body> <!-- End of body -->

</html> <!-- End of HTML -->