<!-- ***********************************************************************************
  Page Name  : About.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 RVC 85157
  Program #  : Program 4
  Purpose    : This page creates the about page that gives the users a description of the overall website.

  Due Date   : 04/02/2024

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Helen Gomez }..........
******************************************************************************* -->

<!DOCTYPE html>  <!-- Declaration of HTML 5 -->

<!-- Start of html -->
</html> 

  <!-- Start of head -->
  <head>
    <title>About</title>
    
    <!-- Start of CSS style -->
    <style type="text/css">
       
      /* Creates aboutHeading function */
      .aboutHeading
      { 
        font-family:Garamond; 
        font-size:16pt;
        color: green;
      }

      /* Creates aboutHeading2 function */
      .aboutHeading2
      { 
        font-family:Georgia; 
        font-size:20pt;
        color: darksalmon;
      }
        
      /* Creates mainAboutHeading function */
      .mainAboutHeading
      { 
        font-family:georgia; 
        font-size:25pt;
        color:darksalmon;
      }
        
    </style> <!--End of style-->
      
  </head> <!--End of head-->
   
   
  <!--Start of body-->
  <body>

    <!--Calls Gomez_header.php-->
    <?php include('Gomez_header.php'); ?>
    <!--Calls mainMenu.php-->
    <?php include('mainMenu.php'); ?>

    <!--Creates the main body of the About page where the information is located-->
    <div align="center">
      <h2 class="mainAboutHeading">ABOUT</h2>
      <h3 class="aboutHeading2">Helen Gomez's Website</h3>
      <table>
        <tr> 
          <td>  
            <table>
              <td width="50%" style="border:darkgreen solid 5px">                     
                <ul style="list-style-type:none">
                <!--Creates Program 1 description-->
                <li><a class="aboutHeading">Program 1<br></a>
                  <br>Program 1 has four seperate pages to describe each member of One Direction.<p> 
                      Each page describes the member's history with photos of them.<br>   
                </ul>
              </td>
              <td width="50%" style="border:darkgreen solid 5px">                     
                <ul style="list-style-type:none">
                <!--Creates Program 2 description-->
                <li> <a class="aboutHeading">Program 2<br></a>
                  <br>Program 2 creates a basic site where a companies employees can input their information, including position, working days, department, etc. <p>
                      This information is inputted into a database that is accessible by the website owner. <br>   
                </ul>
              </td>
            </table>  
            <table>
              <td width="50%" style="border:darkgreen solid 5px">                     
                <ul style="list-style-type:none">
                <!--Creates Program 3 description-->
                <li> <a class="aboutHeading">Program 3<br></a>
                  <br>Program 3 adds onto the Prorgam 2 page where the buttons on the bottom of the page helps edit the information in the database. <p>
                      Each button adds a message to the page while also editing data information depending on button pressed.<p>
                      Additionally, there is a method to contact the website owner through the CONTACTME button and page.<br>   
                </ul>
              </td>
              <td width="50%" style="border:darkgreen solid 5px">                     
                <ul style="list-style-type:none">
                <!--Creates Program 4 description-->
                <li> <a class="aboutHeading">Program 4<br></a>
                  <br>Program 4 addtionally adds onto the Program 3 page, adding more details and two more buttons.<p>
                      The main page has helpful tips when the user hovers over the name, a time clock at the top of the page, and placehodlers within the text field.<p>
                      Additionally, the user has access to HELP, where they can get a description of what to do on the main page.<p>
                </ul>
              </td>
            </table>
            <center> 
              <br>Each of these additions are to make the users experience more friendly and inviting.
            </center>               
          </td>
        </tr>
      </table> 
    
    </div> <!--End of main body of the About page-->

  </body> <!--End of Body-->
            
</html> <!--End of HTML-->
