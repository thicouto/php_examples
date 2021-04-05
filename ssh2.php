<?php
$string_stream = "/usr/bin/python/find_tag.py"; // Command to be executed.
$connection = ssh2_connect("localhost", "22");
ssh2_auth_password($connection, "pi", "_Prod_654_123");
$stream = ssh2_exec($connection, $string_stream);
stream_get_contents($stream); // Wait for command to finish.
fclose($stream);
?>
