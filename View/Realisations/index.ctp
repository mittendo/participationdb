<div class="realisations index">
	<h2><?php echo __('Realisations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('main_municipality'); ?></th>
			<th><?php echo $this->Paginator->sort('land'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('initiating_actor'); ?></th>
			<th><?php echo $this->Paginator->sort('demand_of_participation'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier_of_participation'); ?></th>
			<th><?php echo $this->Paginator->sort('comment_on_initiating_process'); ?></th>
			<th><?php echo $this->Paginator->sort('contingency_of_decision'); ?></th>
			<th><?php echo $this->Paginator->sort('echt'); ?></th>
			<th><?php echo $this->Paginator->sort('unecht'); ?></th>
			<th><?php echo $this->Paginator->sort('description_of_process'); ?></th>
			<th><?php echo $this->Paginator->sort('invitation'); ?></th>
			<th><?php echo $this->Paginator->sort('citizen_information'); ?></th>
			<th><?php echo $this->Paginator->sort('participation_in_conflicts'); ?></th>
			<th><?php echo $this->Paginator->sort('community_service'); ?></th>
			<th><?php echo $this->Paginator->sort('conflict_of_values'); ?></th>
			<th><?php echo $this->Paginator->sort('conflict_of_interests'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('URL'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('bottomup_topdown'); ?></th>
			<th><?php echo $this->Paginator->sort('regional_relation'); ?></th>
			<th><?php echo $this->Paginator->sort('sektor'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_energy'); ?></th>
			<th><?php echo $this->Paginator->sort('policy'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('success'); ?></th>
			<th><?php echo $this->Paginator->sort('social_innovation_relation'); ?></th>
			<th><?php echo $this->Paginator->sort('Jahr'); ?></th>
			<th><?php echo $this->Paginator->sort('PLZ'); ?></th>
			<th><?php echo $this->Paginator->sort('inhabitants_classified'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('target_of_participation'); ?></th>
			<th><?php echo $this->Paginator->sort('target_of_participation_description'); ?></th>
			<th><?php echo $this->Paginator->sort('relation_energy_change_policy'); ?></th>
			<th><?php echo $this->Paginator->sort('regional_scope'); ?></th>
			<th><?php echo $this->Paginator->sort('regional_scope_description'); ?></th>
			<th><?php echo $this->Paginator->sort('publicity_scope'); ?></th>
			<th><?php echo $this->Paginator->sort('conflict_type'); ?></th>
			<th><?php echo $this->Paginator->sort('escalation_degree'); ?></th>
			<th><?php echo $this->Paginator->sort('conflict_aspect_other'); ?></th>
			<th><?php echo $this->Paginator->sort('stakeholder_id'); ?></th>
			<th><?php echo $this->Paginator->sort('energypolicylink_description'); ?></th>
			<th><?php echo $this->Paginator->sort('energysector_description'); ?></th>
			<th><?php echo $this->Paginator->sort('online_offline'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($realisations as $realisation): ?>
	<tr>
		<td><?php echo h($realisation['Realisation']['id']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['main_municipality']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['land']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['name']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['initiating_actor']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['demand_of_participation']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['supplier_of_participation']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['comment_on_initiating_process']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['contingency_of_decision']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['echt']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['unecht']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['description_of_process']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['invitation']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['citizen_information']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['participation_in_conflicts']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['community_service']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['conflict_of_values']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['conflict_of_interests']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['date']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['URL']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['created']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['modified']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['status']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['bottomup_topdown']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['regional_relation']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['sektor']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['issue_energy']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['policy']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['short_description']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['success']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['social_innovation_relation']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['Jahr']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['PLZ']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['inhabitants_classified']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['target_of_participation']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['target_of_participation_description']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['relation_energy_change_policy']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['regional_scope']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['regional_scope_description']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['publicity_scope']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['conflict_type']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['escalation_degree']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['conflict_aspect_other']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($realisation['Stakeholder']['name'], array('controller' => 'stakeholders', 'action' => 'view', $realisation['Stakeholder']['id'])); ?>
		</td>
		<td><?php echo h($realisation['Realisation']['energypolicylink_description']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['energysector_description']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['online_offline']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $realisation['Realisation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $realisation['Realisation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $realisation['Realisation']['id']), null, __('Are you sure you want to delete # %s?', $realisation['Realisation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Realisation'), array('action' => 'add')); ?></li>
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
