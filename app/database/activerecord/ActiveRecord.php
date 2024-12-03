<?php

namespace app\database\activerecord;

use app\database\interfaces\ActiveRecordInterface;
use app\database\interfaces\ActiveRecordExecuteInterface;
use ReflectionClass;

abstract class ActiveRecord implements ActiveRecordInterface
{
    protected $table = null;
    protected $attributes = [];

    public function __construct()
    {
        if(!$this->table){
            $this->table = strtolower((new ReflectionClass($this))->getShortName());
        }
    }

    public function getTable()
    {
        return $this->table;    
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function __set($attribute,$value)
    {        
        $this->attributes[$attribute] = $value;
    }

    public function __get($attribute)
    {
        return $this->attributes[$attribute];
    }

    public function execute(ActiveRecordExecuteInterface $activeRecordExecuteInterface)
    {
        return $activeRecordExecuteInterface->execute($this);
    }

    public function insert()
    {
        return $this->execute(new Insert());
    }

    public function update($field,$value)
    {
        return $this->execute(new Update($field,$value));
    }

    public function delete($field,$value)
    {
        return $this->execute(new Delete($field,$value));
    }

    public function find()
    {
        return $this->execute(new Find);
    }
}