<?php

class Task {

    //roles constatns
    const USER_ROLE_CUSTOMER = "role_customer";
    const USER_ROLE_EXECUTOR = "role_executor";

    //statuses constatns
    const TASK_STATUS_NEW = "status_new";
    const TASK_STATUS_CANCELED = "status_canceled";
    const TASK_STATUS_DURING = "status_during";
    const TASK_STATUS_DONE = "status_done";
    const TASK_STATUS_FLUNK = "status_flunk";

    //actions constants
    const ACTION_CANCEL = "action_cancel";
    const ACTION_RESPOND = "action_respond";
    const ACTION_DONE = "action_done";
    const ACTION_REFUSE = "action_refuse";

    const USER_ROLES = [self::USER_ROLE_CUSTOMER, self::USER_ROLE_EXECUTOR];
    const TASK_STATUSES = [
        self::TASK_STATUS_NEW,
        self::TASK_STATUS_CANCELED,
        self::TASK_STATUS_DURING,
        self::TASK_STATUS_DONE,
        self::TASK_STATUS_FLUNK
    ];
    const ACTIONS = [
        self::ACTION_CANCEL,
        self::ACTION_RESPOND,
        self::ACTION_DONE,
        self::ACTION_REFUSE
    ];

/*    const NEXT_POSSIBLE_ACTION = [
        self::TASK_STATUS_NEW => [
            self::USER_ROLE_CUSTOMER => self::ACTION_CANCEL,
            self::USER_ROLE_EXECUTOR => self::ACTION_RESPOND
        ],
        self::TASK_STATUS_CANCELED => [
        ],
        self::TASK_STATUS_DURING => [
            self::USER_ROLE_CUSTOMER => self::ACTION_DONE,
            self::USER_ROLE_EXECUTOR => self::ACTION_REFUSE,

        ],
        self::TASK_STATUS_DONE => [

        ],
        self::TASK_STATUS_FLUNK => [
        ]
    ];*/
    const STATUS_AFTER_ACTION = [
        self::ACTION_CANCEL => self::TASK_STATUS_CANCELED,
        self::ACTION_DONE => self::TASK_STATUS_DONE,
        self::ACTION_REFUSE => self::TASK_STATUS_FLUNK,
        self::ACTION_RESPOND => self::TASK_STATUS_DURING
    ];

    public function get_next_status ($action=self::ACTION_CANCEL)
    {
         return self::STATUS_AFTER_ACTION[$action];
    }

    private $customer_id;
    private $executor_id;
    private $date_expire;
    private $active_status;
    private $user_role;



}


?>