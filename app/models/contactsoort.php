<?php

class contactsoort extends AppModel
{
    public $name = 'Contactsoort';

    public $displayField = 'text';

    public $validate = array(
        'text' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            ),
        ),
    );
}
