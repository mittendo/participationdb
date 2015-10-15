<div class="municipalities form">
<?php echo $this->Form->create('Municipality'); ?>
	<fieldset>
		<legend><?php echo __('Edit Municipality'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('land_no');
		echo $this->Form->input('land');
		echo $this->Form->input('type_of_set');
		echo $this->Form->input('text_signature');
		echo $this->Form->input('type_of_municipality');
		echo $this->Form->input('region_no');
		echo $this->Form->input('name');
		echo $this->Form->input('seat_of_authority');
		echo $this->Form->input('street');
		echo $this->Form->input('PLZ');
		echo $this->Form->input('location');
		echo $this->Form->input('area');
		echo $this->Form->input('date');
		echo $this->Form->input('inhabitants');
		echo $this->Form->input('male');
		echo $this->Form->input('female');
		echo $this->Form->input('density_of_inhabitants');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Municipality.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Municipality.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('action' => 'index')); ?></li>
	</ul>
</div>
