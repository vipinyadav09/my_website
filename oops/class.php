<?php
   class Books {
        var $price;
      function setPrice($par){
         $this->price = $par;
      }
      function getPrice(){
         echo $this->price ."<br/>";
      }
   }
?>
<?php
$maths = new Books;
$maths->setPrice( 7 );
$maths->getPrice();
?>
