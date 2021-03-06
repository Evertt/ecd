<div class="verslagen form">

<?php 

	echo $this->Form->create('Verslag');
	
	$name="";
	
	if ($klant['Klant']['voornaam'] != "") {
		$name.=$klant['Klant']['voornaam']." ";
	}
	
	if ($klant['Klant']['roepnaam'] != "") {
		$name.="(".$klant['Klant']['roepnaam'].") ";
	}
	
	if ($klant['Klant']['tussenvoegsel'] != "") {
		$name.=$klant['Klant']['tussenvoegsel']." ";
	}
	
	$name.=$klant['Klant']['achternaam'];

?>

	<fieldset class="tree">
		<div class="cell">
			<h3>Nieuw verslag voor <?= $name ?></h3>
			<div class="scroll-box">
			
<?php
	$periods = array();
	for ($i = 20; $i <= 120; $i+=20) {
		$periods[$i] = $i;
	}

	echo $this->Form->hidden('klant_id', array('value' => $klant_id));
		
	echo 'Medewerker: '.$medewerkers[$intaker_id];
				
	echo $this->Form->hidden('medewerker_id', array('default' => $intaker_id ));

	echo $this->Date->input('Verslag.datum', date('Y-m-d'), array('label' => 'Datum'));
				
	foreach ($inventarisaties as $catId => &$group) {
				
		echo '<fieldset class="no-border"><legend>'.$group['rootName'].'</legend>';
				
		echo '<span class="movableDropdown" style="display: none" id="dropdownFor'.$catId.'">';
				
		foreach ($doorverwijzers as $type => &$options) {
						
			$dropdown_id = 'InventarisatiesVerslagen'.$catId.'DoorverwijzerId'.Inflector::classify($type);
					
			echo $this->Form->input(
				'InventarisatiesVerslagen.'.
				$catId.'.doorverwijzer_id',
				array(
					'options' => $options,
					'empty' => 'doorverwezen naar:',
					'label' => false,
					'div' => false,
					'id' => $dropdown_id,
					'class' => $type,
					'disabled' => true,
				)
			);
		}
					
		echo '</span>';
					
		foreach ($group as $invId => &$inv) {
						
			if ($invId !== 'rootName') {
						
				$actie = & $inv['Inventarisatie']['actie'];
						
				echo '<div class="node">';
							
				$inventarisatieId = $inv['Inventarisatie']['id'];
							
				echo '&nbsp;&nbsp;&nbsp;';
						
				for ($i = 1; $i < $inv['Inventarisatie']['depth']; $i++) {

					echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
								
				}

				$radioId = 'InventarisatiesVerslagen'.$inventarisatieId.'InventarisatieId';
							
				if ($actie !== 'N') {
					echo '<input id="'.$radioId.'" type="radio"
						name="data[InventarisatiesVerslagen][' .
						$catId.'][inventarisatie_id]" value="'.
						$inventarisatieId.'"/>'."\n";
				}

				echo '<label for="'.$radioId.'">';
							
				echo $inv['Inventarisatie']['titel'];
							
				echo '</label>';
							
				echo $this->Js->get('#'.$radioId)->event('change', 'treeRadioChanged("#'.$radioId.'", "'.$catId.'", "'.$actie.'")');

				if (array_key_exists($actie, $doorverwijzers)) {
								
					echo '<span class="dropdownContainer"></span>';
				}
							
				echo '</div>';
			}
		}
		echo '</fieldset>';
	}
	echo '<fieldset>';

	echo $this->Form->input('locatie_id', array(
		'empty' => __('Overige', true), ));
	echo '</fieldset>';
				
	echo '<div class="divContactSoort">';
				
	echo $this->Form->input('contactsoort_id', array('type' => 'radio', 'legend' => __('Contactsoort', true).'*', 'div' => false));
				
	echo '</div>';
				
	echo $this->Form->input('aanpassing_verslag', array(
		'type' => 'select',
		'options' => $periods,
		'label' => 'Duur gesprek (minuten)',
	));
?>
			</div><!-- scroll-box end -->
		</div>
		<div class="cell">
			<div id="verslagen-right-col">
				<h3>Vorige versla									gen</h3>
				<div class="scroll-box" id="verslagen-index">
					<?= $this->element('verslagen_index', array(compact('verslagen'))); ?>
				</div>
				<h3>Nieuwe opmerking</h3>
				<div id="verslagen-opmerking">
					<?php
					echo $this->Form->input('opmerking', array(
						'type' => 'textfield',
						'label' => false,
					));
					?>
				</div>
			</div>
		</div>
	</fieldset>
	
	<div class="submit">
		<?php
			echo $this->Form->submit('Verslag opslaan', array('div' => false));
			echo '&nbsp;&nbsp;';
			echo $this->Html->link('Annuleren', array('action' => 'view', $klant_id));
		?>
				</div>			  
	<?php
		echo $this->Form->end();
		echo $this->Js->writeBuffer();
	?>

</div>

<script type="text/javascript">
	$('#VerslagAanpassingVerslag').parent('div').hide();
	$(function () {
		duurGesprekVisibility();
		$('.divContactSoort input').click(duurGesprekVisibility);

		function duurGesprekVisibility() {
			if ($('.divContactSoort input:checked').val() == 3) {
				$('#VerslagAanpassingVerslag').parent('div').show();
				$('.scroll-box').scrollTop(100000);

			} else {
				$('#VerslagAanpassingVerslag').parent('div').hide();
			}
		}
	});
</script>

