<?php
class student
{
  var $name;
	function __construct($name)
	{
		$this->name=$name;
	}
  function __destruct($name)
  {
	$this->name=$name;
  }
	function show()
	{
		echo $this->name;
	}

}
$student= new student("vipin");
$student->show();
?>
