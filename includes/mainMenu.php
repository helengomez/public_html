<!-- ***********************************************************************************
  Page Name  : mainMenu.php
  Author     : Helen Gomez 
  Your URL   : ocelot.aul.fiu.edu/~hgome059
  Course     : CGS 4854 RVC 85157
  Program #  : Program 2
  Purpose    : This page creates the drop down menu that users can easuly use to select which page they would like to go to next.

  Due Date   : 02/15/2024

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Helen Gomez }..........
 ******************************************************************************* -->

<!DOCTYPE html>  <!-- Declaration of HTML 5 -->

<!-- Start of html -->
<html>

  <!-- Start of head -->
  <head>
    <title>DropDown in Program 2</title>

    <!-- Creates the dropdown style -->
    <style type="text/css">
      nav ul ul
      {
        display: none;
      }

      nav ul li:hover > ul
      {
        display: block;
      }

      nav ul 
      {
        background: lightslategray; 
        background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
        background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
        background: -webkit-linear-gradient(top, pink 0%, white 100%); 
        box-shadow: 0px 0px 9px rgba(0,0,0,0.5);
        padding: 0 10px;
        border-radius: 10px; 
        list-style: none;
        position: relative;
        display: inline-table; 
      }

      nav ul:after
      {
        content: ""; clear: both; display: block;
      }

      nav ul li 
      {
        float: left;
      }

      nav ul li:hover 
      {
        background: darksalmon; 
      }

      nav ul li:hover a 
      {
        color: white; 
      }

      nav ul li a 
      {
        display: block; padding: 25px 20px;
        color: black; text-decoration: none;
      }

      nav ul ul 
      {
        background: indianred; border-radius: 5px; padding: 0;
        position: absolute; top: 100%;
      }

      nav ul ul li 
      {
        float: none; 
        border-top: 1px solid white;
        border-bottom: 1px solid #575f6a;
        position: relative;
        z-index: 99;
      }

      nav ul ul li a 
      {
        padding: 10px 26px;
        color: #fff;
      } 

      nav ul ul li a:hover 
      {
        background: tomato;
      }

      nav ul ul ul 
      {
        position: absolute; left: 100%; top:0;
      }
    </style> <!-- End of style -->
  </head> <!-- End of head -->

  <!-- Start of body -->
  <body>
    <!-- Creates the functionality of the dropdown -->
    <nav align="center">
      <ul>
        <li><a href="../index.html">Home &nbsp;&nbsp;</a></li>
        <li><a href="#">Program 1 &nbsp;&nbsp;</a>
          <ul>
            <li>
              <a href="pgm1.html">Program 1</a>
            </li>
            <li>
              <a href="page1.html">Page 1</a>
            </li>
            <li>
              <a href="page2.html">Page 2</a>
            </li> 
            <li>
              <a href="page3.html">Page 3</a>
            </li> 
            <li>
              <a href="page4.html">Page 4</a>
            </li>
            <li>
              <a href="../index.html">Home</a>
            </li>
          </ul>
        <li><a href="program2.php">Program 2 &nbsp;&nbsp;</a></li>
        <li><a href="program3.php">Program 3 &nbsp;&nbsp;</a></li>
        <li><a href="program4.php">Program 4 &nbsp;&nbsp;</a></li>
      </ul>
    </nav>
  </body> <!-- End of body -->

</html> <!-- End of html -->