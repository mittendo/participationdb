<div class="energySectors form">
<?php echo $this->Form->create('EnergySector'); ?>
	<fieldset>
		<legend><?php echo __('Edit Energy Sector'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('number');
		echo $this->Form->input('Realisation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EnergySector.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EnergySector.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Energy Sectors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Realisations'), array('controller' => 'realisations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realisation'), array('controller' => 'realisations', 'action' => 'add')); ?> </li>
	</ul>
</div>
