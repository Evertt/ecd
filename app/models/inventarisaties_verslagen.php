<?php

class InventarisatiesVerslagen extends AppModel
{
    public $name = 'InventarisatiesVerslagen';
    public $useTable = 'inventarisaties_verslagen';

    public $belongsTo = array(
        'Verslag' => array(
            'className' => 'Verslag',
            'foreignKey' => 'verslag_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ),
        'Inventarisatie' => array(
            'className' => 'Inventarisatie',
            'foreignKey' => 'inventarisatie_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ),
        'Doorverwijzer' => array(
            'className' => 'Doorverwijzer',
            'foreignKey' => 'doorverwijzer_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ),
    );

    public function beforeSave()
    {
        if (!isset($this->data['InventarisatiesVerslagen']['inventarisatie_id'])) {
            unset($this->data['InventarisatiesVerslagen']);
        } else {
        }

        return true;
    }

    public function getInvPaths(&$data)
    {
        foreach ($data['InventarisatiesVerslagen'] as &$record) {
            if ($record['Inventarisatie']['titel'] !== 'Niets te melden') {
                if (isset($record['Doorverwijzer']) && isset($record['Doorverwijzer']['naam'])) {
                    $doorverwijzer = $record['Doorverwijzer']['naam'];
                }

                $record = $this->Inventarisatie->getpath($record['inventarisatie_id'], array('titel'));

                if (isset($doorverwijzer)) {
                    $record[]['Inventarisatie']['titel'] = $doorverwijzer;
                    unset($doorverwijzer);
                }
            } else {
                $record = null;
            }
        }

        $data['InventarisatiesVerslagen'] = array_filter($data['InventarisatiesVerslagen']);
    }

    public function getInventarisatiesCount(&$inventarisaties)
    {
        foreach ($inventarisaties as $root_id => &$inventarisaties_branch) {
            foreach ($inventarisaties_branch as $i => &$inventarisatie) {
                if (is_array($inventarisatie)) {
                    $inventarisatie['Inventarisatie']['count'] = $this->find('count', array(
                        'conditions' => array(
                            'InventarisatiesVerslagen.inventarisatie_id' => $inventarisatie['Inventarisatie']['id'],
                        ),
                    ));
                }
            }
        }
    }
}
