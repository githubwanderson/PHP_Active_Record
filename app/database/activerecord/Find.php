<?php

namespace app\database\activerecord;

use app\database\interfaces\ActiveRecordInterface;
use app\database\interfaces\ActiveRecordExecuteInterface;

class Find implements ActiveRecordExecuteInterface
{
    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        var_dump($activeRecordInterface->getAttributes());
        echo 'find...';
    }
}