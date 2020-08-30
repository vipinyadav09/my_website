<?php
  $xml= new DOMDocument();
  $xml->load("books.xml");
  $i = $xml->documentElement;
  foreach ($i->childNodes AS $item)
  {
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
  }
?>
