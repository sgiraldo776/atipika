<?php

session_start();

session_destroy();

echo "<script> 	location.href='login.php?msg=1'; </script>";

?>