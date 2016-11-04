<?php

/* Verslag Fixture generated on: 2011-04-22 14:04:13 : 1303474813 */
class AwbzReportVerslagFixture extends CakeTestFixture
{
    public $name = 'Verslag';

    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'medewerker_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'medewerker' => array('type' => 'string', 'null' => true, 'default' => null),
        'advocaat' => array('type' => 'string', 'null' => true, 'default' => null),
        'contact' => array('type' => 'string', 'null' => true, 'default' => null),
        'opmerking' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1023),
        'datum' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'aanpassing_verslag' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
        'locatie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
    );

    public $records = array(
        array(
            'id' => 7,
            'klant_id' => 1,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-01-01',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 20,
            'locatie_id' => 0,
        ),
        array(
            'id' => 8,
            'klant_id' => 1,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-01-01',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 20,
            'locatie_id' => 1,
        ),
        array(
            'id' => 9,
            'klant_id' => 1,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-03-31',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 180,
            'locatie_id' => 1,
        ),
        array(
            'id' => 10,
            'klant_id' => 1,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-04-01',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 180,
            'locatie_id' => 1,
        ),
        array(
            'id' => 11,
            'klant_id' => 1,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-04-02',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 120,
            'locatie_id' => 1,
        ),
        array(
            'id' => 12,
            'klant_id' => 1,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-04-05',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 60,
            'locatie_id' => 1,
        ),
        array(
            'id' => 13,
            'klant_id' => 1,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-04-06',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 300,
            'locatie_id' => 1,
        ),
        array(
            'id' => 14,
            'klant_id' => 2,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-04-01',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 120,
            'locatie_id' => 1,
        ),
        array(
            'id' => 15,
            'klant_id' => 2,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-04-03',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 120,
            'locatie_id' => 1,
        ),
        array(
            'id' => 16,
            'klant_id' => 2,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-04-06',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 120,
            'locatie_id' => 1,
        ),
        array(
            'id' => 17,
            'klant_id' => 2,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-03-29',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 120,
            'locatie_id' => 1,
        ),
        array(
            'id' => 18,
            'klant_id' => 2,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-03-30',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 120,
            'locatie_id' => 1,
        ),
        array(
            'id' => 19,
            'klant_id' => 2,
            'medewerker_id' => 1016,
            'medewerker' => null,
            'advocaat' => null,
            'contact' => null,
            'opmerking' => null,
            'datum' => '2011-03-31',
            'created' => null,
            'modified' => null,
            'aanpassing_verslag' => 120,
            'locatie_id' => 1,
        ),
    );
}
