<?php

require_once ("src\Task.php");

$a=new Task();

echo ($a->get_next_status($a::ACTION_REFUSE));



?>