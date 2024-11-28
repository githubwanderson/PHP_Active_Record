<?php

namespace app\database\interfaces;

interface InsertInterface
{
    public function insert(ActiveRecordExecuteInterface $activeRecordExecuteInterface);
}