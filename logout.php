<?php

session_start();
session_destroy();

$time = time() - 86400;
setcookie('name', 'bye', $time);
setcookie('type', 'bye', $time);

header("Location: index.php");

?>
