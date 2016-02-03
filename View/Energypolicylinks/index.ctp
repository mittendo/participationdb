<div class="energypolicylinks index">
	<h2><?php echo __('Energypolicylinks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($energypolicylinks as $energypolicylink): ?>
	<tr>
		<td><?php echo h($energypolicylink['Energypolicylink']['id']); ?>&nbsp;</td>
		<td><?php echo h($energypolicylink['Energypolicylink']['name']); ?>&nbsp;</td>
		<td><?php echo h($energypolicylink['Energypolicylink']['created']); ?>&nbsp;</td>
		<td><?php echo h($energypolicylink['Energypolicylink']['modified']); ?>&nbsp;</td>
		<td><?php echo h($energypolicylink['Energypolicylink']['number']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $energypolicylink['Energypolicylink']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $energypolicylink['Energypolicylink']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $energypolicylink['Energypolicylink']['id']), null, __('Are you sure you want to delete # %s?', $energypolicylink['Energypolicylink']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Energypolicylink'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Realisations'), array('controller' => 'realisations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realisation'), array('controller' => 'realisations', 'action' => 'add')); ?> </li>
	</ul>
</div>
