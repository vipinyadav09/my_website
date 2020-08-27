<?php
   $xml = simplexml_load_file("data.xml") or die("Error: Object Creation failure");
   echo '<pre>';
   print_r($xml);
  exit();
?>
<html>
   <head>
      <body>
       <?php
            echo $xml->COURSE . "<br>";
            echo $xml->COUNTRY . "<br>";
            echo $xml->COMPANY . "<br>";
            echo $xml->PRICE."<br>";
            echo $xml->ADDRESH;
         ?>
    </body>
   </head>
</html>
