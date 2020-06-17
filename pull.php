<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

shell_exec('cd /home/sragenfl/public_html/ && git reset –hard HEAD && git pull');

echo 'ddd';
?>