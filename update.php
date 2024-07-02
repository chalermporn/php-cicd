<?php
$rs = shell_exec("cd /srv  && git pull 2>&1");
$log = shell_exec("cd /srv &&  git log -1 --oneline --format=%s | sed 's/^.*: //'");
echo $log;
