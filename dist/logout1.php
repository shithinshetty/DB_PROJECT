<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /DBMS/DB_project/index.php"); // Redirecting To Home Page
}
?>


