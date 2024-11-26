<?php

namespace app\database\interfaces;

interface ActiveRecordInterface 
{  
    public function update(UpdateInterface $updateInterface);
    public function insert(InsertInterface $insertInterface);
    // public function delete();
    // public function findAll();
    // public function findById();
    public function getTable();
    public function getAttributes();
}