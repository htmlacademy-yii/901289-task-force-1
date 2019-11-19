<?php
require_once "vendor/autoload.php";   
use src\Task;

$test=new Task;
assert($test->get_next_status(Task::ACTION_CANCEL)==Task::STATUS_CANCELED);
assert($test->get_next_status(Task::ACTION_REFUSE)==Task::STATUS_FLUNK);
assert($test->get_next_status(Task::ACTION_RESPOND)==Task::STATUS_DURING);
assert($test->get_next_status(Task::ACTION_DONE)==Task::STATUS_DONE);

