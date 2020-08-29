<?php
   $xml = '
   <?xml version = "1.0" encoding = "utf-8"?>
   <tutors>
      <course>
         <name>Android</name>
         <country>India</country>
         <email>vipin@gmail.com</email>
         <phone>123456789</phone>
      </course>
      <course>
         <name>Java</name>
         <country>India</country>
         <email>ram@gmail.com</email>
         <phone>123456789</phone>
      </course>
      <course>
         <name>HTML</name>
         <country>India</country>
         <email>karan@gmail.com</email>
         <phone>123456789</phone>
      </course>
   </tutors>

   ';
   /*** a new dom object ***/
   $dom = new domDocument;
 /*** load the html into the object ***/
   $dom->loadXML($xml);
   /*** discard white space ***/
   $dom->preserveWhiteSpace = false;
   /*** the table by its tag name ***/
   $tables = $dom->getElementsByTagName('course');
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
