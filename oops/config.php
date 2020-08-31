<?php
class connect
{
    public function __construct($host, $user, $pass, $db)
    {
        if (mysqli_connect_error())
        {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
}
$db = new connect('localhost', 'root', '', 'demo');
echo 'database connected Succesfully';
?>
