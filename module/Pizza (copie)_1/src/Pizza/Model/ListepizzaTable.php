<?php

namespace Pizza\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

class ListepizzaTable {

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll() {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function listepizza_page() {
        
        $resultSet = $this->tableGateway->select(function (Select $select) {
        $select->where->like('pizza_au_menu', '1');
        $select->order('base ASC');
        });
        
        return $resultSet;
    }
    
    public function base() {
                
        $base1 = $this->tableGateway->select(function (Select $select) {
        $select->from(array('p' => 'tb_pizza_patron'), array('id', 'nom'))
               ->join(array('b' => 'tb_base'), 'b.id = p.id', array());
        });
        
        return $base1;
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