<?php
session_start();
if (isset($_SESSION['emailaddress']))
{
unset($_SESSION['emailaddress']);
session_destroy();
}
header("Location:index.php");
?>