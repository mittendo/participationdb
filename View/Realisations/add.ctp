<div class="realisations form">
<?php echo $this->Form->create('Realisation'); ?>
	<fieldset>
		<legend><?php echo __('Add Realisation'); ?></legend>
	<?php
		echo $this->Form->input('main_municipality');
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
		echo $this->Form->input('community_service');
		echo $this->Form->input('conflict_of_values');
		echo $this->Form->input('conflict_of_interests');
		echo $this->Form->input('date');
		echo $this->Form->input('URL');
		echo $this->Form->input('status');
		echo $this->Form->input('bottomup_topdown');
		echo $this->Form->input('regional_relation');
		echo $this->Form->input('sektor');
		echo $this->Form->input('issue_energy');
		echo $this->Form->input('policy');
		echo $this->Form->input('short_description');
		echo $this->Form->input('success');
		echo $this->Form->input('social_innovation_relation');
		echo $this->Form->input('Jahr');
		echo $this->Form->input('PLZ');
		echo $this->Form->input('inhabitants_classified');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('target_of_participation');
		echo $this->Form->input('target_of_participation_description');
		echo $this->Form->input('relation_energy_change_policy');
		echo $this->Form->input('regional_scope');
		echo $this->Form->input('regional_scope_description');
		echo $this->Form->input('publicity_scope');
		echo $this->Form->input('conflict_type');
		echo $this->Form->input('conflict_aspect_other');
		echo $this->Form->input('escalation_degree');
		echo $this->Form->input('stakeholder_id');
		echo $this->Form->input('EnergySector');
		echo $this->Form->input('Energypolicylink');
		echo $this->Form->input('Municipality');
		echo $this->Form->input('Processcomponent');
		echo $this->Form->input('Review');
		echo $this->Form->input('Initiating Stakeholder');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Realisations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stakeholders'), array('controller' => 'stakeholders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stakeholder'), array('controller' => 'stakeholders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Energy Sectors'), array('controller' => 'energy_sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Energy Sector'), array('controller' => 'energy_sectors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Energypolicylinks'), array('controller' => 'energypolicylinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Energypolicylink'), array('controller' => 'energypolicylinks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processcomponents'), array('controller' => 'processcomponents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processcomponent'), array('controller' => 'processcomponents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
