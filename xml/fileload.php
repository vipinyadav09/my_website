<?php
   $xml = simplexml_load_file('data.html') or die("Error: Cannot create object");
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
