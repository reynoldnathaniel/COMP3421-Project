<?php
session_unset();
session_destroy();
echo "<script type='text/javascript'>window.location.replace(\"loginPage.html\");</script>";
?>
