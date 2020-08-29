<?php
class student
{
/*  var $name;
function __construct($name) {
   $this->name = $name;

 }*/
	function show()
	{
    echo "Am I a student"."<br>";
		//echo $this->name."<br>";
	}
}
class teacher extends student
{
  function message()
  {
     echo "Am I a teaher ";
   }
}
$teacher= new teacher("vipin");
$teacher->show();
$teacher->message();
?>
