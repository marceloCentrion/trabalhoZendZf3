<?php

namespace Application\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class Login extends Form
{
    public function __construct()
    {
        parent::__construct();

        $this->add([
            'name' => 'name',
            'options' => [
                'label' => 'Login name',
            ],
            // 'attributes' => [
            //     'class' => 'form-control'
            // ],
            'type'  => 'Text',
        ]);

        $this->add([
            'name' => 'password',
            'options' => [
                'label' => 'Login password',
            ],
            'type'  => 'Text',
        ]);

        $this->add([
            'name' => 'send',
            'type'  => 'Submit',
            'attributes' => [
                'value' => 'Create',
            ],
        ]);

        $this->setAttribute('action', '/login/');
        $this->setAttribute('method', 'post');
    }
}
