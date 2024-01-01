<?php
//logout de usuario através do session destroy
session_start();

session_destroy();

header(
    "location: index.php"
);
?>