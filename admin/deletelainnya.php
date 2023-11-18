<?php
 
// Built-in PHP function to delete file
unlink($_GET["name"]);
 
// Redirecting back
header("Location: datalainnya.php ");