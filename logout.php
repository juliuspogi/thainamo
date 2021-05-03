<?php
session_start();

session_unset();
session_destroy();

header("Location: index.php?error= Authentication code required 5 minutes");

?> 	