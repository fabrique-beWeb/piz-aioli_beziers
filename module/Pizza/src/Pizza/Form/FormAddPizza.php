<?php
namespace Pizza\Form;

use Zend\Form\Form;

class FormAddPizza extends Form  {
    
    public function __construct($listeBase) {
         
        parent::__construct("FormAddPizza");
        
        $this->setAttribute("method", "post");
        $this->add(array(
            'name' => 'nom',
            'attributes' => array(
                'id' => 'nom'
            ),
            'options' => array(
                'label' => 'nom'
            ),
        ));
        
       
        foreach($listeBase as $base):
            
         $tab_base[] = $base->getNom();
        
        endforeach;
        
        $this->add(array(
            'name' => 'base',
            'type' => 'Zend\Form\Element\Select',
            'options' => [
                'label' => 'base',
                'empty_option' => 'Base',
                'value_options' => $tab_base,
            ],
        ));
        $this->add(array(
            'name'=>'submit',
            'type'=>'Zend\Form\Element\Submit',
            'attributes'=> array(
                'value' => 'Create'
            )
        ));
        
    }
}