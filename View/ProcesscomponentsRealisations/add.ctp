<div class="processcomponentsRealisations form">
<?php echo $this->Form->create('ProcesscomponentsRealisation'); ?>
	<fieldset>
		<legend><?php echo __('Add Processcomponents Realisation'); ?></legend>
	<?php
		echo $this->Form->input('realisation_id');
		echo $this->Form->input('processcomponent_id');
		echo $this->Form->input('legal_base');
		echo $this->Form->input('invitiation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Processcomponents Realisations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Realisations'), array('controller' => 'realisations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realisation'), array('controller' => 'realisations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processcomponents'), array('controller' => 'processcomponents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processcomponent'), array('controller' => 'processcomponents', 'action' => 'add')); ?> </li>
	</ul>
</div>
