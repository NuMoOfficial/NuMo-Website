<?php
require_once 'header.php';

if ($loggedin) {
    session_destroy();
    die("<p>You have succesfully been logged out</p>");
}

else{
    die("<p>Somewthing went wrong.</p>");
}
require_once 'footer.php';
?>
