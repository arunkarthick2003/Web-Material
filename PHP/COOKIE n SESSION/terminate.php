<?php
session_start();
session_unset();
session_destroy();
echo "<br> You session has been terminated";
?>
