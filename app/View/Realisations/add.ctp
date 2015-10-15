<div class="realisations form">
<?php echo $this->Form->create('Realisation'); ?>
	<fieldset>
		<legend><?php echo __('Add Realisation'); ?></legend>
	<?php
		echo $this->Form->input('municipality');
		echo $this->Form->input('land');
		echo $this->Form->input('name');
		echo $this->Form->input('initiating_actor');
		echo $this->Form->input('demand_of_participation');
		echo $this->Form->input('supplier_of_participation');
		echo $this->Form->input('comment_on_initiating_process');
		echo $this->Form->input('contingency_of_decision');
		echo $this->Form->input('echt');
		echo $this->Form->input('unecht');
		echo $this->Form->input('description_of_process');
		echo $this->Form->input('invitation');
		echo $this->Form->input('citizen_information');
		echo $this->Form->input('participation_in_conflicts');
		echo $this->Form->input('participation_in_decisionmaking');
		echo $this->Form->input('community_service');
		echo $this->Form->input('conflict_of_values');
		echo $this->Form->input('conflict_of_interests');
		echo $this->Form->input('date');
		echo $this->Form->input('URL');
		echo $this->Form->input('U');
		echo $this->Form->input('Municipality');
		echo $this->Form->input('Processcomponent');
		echo $this->Form->input('Review');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Realisations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processcomponents'), array('controller' => 'processcomponents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processcomponent'), array('controller' => 'processcomponents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
