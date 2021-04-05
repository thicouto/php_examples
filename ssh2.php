<?php
$string_stream = "/usr/bin/python ".{rs[0][3]}."/03_find_tag.py -c ".[usr_client]." -p ".[plant]." -s ".[sector]." -t ".[obj]."";
$connection = ssh2_connect("localhost", "22");
ssh2_auth_password($connection, "pi", "_Prod_654_123");
$stream = ssh2_exec($connection, $string_stream);
stream_get_contents($stream); // Wait for command to finish
fclose($stream);
?>