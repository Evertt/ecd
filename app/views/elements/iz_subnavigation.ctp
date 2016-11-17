<div id="subheader">
  <?php
  if ($this->action == 'index' &&
      $this->name == 'IzDeelnemers' &&
      (empty($this->params['named']) ||
        (isset($this->params['named']['Klant.selectie']) &&
        !isset($this->params['named']['Klant.wachtlijst'])))) {
    echo $html->link('Deelnemerslijst', array(
        'controller' => 'iz_deelnemers',
        'action' => 'index',
        'Klant.selectie' => '1',
      ),
      array('class' => 'selected')
    );
  } else {
    echo $html->link('Deelnemerslijst', array(
      'controller' => 'iz_deelnemers',
      'action' => 'index',
      'Klant.selectie' => '1',
    ));
  }
  echo "&nbsp;&nbsp;";
  if ($this->action == 'index' &&
      $this->name == 'IzDeelnemers' &&
      isset($this->params['named']['Vrijwilliger.selectie']) &&
      !isset($this->params['named']['Vrijwilliger.wachtlijst'])) {
    echo $html->link('Vrijwilligerslijst', array(
        'controller' => 'iz_deelnemers',
        'action' => 'index',
        'Vrijwilliger.selectie' => '1',
      ),
      array('class' => 'selected')
    );
  } else {
    echo $html->link('Vrijwilligerslijst', array(
      'controller' => 'iz_deelnemers',
      'action' => 'index',
      'Vrijwilliger.selectie' => '1',
    ));
  }
  echo "&nbsp;&nbsp;";
  if ($this->action == 'index' &&
      $this->name == 'IzDeelnemers' &&
      isset($this->params['named']['Klant.selectie']) &&
      isset($this->params['named']['Klant.wachtlijst'])) {
    echo $html->link('Hulpvragen', array(
        'controller' => 'iz_hulpvragen',
        'action' => 'index',
      ),
      array('class' => 'selected')
    );
  } else {
    echo $html->link('Hulpvragen', array(
      'controller' => 'iz_hulpvragen',
      'action' => 'index',
    ));
  }
  echo "&nbsp;&nbsp;";
  if ($this->action == 'index' &&
      $this->name == 'IzDeelnemers' &&
      isset($this->params['named']['Vrijwilliger.selectie']) &&
      isset($this->params['named']['Vrijwilliger.wachtlijst'])) {
    echo $html->link('Hulpaanbiedingen', array(
        'controller' => 'iz_hulpaanbiedingen',
        'action' => 'index',
      ),
      array('class' => 'selected')
    );
  } else {
    echo $html->link('Hulpaanbiedingen', array(
        'controller' => 'iz_hulpaanbiedingen',
        'action' => 'index',
    ));
  }
  echo "&nbsp;&nbsp;";
  if ($this->action == 'rapportages') {
    echo $html->link('Rapportages', array(
        'controller' => 'iz_deelnemers',
        'action' => 'rapportages',
      ),
      array('class' => 'selected')
    );
  } else {
    echo $html->link('Rapportages', array(
      'controller' => 'iz_deelnemers',
      'action' => 'rapportages',
    ));
  }
  echo "&nbsp;&nbsp;";
  if ($this->action == 'selecties') {
    echo $html->link('Selecties', array(
        'controller' => 'iz_deelnemers',
        'action' => 'selecties',
      ),
      array('class' => 'selected')
    );
  } else {
    echo $html->link('Selecties', array(
    'controller' => 'iz_deelnemers',
    'action' => 'selecties',
  ));
  }
  echo "&nbsp;&nbsp;";
  if ($this->action == 'intervisiegroepen') {
    echo $html->link('Intervisiegroepen', array(
        'controller' => 'iz_deelnemers',
        'action' => 'intervisiegroepen',
      ),
      array('class' => 'selected')
    );
  } else {
    echo $html->link('Intervisiegroepen', array(
    'controller' => 'iz_deelnemers',
    'action' => 'intervisiegroepen',
  ));
  }
  echo "&nbsp;&nbsp;";
  if ($this->action == 'koppellijst') {
    echo $html->link('Koppellijst', array(
        'controller' => 'iz_deelnemers',
        'action' => 'koppellijst',
      ),
      array('class' => 'selected')
    );
  } else {
    echo $html->link('Koppellijst', array(
    'controller' => 'iz_deelnemers',
    'action' => 'koppellijst',
  ));
  }
  echo "&nbsp;&nbsp;";
  if ($this->action == 'beheer' || $this->name != 'IzDeelnemers') {
    echo $html->link('Beheer', array(
        'controller' => 'iz_deelnemers',
        'action' => 'beheer',
      ),
      array('class' => 'selected')
    );
  } else {
    echo $html->link('Beheer', array(
    'controller' => 'iz_deelnemers',
    'action' => 'beheer',
  ));
  }
  echo "&nbsp;&nbsp;";
  echo "<div>&nbsp;</div>"
  ?>
</div>
