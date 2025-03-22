<?php
//connection for crud
$con=new mysqli('localhost','root','','user');
if(!$con)
{
    die(mysqli_error($con));
}

?>