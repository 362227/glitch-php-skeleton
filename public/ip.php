<?php

    $res = shell_exec("curl ifconfig.me ");

    echo $res;
    exit;

