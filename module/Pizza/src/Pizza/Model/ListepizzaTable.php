<?php

namespace Pizza\Model;

use Zend\Db\TableGateway\TableGateway;

class ListepizzaTable {

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll() {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function pizofday() {
        $resultSet = $this->tableGateway->select(
                array(
                    'pizofday = ?' => 1
                )
        );
        return $resultSet;
    }

}
