<?php

require_once ("src\Task.php");

$a=new Task(1,1,1,'in work','customer');

echo($a->getActionList());

?>