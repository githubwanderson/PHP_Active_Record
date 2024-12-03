<?php

namespace app\database\activerecord;

use app\database\interfaces\ActiveRecordInterface;
use app\database\interfaces\ActiveRecordExecuteInterface;
use app\database\connection\Connection;
use Throwable;

class Delete implements ActiveRecordExecuteInterface
{
    private $field;
    private $value;

    public function __construct($field, $value) {
        $this->field = $field;
        $this->value = $value;
    }

    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        try {
            $query = $this->createQuery($activeRecordInterface);
            $connection = Connection::connect();
            $prepare = $connection->prepare($query);
            $prepare->execute([
                $this->field => $this->value
            ]);
            return $prepare->rowCount();          
        } catch (Throwable $th) {
            formatException($th);
        }
    }

    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {
        $sql = "DELETE FROM {$activeRecordInterface->getTable()}";
        $sql .= " WHERE {$this->field} = :{$this->field}";
        return $sql;     
    }
}