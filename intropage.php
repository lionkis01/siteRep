<?php
session_start();
if(!isset($_SESSION["session_username"])):
header("Location: login.php");

else:
?>
<?php
include("includes/header.php"); 
?>
<div id="welcome">
    <h2>Welcome, <span> USER!</span></h2>
    <p><a href="logout.php">Logout</a>  here</p>
</div>
<?php include("includes/connection.php");  ?>
<?php endif; ?>
