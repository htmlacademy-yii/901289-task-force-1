<?php

require_once ("src\Task.php");

$a=new Task();
echo ($a->get_next_status(Task::ACTION_REFUSE));



