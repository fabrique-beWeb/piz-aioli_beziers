<?php

namespace Pizza\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class FormAddPizza extends Form {

    public function __construct($objectManager) {

        parent::__construct("FormAddPizza");
<<<<<<< HEAD
<<<<<<< HEAD
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype','multipart/form-data');
=======
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype','multipart/form-data');
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df
                'property' => 'nom'
            ),
        ));

         $this->add(array(
            'type' => 'Zend\Form\Element\Checkbox',
            'name' => 'pizofday',
            'options' => array(
                'label' => 'Pizza du jour',
                'checked_value' => 1,
                'unchecked_value' => '0'
            ),
        ));
         
         $this->add(array(
            'type' => 'Zend\Form\Element\Checkbox',
            'name' => 'pizza_au_menu',
            'options' => array(
                'label' => 'Pizza à la carte',
                'checked_value' => 1,
                'unchecked_value' => '0'
<<<<<<< HEAD
            ),
        ));
         
         $this->add(array(
            'name' => 'prix',
            'attributes' => array(
                'id' => 'prix'
            ),
            'options' => array(
                'label' => 'prix'
            ),
        ));


        $this->add(array(
            'name' => 'fileupload',
            'attributes' => array(
                'type'  => 'file',
            ),
            'options' => array(
                'label' => 'Photo d\'illustration',
            ),
        )); 



=======
                'property' => 'nom',
                'empty_option' => '--- please choose ---'
            ),
        ));
>>>>>>> 7118e2805159361516865ab3c0543bbb283daa5b
=======
            ),
        ));
         
         $this->add(array(
            'name' => 'prix',
            'attributes' => array(
                'id' => 'prix'
            ),
            'options' => array(
                'label' => 'prix'
            ),
        ));


        $this->add(array(
            'name' => 'fileupload',
            'attributes' => array(
                'type'  => 'file',
            ),
            'options' => array(
                'label' => 'Photo d\'illustration',
            ),
        )); 



>>>>>>> dec132ddab9c241c7a4cf0bab8a09f478f4ed0df

        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Create'
            )
        ));
    }

}
