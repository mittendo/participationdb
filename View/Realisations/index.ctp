<div class="realisations index">
	<h2><?php echo __('Realisations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('main_municipality'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
	
			<th><?php echo $this->Paginator->sort('sektor'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
			<th><?php echo $this->Paginator->sort('success'); ?></th>
			<th><?php echo $this->Paginator->sort('Jahr'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($realisations as $realisation): ?>
	<tr>
		<td><?php echo h($realisation['Realisation']['id']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['main_municipality']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['name']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['sektor']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['short_description']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['success']); ?>&nbsp;</td>
		<td><?php echo h($realisation['Realisation']['Jahr']); ?>&nbsp;</td>
		
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
