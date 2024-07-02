<?php
$rs = shell_exec("git pull 2>&1");
$log = shell_exec("git log -1 --oneline --format=%s | sed 's/^.*: //'");
echo $log;
