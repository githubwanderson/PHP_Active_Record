<?php

namespace app\database\interfaces;

interface ActiveRecordInterface 
{
    public function getTable();
    public function getAttributes();
    public function update(UpdateInterface $updateInterface);
    // public function insert();
    // public function delete();
    // public function findAll();
    // public function findById();


}