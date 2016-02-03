<div class="processcomponentsRealisations index">
	<h2><?php echo __('Processcomponents Realisations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('realisation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('processcomponent_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('legal_base'); ?></th>
			<th><?php echo $this->Paginator->sort('invitiation'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($processcomponentsRealisations as $processcomponentsRealisation): ?>
	<tr>
		<td><?php echo h($processcomponentsRealisation['ProcesscomponentsRealisation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($processcomponentsRealisation['Realisation']['name'], array('controller' => 'realisations', 'action' => 'view', $processcomponentsRealisation['Realisation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($processcomponentsRealisation['Processcomponent']['name'], array('controller' => 'processcomponents', 'action' => 'view', $processcomponentsRealisation['Processcomponent']['id'])); ?>
		</td>
		<td><?php echo h($processcomponentsRealisation['ProcesscomponentsRealisation']['created']); ?>&nbsp;</td>
		<td><?php echo h($processcomponentsRealisation['ProcesscomponentsRealisation']['modified']); ?>&nbsp;</td>
		<td><?php echo h($processcomponentsRealisation['ProcesscomponentsRealisation']['legal_base']); ?>&nbsp;</td>
		<td><?php echo h($processcomponentsRealisation['ProcesscomponentsRealisation']['invitiation']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $processcomponentsRealisation['ProcesscomponentsRealisation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $processcomponentsRealisation['ProcesscomponentsRealisation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $processcomponentsRealisation['ProcesscomponentsRealisation']['id']), null, __('Are you sure you want to delete # %s?', $processcomponentsRealisation['ProcesscomponentsRealisation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Processcomponents Realisation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Realisations'), array('controller' => 'realisations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realisation'), array('controller' => 'realisations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processcomponents'), array('controller' => 'processcomponents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processcomponent'), array('controller' => 'processcomponents', 'action' => 'add')); ?> </li>
	</ul>
</div>
