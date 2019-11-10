<?php

class Task {

    const USER_ROLE = [
        'customer'=>'customer',
        'executor'=>'executor'
    ];

    const TASK_STATUS = [
        'new'=>'new',
        'canceled'=>'canceled',
        'in work'=>'in work',
        'done'=>'done',
        'flunk'=>'flunk'

    ];

    const ACTION =[
        'cancel'=>'cancel',
        'respond'=>'respond',
        'done'=>'done',
        'refuse'=>'refuse'
    ];

    private $customer_id;
    private $executor_id;
    private $date_expire;
    private $active_status;
    private $user_role;


    public function __construct($customer_id, $executor_id, $date_expire, $active_status, $user_role) {
        $this->customer_id = $customer_id;
        $this->executor_id = $executor_id;
        $this->date_expire = $date_expire;
        $this->user_role = self::USER_ROLE[$user_role];
        $this->active_status = self::TASK_STATUS[$active_status];

    }



    public function getStatusList() {

        switch ($this -> active_status) {
            case self::TASK_STATUS['new'] :
                return [self::TASK_STATUS['canceled'], self::TASK_STATUS['in work'] ];
            case self::TASK_STATUS['in work'] :
                return [self::TASK_STATUS['done'], self::TASK_STATUS['flunk'] ];
            default :
                return [];
        }
    }

    public function getActionList() {
         if ($this -> active_status === self::TASK_STATUS['new']){
             switch ($this -> user_role) {
                 case self::USER_ROLE['customer'] :
                 return self::ACTION['cancel'];
                 case self::USER_ROLE['executor'] :
                 return self::ACTION['respond'];
                 default :
                 return;
             }

        }
         if ($this -> active_status === self::TASK_STATUS['in work']){
             switch ($this -> user_role) {
                 case self::USER_ROLE['customer'] :
                 return self::ACTION['done'];
                 case self::USER_ROLE['executor'] :
                 return self::ACTION['refuse'];
                 default :
                 return;
             }

        }



    }

}


?>