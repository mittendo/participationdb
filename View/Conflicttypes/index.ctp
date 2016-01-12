<div class="conflicttypes index">
	<h2><?php echo __('Conflicttypes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('categorycol'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($conflicttypes as $conflicttype): ?>
	<tr>
		<td><?php echo h($conflicttype['Conflicttype']['id']); ?>&nbsp;</td>
		<td><?php echo h($conflicttype['Conflicttype']['name']); ?>&nbsp;</td>
		<td><?php echo h($conflicttype['Conflicttype']['created']); ?>&nbsp;</td>
		<td><?php echo h($conflicttype['Conflicttype']['modified']); ?>&nbsp;</td>
		<td><?php echo h($conflicttype['Conflicttype']['categorycol']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $conflicttype['Conflicttype']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $conflicttype['Conflicttype']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $conflicttype['Conflicttype']['id']), null, __('Are you sure you want to delete # %s?', $conflicttype['Conflicttype']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Conflicttype'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Realisations'), array('controller' => 'realisations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realisation'), array('controller' => 'realisations', 'action' => 'add')); ?> </li>
	</ul>
</div>
