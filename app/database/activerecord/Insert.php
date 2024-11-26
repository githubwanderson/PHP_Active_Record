<?php

namespace app\database\activerecord;

use app\database\interfaces\ActiveRecordInterface;
use app\database\interfaces\InsertInterface;

class Insert implements InsertInterface
{
    public function insert(ActiveRecordInterface $activeRecordInterface)
    {
        var_dump($activeRecordInterface->getAttributes());
        echo 'insert...';
    }
}