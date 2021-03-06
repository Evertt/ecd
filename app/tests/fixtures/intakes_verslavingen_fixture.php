<?php

class IntakesVerslavingenFixture extends CakeTestFixture
{
    public $name = 'IntakesVerslaving';
    public $table = 'intakes_verslavingen';

    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'verslaving_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
    );

    public $records = array(
        array(
            'id' => 1,
            'intake_id' => 1,
            'verslaving_id' => 1,
            'created' => '2010-08-17 15:05:45',
            'modified' => '2010-08-17 15:35:45',
        ),
    );
}
