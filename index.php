<?php

require_once "vendor/autoload.php";
use src\Task;

$a=new Task();
echo ($a->get_next_status(Task::ACTION_REFUSE));



