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
			<th><?php echo $this->Paginator->sort('participation_in_decisionmaking'); ?></th>
			<th><?php echo $this->Paginator->sort('community_service'); ?></th>
			<th><?php echo $this->Paginator->sort('conflict_of_values'); ?></th>
			<th><?php echo $this->Paginator->sort('conflict_of_interests'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('URL'); ?></th>
			<th><?php echo $this->Paginator->sort('U'); ?></th>
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
		<td><?php echo h($realisation['Realisation']['participation_in_decisionmaking']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['community_service']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['conflict_of_values']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['conflict_of_interests']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['date']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['URL']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['U']); ?>&nbsp;</td>
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
		<li><?php echo $this->Html->link(__('List Municipalities'), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processcomponents'), array('controller' => 'processcomponents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processcomponent'), array('controller' => 'processcomponents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
