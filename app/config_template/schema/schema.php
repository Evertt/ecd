<?php 
/* SVN FILE: $Id$ */
/* App schema generated on: 2016-04-02 00:04:39 : 1459549899*/
class AppSchema extends CakeSchema
{
    public $name = 'App';

    public function before($event = array())
    {
        return true;
    }

    public function after($event = array())
    {
    }

    public $attachments = array(
        'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary'),
        'model' => array('type' => 'string', 'null' => false, 'default' => null),
        'foreign_key' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36),
        'dirname' => array('type' => 'string', 'null' => true, 'default' => null),
        'basename' => array('type' => 'string', 'null' => false, 'default' => null),
        'checksum' => array('type' => 'string', 'null' => false, 'default' => null),
        'group' => array('type' => 'string', 'null' => true, 'default' => null),
        'alternative' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'is_active' => array('type' => 'boolean', 'null' => true, 'default' => '1'),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $awbz_hoofdaannemers = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'begindatum' => array('type' => 'date', 'null' => false, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'hoofdaannemer_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_awbz_hoofdaannemers_klant_id' => array('column' => 'klant_id', 'unique' => 0), 'idx_awbz_hoofdaannemers_hoofdaannemer_id' => array('column' => 'hoofdaannemer_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $awbz_indicaties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'begindatum' => array('type' => 'date', 'null' => false, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'begeleiding_per_week' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
        'activering_per_week' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
        'hoofdaannemer_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'aangevraagd_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1),
        'aangevraagd_datum' => array('type' => 'date', 'null' => true, 'default' => null),
        'aangevraagd_niet' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_awbz_indicaties_klant_id' => array('column' => 'klant_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $awbz_intakes = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'medewerker_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'datum_intake' => array('type' => 'date', 'null' => true, 'default' => null),
        'verblijfstatus_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'postadres' => array('type' => 'string', 'null' => true, 'default' => null),
        'postcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6),
        'woonplaats' => array('type' => 'string', 'null' => true, 'default' => null),
        'verblijf_in_NL_sinds' => array('type' => 'date', 'null' => true, 'default' => null),
        'verblijf_in_amsterdam_sinds' => array('type' => 'date', 'null' => true, 'default' => null),
        'legitimatie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'legitimatie_nummer' => array('type' => 'string', 'null' => true, 'default' => null),
        'legitimatie_geldig_tot' => array('type' => 'date', 'null' => true, 'default' => null),
        'verslavingsfrequentie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'verslavingsperiode_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'woonsituatie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'verwachting_dienstaanbod' => array('type' => 'text', 'null' => true, 'default' => null),
        'toekomstplannen' => array('type' => 'text', 'null' => true, 'default' => null),
        'opmerking_andere_instanties' => array('type' => 'text', 'null' => true, 'default' => null),
        'medische_achtergrond' => array('type' => 'text', 'null' => true, 'default' => null),
        'locatie1_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'locatie2_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'indruk' => array('type' => 'text', 'null' => true, 'default' => null),
        'doelgroep' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'verslaving_overig' => array('type' => 'string', 'null' => true, 'default' => null),
        'inkomen_overig' => array('type' => 'string', 'null' => true, 'default' => null),
        'informele_zorg' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'dagbesteding' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'inloophuis' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'hulpverlening' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'mag_gebruiken' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'primaireproblematiek_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'primaireproblematieksfrequentie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'primaireproblematieksperiode_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'eerste_gebruik' => array('type' => 'date', 'null' => true, 'default' => null),
        'locatie3_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'infobaliedoelgroep_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_awbz_intakes_klant_id' => array('column' => 'klant_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $awbz_intakes_primaireproblematieksgebruikswijzen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'awbz_intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'primaireproblematieksgebruikswijze_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $awbz_intakes_verslavingen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'awbz_intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'verslaving_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $awbz_intakes_verslavingsgebruikswijzen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'awbz_intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'verslavingsgebruikswijze_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $back_on_tracks = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'startdatum' => array('type' => 'date', 'null' => true, 'default' => null, 'key' => 'index'),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'intakedatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_back_on_tracks_dates' => array('column' => array('startdatum', 'einddatum'), 'unique' => 0)),
        'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
    );
    public $bedrijfitems = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'name' => array('type' => 'string', 'null' => false, 'default' => null),
        'bedrijfsector_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $bedrijfsectoren = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'name' => array('type' => 'string', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $bot_koppelingen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'medewerker_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'back_on_track_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'startdatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
    );
    public $bot_verslagen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'contact_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'verslag' => array('type' => 'text', 'null' => true, 'default' => null),
        'medewerker_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_bto_verslagen_klant_id' => array('column' => 'klant_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $categorieen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $contactjournals = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'medewerker_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'datum' => array('type' => 'date', 'null' => false, 'default' => null),
        'text' => array('type' => 'text', 'null' => false, 'default' => null),
        'is_tb' => array('type' => 'boolean', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_contactjournals_klant_id' => array('column' => 'klant_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $contactsoorts = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'text' => array('type' => 'string', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $doorverwijzers = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'startdatum' => array('type' => 'date', 'null' => false, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'type' => array('type' => 'string', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $gd27 = array(
        'naam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'voornaam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'achternaam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'geboortedatum' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'klant_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'db_voornaam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'db_achternaam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'roepnaam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'land' => array('type' => 'string', 'null' => true, 'default' => null),
        'nationaliteit' => array('type' => 'string', 'null' => true, 'default' => null),
        'woonsituatie' => array('type' => 'string', 'null' => true, 'default' => null),
        'inschrijving' => array('type' => 'date', 'null' => true, 'default' => null),
        'id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'primary'),
        'idd' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'indexes' => array('PRIMARY' => array('column' => 'idd', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
    );
    public $geslachten = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'afkorting' => array('type' => 'string', 'null' => false, 'default' => null),
        'volledig' => array('type' => 'string', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $groepsactiviteiten = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'groepsactiviteiten_groep_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
        'datum' => array('type' => 'date', 'null' => true, 'default' => null),
        'time' => array('type' => 'time', 'null' => true, 'default' => null),
        'afgesloten' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $groepsactiviteiten_afsluitingen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $groepsactiviteiten_groepen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100),
        'startdatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'activiteiten_registreren' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'werkgebied' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $groepsactiviteiten_groepen_klanten = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'groepsactiviteiten_groep_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'groepsactiviteiten_reden_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'startdatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'communicatie_email' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'communicatie_telefoon' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'communicatie_post' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $groepsactiviteiten_groepen_vrijwilligers = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'groepsactiviteiten_groep_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'vrijwilliger_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'groepsactiviteiten_reden_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'startdatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'communicatie_email' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'communicatie_telefoon' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'communicatie_post' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $groepsactiviteiten_intakes = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'model' => array('type' => 'string', 'null' => false, 'default' => null),
        'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'groepsactiviteiten_afsluiting_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'medewerker_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'gespreksverslag' => array('type' => 'text', 'null' => true, 'default' => null),
        'ondernemen' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'overdag' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'ontmoeten' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'regelzaken' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'informele_zorg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
        'dagbesteding' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
        'inloophuis' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
        'hulpverlening' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
        'gezin_met_kinderen' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'intakedatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'afsluitdatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'groepsactiviteiten_intakes_foreign_key_model_idx' => array('column' => array('foreign_key', 'model'), 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $groepsactiviteiten_klanten = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'groepsactiviteit_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'klant_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'afmeld_status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $groepsactiviteiten_redenen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $groepsactiviteiten_verslagen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'model' => array('type' => 'string', 'null' => false, 'default' => null),
        'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'medewerker_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'opmerking' => array('type' => 'text', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'foreign_key_model_idx' => array('column' => array('foreign_key', 'model'), 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $groepsactiviteiten_vrijwilligers = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'groepsactiviteit_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'vrijwilliger_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'afmeld_status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_answer_types = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'answer_type' => array('type' => 'string', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_answers = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'answer' => array('type' => 'string', 'null' => false, 'default' => null),
        'hi5_question_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'hi5_answer_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_evaluatie_paragraphs = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'text' => array('type' => 'string', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_evaluatie_questions = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'hi5_evaluatie_paragraph_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'text' => array('type' => 'string', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_evaluaties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'medewerker_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'datumevaluatie' => array('type' => 'date', 'null' => false, 'default' => null),
        'werkproject' => array('type' => 'string', 'null' => false, 'default' => null),
        'aantal_dagdelen' => array('type' => 'integer', 'null' => false, 'default' => null),
        'startdatumtraject' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_intake' => array('type' => 'date', 'null' => false, 'default' => null),
        'verslagvan' => array('type' => 'date', 'null' => false, 'default' => null),
        'verslagtm' => array('type' => 'date', 'null' => false, 'default' => null),
        'extraanwezigen' => array('type' => 'string', 'null' => false, 'default' => null),
        'opmerkingen_overige' => array('type' => 'text', 'null' => false, 'default' => null),
        'afspraken_afgelopen' => array('type' => 'text', 'null' => false, 'default' => null),
        'watdoejij' => array('type' => 'text', 'null' => false, 'default' => null),
        'watdoetb' => array('type' => 'text', 'null' => false, 'default' => null),
        'watdoewb' => array('type' => 'text', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_hi5_evaluaties_klant_id' => array('column' => 'klant_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_evaluaties_hi5_evaluatie_questions = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'hi5_evaluatie_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'hi5_evaluatie_question_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'hi5er_radio' => array('type' => 'integer', 'null' => false, 'default' => null),
        'hi5er_details' => array('type' => 'text', 'null' => false, 'default' => null),
        'wb_radio' => array('type' => 'integer', 'null' => false, 'default' => null),
        'wb_details' => array('type' => 'text', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_intakes = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'medewerker_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'datum_intake' => array('type' => 'date', 'null' => true, 'default' => null),
        'verblijfstatus_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'postadres' => array('type' => 'string', 'null' => true, 'default' => null),
        'postcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6),
        'woonplaats' => array('type' => 'string', 'null' => true, 'default' => null),
        'verblijf_in_NL_sinds' => array('type' => 'date', 'null' => true, 'default' => null),
        'verblijf_in_amsterdam_sinds' => array('type' => 'date', 'null' => true, 'default' => null),
        'verslaving_overig' => array('type' => 'string', 'null' => true, 'default' => null),
        'inkomen_overig' => array('type' => 'string', 'null' => true, 'default' => null),
        'locatie1_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'locatie2_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'woonsituatie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'werklocatie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'mag_gebruiken' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'legitimatie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'legitimatie_nummer' => array('type' => 'string', 'null' => true, 'default' => null),
        'legitimatie_geldig_tot' => array('type' => 'date', 'null' => true, 'default' => null),
        'primaireproblematiek_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'primaireproblematieksfrequentie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'primaireproblematieksperiode_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'eerste_gebruik' => array('type' => 'date', 'null' => true, 'default' => null),
        'verslavingsfrequentie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'verslavingsperiode_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'bedrijfitem_1_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'bedrijfitem_2_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'locatie3_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_hi5_intakes_klant_id' => array('column' => 'klant_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_intakes_answers = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'hi5_intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'hi5_answer_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'hi5_answer_text' => array('type' => 'text', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_intakes_inkomens = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'hi5_intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'inkomen_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_intakes_instanties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'hi5_intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'instantie_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_intakes_primaireproblematieksgebruikswijzen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'hi5_intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'primaireproblematieksgebruikswijze_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_intakes_verslavingen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'hi5_intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'verslaving_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_intakes_verslavingsgebruikswijzen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'hi5_intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'verslavingsgebruikswijze_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hi5_questions = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'question' => array('type' => 'string', 'null' => false, 'default' => null),
        'category' => array('type' => 'string', 'null' => false, 'default' => null),
        'order' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $hoofdaannemers = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $i18n = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
        'locale' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'index'),
        'model' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index'),
        'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
        'field' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index'),
        'content' => array('type' => 'text', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'locale' => array('column' => 'locale', 'unique' => 0), 'model' => array('column' => 'model', 'unique' => 0), 'row_id' => array('column' => 'foreign_key', 'unique' => 0), 'field' => array('column' => 'field', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $infobaliedoelgroepen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $inkomens = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'datum_van' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_tot' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $inkomens_awbz_intakes = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'awbz_intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'inkomen_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $inkomens_intakes = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'inkomen_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $instanties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'datum_van' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_tot' => array('type' => 'date', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $instanties_awbz_intakes = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'awbz_intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'instantie_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $instanties_intakes = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'instantie_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $intakes = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'medewerker_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'datum_intake' => array('type' => 'date', 'null' => true, 'default' => null),
        'verblijfstatus_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'postadres' => array('type' => 'string', 'null' => true, 'default' => null),
        'postcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6),
        'woonplaats' => array('type' => 'string', 'null' => true, 'default' => null),
        'verblijf_in_NL_sinds' => array('type' => 'date', 'null' => true, 'default' => null),
        'verblijf_in_amsterdam_sinds' => array('type' => 'date', 'null' => true, 'default' => null),
        'legitimatie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'legitimatie_nummer' => array('type' => 'string', 'null' => true, 'default' => null),
        'legitimatie_geldig_tot' => array('type' => 'date', 'null' => true, 'default' => null),
        'primaireproblematiek_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'primaireproblematieksfrequentie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'primaireproblematieksperiode_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'verslavingsfrequentie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'verslavingsperiode_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'verslaving_overig' => array('type' => 'string', 'null' => true, 'default' => null),
        'eerste_gebruik' => array('type' => 'date', 'null' => true, 'default' => null),
        'inkomen_overig' => array('type' => 'string', 'null' => true, 'default' => null),
        'woonsituatie_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'verwachting_dienstaanbod' => array('type' => 'text', 'null' => true, 'default' => null),
        'toekomstplannen' => array('type' => 'text', 'null' => true, 'default' => null),
        'opmerking_andere_instanties' => array('type' => 'text', 'null' => true, 'default' => null),
        'medische_achtergrond' => array('type' => 'text', 'null' => true, 'default' => null),
        'locatie1_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'locatie2_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'mag_gebruiken' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'indruk' => array('type' => 'text', 'null' => true, 'default' => null),
        'doelgroep' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'informele_zorg' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'dagbesteding' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'inloophuis' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'hulpverlening' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'locatie3_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'infobaliedoelgroep_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'toegang_vrouwen_nacht_opvang' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'telefoonnummer' => array('type' => 'string', 'null' => true, 'default' => null),
        'toegang_inloophuis' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_intakes_woonsituatie_id' => array('column' => 'woonsituatie_id', 'unique' => 0), 'idx_intakes_klant_id' => array('column' => 'klant_id', 'unique' => 0), 'idx_intakes_verblijfstatus_id' => array('column' => 'verblijfstatus_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $intakes_primaireproblematieksgebruikswijzen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'primaireproblematieksgebruikswijze_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $intakes_verslavingen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'verslaving_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $intakes_verslavingsgebruikswijzen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'intake_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'verslavingsgebruikswijze_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $inventarisaties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'order' => array('type' => 'integer', 'null' => false, 'default' => '0'),
        'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'actief' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
        'type' => array('type' => 'string', 'null' => true, 'default' => null),
        'titel' => array('type' => 'string', 'null' => false, 'default' => null),
        'actie' => array('type' => 'string', 'null' => false, 'default' => null),
        'startdatum' => array('type' => 'date', 'null' => false, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'lft' => array('type' => 'integer', 'null' => true, 'default' => null),
        'rght' => array('type' => 'integer', 'null' => true, 'default' => null),
        'depth' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 3),
        'dropdown_metadata' => array('type' => 'string', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $inventarisaties_verslagen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'verslag_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
        'inventarisatie_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
        'doorverwijzer_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_afsluitingen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null),
        'active' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_deelnemers = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'model' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'index'),
        'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => null),
        'datum_aanmelding' => array('type' => 'date', 'null' => true, 'default' => null),
        'binnengekomen_via' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'organisatie' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
        'naam_aanmelder' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
        'email_aanmelder' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
        'telefoon_aanmelder' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
        'notitie' => array('type' => 'text', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'datumafsluiting' => array('type' => 'date', 'null' => true, 'default' => null),
        'iz_afsluiting_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'contact_ontstaan' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_iz_deelnemers_persoon' => array('column' => array('model', 'foreign_key'), 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_deelnemers_iz_intervisiegroepen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'iz_deelnemer_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'iz_intervisiegroep_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_deelnemers_iz_projecten = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'iz_deelnemer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'iz_project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'iz_deelnemers_iz_projecten_id_deelnemr' => array('column' => 'iz_deelnemer_id', 'unique' => 0), 'iz_deelnemers_iz_projecten_iz_project_id' => array('column' => 'iz_project_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_eindekoppelingen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null),
        'active' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_intakes = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'iz_deelnemer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'medewerker_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'intake_datum' => array('type' => 'date', 'null' => true, 'default' => null),
        'gesprek_verslag' => array('type' => 'text', 'null' => true, 'default' => null),
        'ondernemen' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'overdag' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'ontmoeten' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'regelzaken' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'stagiair' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'gezin_met_kinderen' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modifed' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'iz_deelnemer_id' => array('column' => 'iz_deelnemer_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_intervisiegroepen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100),
        'startdatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'medewerker_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_koppelingen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'project_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'iz_deelnemer_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'medewerker_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'startdatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'koppeling_startdatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'koppeling_einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'iz_eindekoppeling_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'koppeling_succesvol' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'iz_vraagaanbod_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'iz_koppeling_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_ontstaan_contacten = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'active' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_projecten = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null),
        'startdatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'heeft_koppelingen' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_verslagen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'iz_deelnemer_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'medewerker_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'opmerking' => array('type' => 'text', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'iz_koppeling_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idz_iz_verslag_iz_koppeling_id' => array('column' => 'iz_koppeling_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_via_personen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'active' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $iz_vraagaanboden = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $klanten = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'MezzoID' => array('type' => 'integer', 'null' => false, 'default' => null),
        'voornaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'tussenvoegsel' => array('type' => 'string', 'null' => true, 'default' => null),
        'achternaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'roepnaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'geslacht_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
        'geboortedatum' => array('type' => 'date', 'null' => true, 'default' => null, 'key' => 'index'),
        'land_id' => array('type' => 'integer', 'null' => false, 'default' => '1'),
        'nationaliteit_id' => array('type' => 'integer', 'null' => false, 'default' => '1'),
        'BSN' => array('type' => 'string', 'null' => false, 'default' => null),
        'medewerker_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'laatste_TBC_controle' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'laste_intake_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'disabled' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'laatste_registratie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'doorverwijzen_naar_amoc' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'merged_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'adres' => array('type' => 'string', 'null' => true, 'default' => null),
        'postcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6),
        'werkgebied' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
        'postcodegebied' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'plaats' => array('type' => 'string', 'null' => true, 'default' => null),
        'email' => array('type' => 'string', 'null' => true, 'default' => null),
        'mobiel' => array('type' => 'string', 'null' => true, 'default' => null),
        'telefoon' => array('type' => 'string', 'null' => true, 'default' => null),
        'opmerking' => array('type' => 'text', 'null' => true, 'default' => null),
        'geen_post' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'first_intake_date' => array('type' => 'date', 'null' => true, 'default' => null, 'key' => 'index'),
        'geen_email' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'overleden' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'last_zrm' => array('type' => 'date', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_klanten_geboortedatum' => array('column' => 'geboortedatum', 'unique' => 0), 'idx_klanten_first_intake_date' => array('column' => 'first_intake_date', 'unique' => 0), 'idx_klanten_werkgebied' => array('column' => 'werkgebied', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $klantinventarisaties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
        'inventarisatie_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
        'doorverwijzer_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
        'datum' => array('type' => 'date', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $landen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'land' => array('type' => 'string', 'null' => false, 'default' => null),
        'AFK2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5),
        'AFK3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $legitimaties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'datum_van' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_tot' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $locatie_tijden = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'locatie_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'dag_van_de_week' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
        'sluitingstijd' => array('type' => 'time', 'null' => false, 'default' => null),
        'openingstijd' => array('type' => 'time', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
    );
    public $locaties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'nachtopvang' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
        'gebruikersruimte' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
        'datum_van' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_tot' => array('type' => 'date', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'maatschappelijkwerk' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $logs = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'model' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'key' => 'index'),
        'foreign_key' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36),
        'medewerker_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'key' => 'index'),
        'ip' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15),
        'action' => array('type' => 'string', 'null' => true, 'default' => null),
        'change' => array('type' => 'text', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_logs_model_foreign_key_created' => array('column' => array('model', 'foreign_key', 'created'), 'unique' => 0), 'idx_logs_medewerker_id' => array('column' => 'medewerker_id', 'unique' => 0), 'idx_logs_model_foreign_key' => array('column' => array('model', 'foreign_key'), 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $medewerkers = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'username' => array('type' => 'string', 'null' => false, 'default' => null),
        'voornaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'tussenvoegsel' => array('type' => 'string', 'null' => true, 'default' => null),
        'achternaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'email' => array('type' => 'string', 'null' => true, 'default' => null),
        'eerste_bezoek' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'laatste_bezoek' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'uidnumber' => array('type' => 'integer', 'null' => false, 'default' => null),
        'active' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 4),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $nationaliteiten = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'afkorting' => array('type' => 'string', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $notities = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'medewerker_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'datum' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'opmerking' => array('type' => 'text', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_notities_klant_id' => array('column' => 'klant_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $opmerkingen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'categorie_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'beschrijving' => array('type' => 'string', 'null' => false, 'default' => null),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'gezien' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_opmerkingen_klant_id' => array('column' => 'klant_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $pfo_aard_relaties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null),
        'startdatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $pfo_clienten = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
        'roepnaam' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index'),
        'tussenvoegsel' => array('type' => 'string', 'null' => true, 'default' => null),
        'achternaam' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'index'),
        'geslacht_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'geboortedatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'adres' => array('type' => 'string', 'null' => true, 'default' => null),
        'postcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'woonplaats' => array('type' => 'string', 'null' => true, 'default' => null),
        'telefoon' => array('type' => 'string', 'null' => true, 'default' => null),
        'telefoon_mobiel' => array('type' => 'string', 'null' => true, 'default' => null),
        'email' => array('type' => 'string', 'null' => true, 'default' => null),
        'notitie' => array('type' => 'text', 'null' => true, 'default' => null),
        'medewerker_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'groep' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'aard_relatie' => array('type' => 'integer', 'null' => true, 'default' => null),
        'dubbele_diagnose' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
        'eerdere_hulpverlening' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'via' => array('type' => 'text', 'null' => true, 'default' => null),
        'hulpverleners' => array('type' => 'text', 'null' => true, 'default' => null),
        'contacten' => array('type' => 'text', 'null' => true, 'default' => null),
        'begeleidings_formulier' => array('type' => 'date', 'null' => true, 'default' => null),
        'brief_huisarts' => array('type' => 'date', 'null' => true, 'default' => null),
        'evaluatie_formulier' => array('type' => 'date', 'null' => true, 'default' => null),
        'datum_afgesloten' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_pfo_clienten_roepnaam' => array('column' => 'roepnaam', 'unique' => 0), 'idx_pfo_clienten_achternaam' => array('column' => 'achternaam', 'unique' => 0), 'idx_pfo_clienten_groep' => array('column' => 'groep', 'unique' => 0), 'idx_pfo_clienten_medewerker_id' => array('column' => 'medewerker_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $pfo_clienten_supportgroups = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'pfo_client_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'pfo_supportgroup_client_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'pfo_cl_s_pfo_client_id' => array('column' => 'pfo_client_id', 'unique' => 0), 'pfo_cl_s_pfo_supportgroup_client_id' => array('column' => 'pfo_supportgroup_client_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $pfo_clienten_verslagen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'pfo_client_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'pfo_verslag_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
    );
    public $pfo_groepen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => true, 'default' => null),
        'startdatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'einddatum' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $pfo_verslagen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'contact_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'verslag' => array('type' => 'text', 'null' => true, 'default' => null),
        'medewerker_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $postcodegebieden = array(
        'postcodegebied' => array('type' => 'string', 'null' => false, 'default' => null),
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'van' => array('type' => 'integer', 'null' => false, 'default' => null),
        'tot' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $queue_tasks = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'model' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'foreign_key' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36),
        'action' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'data' => array('type' => 'text', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'key' => 'index'),
        'run_after' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'batch' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'output' => array('type' => 'text', 'null' => true, 'default' => null),
        'executed' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'status' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_queue_tasks_status_modified' => array('column' => array('modified', 'status'), 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $redenen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $registraties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'locatie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'binnen' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'buiten' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'douche' => array('type' => 'integer', 'null' => false, 'default' => null),
        'mw' => array('type' => 'integer', 'null' => false, 'default' => null),
        'kleding' => array('type' => 'boolean', 'null' => false, 'default' => null),
        'maaltijd' => array('type' => 'boolean', 'null' => false, 'default' => null),
        'activering' => array('type' => 'boolean', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'gbrv' => array('type' => 'integer', 'null' => false, 'default' => null),
        'closed' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_registraties_klant_id_locatie_id' => array('column' => array('klant_id', 'locatie_id'), 'unique' => 0), 'idx_registraties_locatie_id_closed' => array('column' => array('locatie_id', 'closed'), 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $schorsingen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'datum_van' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_tot' => array('type' => 'date', 'null' => false, 'default' => null),
        'locatie_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'remark' => array('type' => 'text', 'null' => false, 'default' => null),
        'gezien' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'overig_reden' => array('type' => 'string', 'null' => true, 'default' => null),
        'aangifte' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'nazorg' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'aggressie_tegen_medewerker' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
        'aggressie_doelwit' => array('type' => 'string', 'null' => true, 'default' => null),
        'agressie' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
        'aggressie_tegen_medewerker2' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
        'aggressie_doelwit2' => array('type' => 'string', 'null' => true, 'default' => null),
        'aggressie_tegen_medewerker3' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
        'aggressie_doelwit3' => array('type' => 'string', 'null' => true, 'default' => null),
        'aggressie_tegen_medewerker4' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
        'aggressie_doelwit4' => array('type' => 'string', 'null' => true, 'default' => null),
        'locatiehoofd' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100),
        'bijzonderheden' => array('type' => 'text', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_schorsingen_klant_id' => array('column' => 'klant_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $schorsingen_redenen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'schorsing_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'reden_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_schorsingen_redenen_schorsing_id' => array('column' => 'schorsing_id', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $stadsdelen = array(
        'postcode' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'primary'),
        'stadsdeel' => array('type' => 'string', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'postcode', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $tmp_avgduration = array(
        'label' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64),
        'range_start' => array('type' => 'integer', 'null' => true, 'default' => null),
        'range_end' => array('type' => 'integer', 'null' => true, 'default' => null),
        'indexes' => array(),
        'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
    );
    public $tmp_open_days = array(
        'locatie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'open_day' => array('type' => 'date', 'null' => true, 'default' => null, 'key' => 'index'),
        'indexes' => array('idx_tmp_open_days_locatie_id' => array('column' => 'locatie_id', 'unique' => 0), 'idx_tmp_open_days_open_day' => array('column' => 'open_day', 'unique' => 0)),
        'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
    );
    public $tmp_registraties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
        'locatie_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'binnen' => array('type' => 'datetime', 'null' => false, 'default' => null),
        'buiten' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'douche' => array('type' => 'integer', 'null' => false, 'default' => null),
        'mw' => array('type' => 'integer', 'null' => false, 'default' => null),
        'kleding' => array('type' => 'boolean', 'null' => false, 'default' => null),
        'maaltijd' => array('type' => 'boolean', 'null' => false, 'default' => null),
        'activering' => array('type' => 'boolean', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'gbrv' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array(),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
    );
    public $tmp_registrations2 = array(
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
        'voornaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'tussenvoegsel' => array('type' => 'string', 'null' => true, 'default' => null),
        'achternaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'douche' => array('type' => 'integer', 'null' => false, 'default' => null),
        'maaltijd' => array('type' => 'boolean', 'null' => false, 'default' => null),
        'activering' => array('type' => 'boolean', 'null' => false, 'default' => null),
        'locatie_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'indexes' => array(),
        'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
    );
    public $tmp_visitors = array(
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'land_id' => array('type' => 'integer', 'null' => false, 'default' => '1', 'key' => 'index'),
        'geslacht' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index'),
        'date' => array('type' => 'date', 'null' => true, 'default' => null, 'key' => 'index'),
        'verslaving_id' => array('type' => 'integer', 'null' => true, 'default' => '0', 'key' => 'index'),
        'woonsituatie_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'verblijfstatus_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'indexes' => array('idx_tmp_visitors_land_id' => array('column' => 'land_id', 'unique' => 0), 'idx_tmp_visitors_verslaving_id' => array('column' => 'verslaving_id', 'unique' => 0), 'idx_tmp_visitors_klant_id' => array('column' => 'klant_id', 'unique' => 0), 'idx_tmp_visitors_date' => array('column' => 'date', 'unique' => 0), 'idx_tmp_visitors_woonsituatie_id' => array('column' => 'woonsituatie_id', 'unique' => 0), 'idx_tmp_visitors_verblijfstatus_id' => array('column' => 'verblijfstatus_id', 'unique' => 0), 'idx_tmp_visitors_geslacht' => array('column' => 'geslacht', 'unique' => 0)),
        'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
    );
    public $tmp_visits = array(
        'locatie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'date' => array('type' => 'date', 'null' => true, 'default' => null, 'key' => 'index'),
        'gender' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'index'),
        'duration' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => 31, 'key' => 'index'),
        'indexes' => array('idx_tmp_visits_locatie_id' => array('column' => 'locatie_id', 'unique' => 0), 'idx_tmp_visits_klant_id' => array('column' => 'klant_id', 'unique' => 0), 'idx_tmp_visits_date' => array('column' => 'date', 'unique' => 0), 'idx_tmp_visits_duration' => array('column' => 'duration', 'unique' => 0), 'idx_tmp_visits_gender' => array('column' => 'gender', 'unique' => 0)),
        'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
    );
    public $trajecten = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
        'trajectbegeleider_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'werkbegeleider_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'klant_telefoonnummer' => array('type' => 'string', 'null' => false, 'default' => null),
        'administratienummer' => array('type' => 'string', 'null' => false, 'default' => null),
        'klantmanager' => array('type' => 'string', 'null' => false, 'default' => null),
        'manager_telefoonnummer' => array('type' => 'string', 'null' => false, 'default' => null),
        'manager_email' => array('type' => 'string', 'null' => false, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'uq_klant_id' => array('column' => 'klant_id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $verblijfstatussen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'datum_van' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_tot' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $verslagen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
        'medewerker_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'opmerking' => array('type' => 'text', 'null' => true, 'default' => null),
        'datum' => array('type' => 'date', 'null' => true, 'default' => null, 'key' => 'index'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'medewerker' => array('type' => 'string', 'null' => true, 'default' => null),
        'locatie_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'aanpassing_verslag' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
        'contactsoort_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_klant' => array('column' => 'klant_id', 'unique' => 0), 'idx_locatie_id' => array('column' => 'locatie_id', 'unique' => 0), 'idx_datum' => array('column' => 'datum', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $verslaginfos = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
        'advocaat' => array('type' => 'string', 'null' => false, 'default' => null),
        'contact' => array('type' => 'text', 'null' => false, 'default' => null),
        'casemanager_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'casemanager_email' => array('type' => 'string', 'null' => false, 'default' => null),
        'casemanager_telefoonnummer' => array('type' => 'string', 'null' => false, 'default' => null),
        'trajectbegeleider_id' => array('type' => 'integer', 'null' => true, 'default' => null),
        'trajectbegeleider_email' => array('type' => 'string', 'null' => false, 'default' => null),
        'trajectbegeleider_telefoonnummer' => array('type' => 'string', 'null' => false, 'default' => null),
        'trajecthouder_extern_organisatie' => array('type' => 'string', 'null' => false, 'default' => null),
        'trajecthouder_extern_naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'trajecthouder_extern_email' => array('type' => 'string', 'null' => false, 'default' => null),
        'trajecthouder_extern_telefoonnummer' => array('type' => 'string', 'null' => false, 'default' => null),
        'overige_contactpersonen_extern' => array('type' => 'text', 'null' => false, 'default' => null),
        'instantie' => array('type' => 'string', 'null' => false, 'default' => null),
        'registratienummer' => array('type' => 'string', 'null' => false, 'default' => null),
        'budgettering' => array('type' => 'string', 'null' => false, 'default' => null),
        'contactpersoon' => array('type' => 'string', 'null' => false, 'default' => null),
        'klantmanager_naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'klantmanager_email' => array('type' => 'string', 'null' => false, 'default' => null),
        'klantmanager_telefoonnummer' => array('type' => 'string', 'null' => false, 'default' => null),
        'sociaal_netwerk' => array('type' => 'text', 'null' => false, 'default' => null),
        'bankrekeningnummer' => array('type' => 'string', 'null' => false, 'default' => null),
        'polisnummer_ziektekostenverzekering' => array('type' => 'string', 'null' => false, 'default' => null),
        'inschrijfnummer' => array('type' => 'string', 'null' => false, 'default' => null),
        'wachtwoord' => array('type' => 'string', 'null' => false, 'default' => null),
        'telefoonnummer' => array('type' => 'string', 'null' => false, 'default' => null),
        'adres' => array('type' => 'text', 'null' => false, 'default' => null),
        'overigen' => array('type' => 'text', 'null' => false, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'uq_klant' => array('column' => 'klant_id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $verslavingen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'datum_van' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_tot' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $verslavingsfrequenties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'datum_van' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_tot' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $verslavingsgebruikswijzen = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'datum_van' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_tot' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $verslavingsperiodes = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'datum_van' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_tot' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $vrijwilligers = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'voornaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'tussenvoegsel' => array('type' => 'string', 'null' => true, 'default' => null),
        'achternaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'roepnaam' => array('type' => 'string', 'null' => true, 'default' => null),
        'geslacht_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
        'geboortedatum' => array('type' => 'date', 'null' => true, 'default' => null, 'key' => 'index'),
        'land_id' => array('type' => 'integer', 'null' => false, 'default' => '1'),
        'nationaliteit_id' => array('type' => 'integer', 'null' => false, 'default' => '1'),
        'BSN' => array('type' => 'string', 'null' => false, 'default' => null),
        'medewerker_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'adres' => array('type' => 'string', 'null' => true, 'default' => null),
        'postcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 6),
        'werkgebied' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'key' => 'index'),
        'postcodegebied' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50),
        'plaats' => array('type' => 'string', 'null' => true, 'default' => null),
        'email' => array('type' => 'string', 'null' => true, 'default' => null),
        'mobiel' => array('type' => 'string', 'null' => true, 'default' => null),
        'telefoon' => array('type' => 'string', 'null' => true, 'default' => null),
        'opmerking' => array('type' => 'text', 'null' => true, 'default' => null),
        'geen_post' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'disabled' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'geen_email' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'idx_klanten_geboortedatum' => array('column' => 'geboortedatum', 'unique' => 0), 'idx_vrijwilligers_werkgebied' => array('column' => 'werkgebied', 'unique' => 0)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $woonsituaties = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'naam' => array('type' => 'string', 'null' => false, 'default' => null),
        'datum_van' => array('type' => 'date', 'null' => false, 'default' => null),
        'datum_tot' => array('type' => 'date', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $zrm_reports = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'klant_id' => array('type' => 'integer', 'null' => false, 'default' => null),
        'model' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
        'foreign_key' => array('type' => 'integer', 'null' => false, 'default' => null),
        'request_module' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
        'inkomen' => array('type' => 'integer', 'null' => true, 'default' => null),
        'dagbesteding' => array('type' => 'integer', 'null' => true, 'default' => null),
        'huisvesting' => array('type' => 'integer', 'null' => true, 'default' => null),
        'gezinsrelaties' => array('type' => 'integer', 'null' => true, 'default' => null),
        'geestelijke_gezondheid' => array('type' => 'integer', 'null' => true, 'default' => null),
        'fysieke_gezondheid' => array('type' => 'integer', 'null' => true, 'default' => null),
        'verslaving' => array('type' => 'integer', 'null' => true, 'default' => null),
        'adl_vaardigheden' => array('type' => 'integer', 'null' => true, 'default' => null),
        'sociaal_netwerk' => array('type' => 'integer', 'null' => true, 'default' => null),
        'maatschappelijke_participatie' => array('type' => 'integer', 'null' => true, 'default' => null),
        'justitie' => array('type' => 'integer', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
    public $zrm_settings = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'request_module' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
        'inkomen' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'dagbesteding' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'huisvesting' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'gezinsrelaties' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'geestelijke_gezondheid' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'fysieke_gezondheid' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'verslaving' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'adl_vaardigheden' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'sociaal_netwerk' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'maatschappelijke_participatie' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'justitie' => array('type' => 'boolean', 'null' => true, 'default' => null),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );
}
