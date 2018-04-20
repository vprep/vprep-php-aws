<?php
$command = "grep -rnw 'Lorem Ipsum is simply' .";
$output = shell_exec($command);
echo "$output";
echo "Grep job over.";
?>