<?php
session_start();
session_unset($_SESSION["username"]);

header('Location: home1.html');
?>