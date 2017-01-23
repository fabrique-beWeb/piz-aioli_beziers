<?php

namespace Pizza\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class FormAddPizza extends Form {

    public function __construct($objectManager) {

        parent::__construct("FormAddPizza");

        $this->add(array(
            'name' => 'nom',
            'attributes' => array(
                'id' => 'nom'
            ),
            'options' => array(
                'label' => 'nom'
            ),
        ));

        $this->add(array(
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'name' => 'base',
            'options' => array(
                'label' => 'base',
                'object_manager' => $objectManager,
                'target_class' => 'Pizza\Entity\TbBases',
                'property' => 'nom'
            )
        ));

        $this->add(array(
            'type' => 'DoctrineModule\Form\Element\ObjectMultiCheckbox',
            'name' => 'ingredients',
            'options' => array(
                'label' => 'Please Select Your Availablity',
                'object_manager' => $objectManager,
                'target_class' => 'Pizza\Entity\TbIngredients',
                'property' => 'nom',
                'empty_option' => '--- please choose ---'
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Create'
            )
        ));
    }

}
