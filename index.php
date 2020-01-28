<?php
session_start();
require_once 'header.php';

if ($loggedin) 
    echo "Logged in as: $user";
else
    echo "Not logged in, please click <a href='login.php?view=$user'>here</a> to Log in.";

echo <<<_END
<h1> This is NuMo</h1>
_END;

require_once 'footer.php';
?>