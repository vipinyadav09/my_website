<?php
   $data = "<?xml version = '1.0' encoding = 'UTF-8'?>
    <note>
      <Course>PHP</Course>
      <Subject>PHP XML XML</Subject>
      <Company>Omnie Solutions</Company>
      <Price>$10</Price>
   </note>";
     echo '<pre>';
     print_r($data);
    // exit();
   $xml = simplexml_load_string($data) or die("Error: Cannot create object");
   echo '<pre>';
     print_r($xml);
    // exit();
?>
<html>
   <head>
      <body>
<?php
            echo '<pre>';
            print_r($xml);
  ?>
      </body>
   </head>
</html>
