<div class="redenen form">
<?php echo $this->Form->create('Reden');?>
	<fieldset>
		<legend><?php __('Add Reden'); ?></legend>
	<?php
		echo $this->Form->input('naam');
		echo $this->Form->input('Schorsing');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Redenen', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Schorsingen', true), array('controller' => 'schorsingen', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schorsing', true), array('controller' => 'schorsingen', 'action' => 'add')); ?> </li>
	</ul>
</div>