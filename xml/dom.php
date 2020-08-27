<?php
   $html = '
      <head>
         <title>Tutorial</title>
      </head>
      <body>
         <h2>Course details</h2>
         <table border = "0">
            <tbody>
               <tr>
                  <td>Android</td>
                  <td>Ram</td>
                  <td>Sachin</td>
               </tr>
               <tr>
                  <td>Hadoop</td>
                  <td>Ram</td>
                  <td>Vipin</td>
               </tr>
               <tr>
                  <td>HTML</td>
                  <td>Ram</td>
                  <td>Karan</td>
               </tr>
               <tr>
                  <td>Web technologies</td>
                  <td>Ram</td>
                  <td>Yogesh</td>
               </tr>
               <tr>
                  <td>Graphic</td>
                  <td>Ram</td>
                  <td>Arvind</td>
               </tr>
               <tr>
                  <td>Writer</td>
                  <td>Sanjeev</td>
                  <td>Amit</td>
               </tr>
               <tr>
                  <td>HR</td>
                  <td>Sanjeev</td>
                  <td>Shivani</td>
               </tr>
            </tbody>
         </table>
      </body>
   </html>
   ';
   /*** a new dom object ***/
   $dom = new domDocument;
 /*** load the html into the object ***/
   $dom->loadHTML($html);
   /*** discard white space ***/
   $dom->preserveWhiteSpace = false;
   /*** the table by its tag name ***/
   $tables = $dom->getElementsByTagName('table');
   /*** get all rows from the table ***/
   $rows = $tables->item(0)->getElementsByTagName('tr');
   /*** loop over the table rows ***/
   foreach ($rows as $row)
    {
      /*** get each column by tag name ***/
      $cols = $row->getElementsByTagName('td');
      /*** echo the values ***/
      echo 'Designation: '.$cols->item(0)->nodeValue.'<br />';
      echo 'Manager: '.$cols->item(1)->nodeValue.'<br />';
      echo 'Team: '.$cols->item(2)->nodeValue;
      echo '<hr />';
   }
?>
