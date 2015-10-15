<div class="municipalities index">
	<h2><?php echo __('Municipalities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('land_no'); ?></th>
			<th><?php echo $this->Paginator->sort('land'); ?></th>
			<th><?php echo $this->Paginator->sort('type_of_set'); ?></th>
			<th><?php echo $this->Paginator->sort('text_signature'); ?></th>
			<th><?php echo $this->Paginator->sort('type_of_municipality'); ?></th>
			<th><?php echo $this->Paginator->sort('region_no'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('seat_of_authority'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('PLZ'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('area'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('inhabitants'); ?></th>
			<th><?php echo $this->Paginator->sort('male'); ?></th>
			<th><?php echo $this->Paginator->sort('female'); ?></th>
			<th><?php echo $this->Paginator->sort('density_of_inhabitants'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($municipalities as $municipality): ?>
	<tr>
		<td><?php echo h($municipality['Municipality']['id']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['land_no']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['land']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['type_of_set']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['text_signature']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['type_of_municipality']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['region_no']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['name']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['seat_of_authority']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['street']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['PLZ']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['location']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['area']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['date']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['inhabitants']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['male']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['female']); ?>&nbsp;</td>
		<td><?php echo h($municipality['Municipality']['density_of_inhabitants']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $municipality['Municipality']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $municipality['Municipality']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $municipality['Municipality']['id']), null, __('Are you sure you want to delete # %s?', $municipality['Municipality']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Municipality'), array('action' => 'add')); ?></li>
	</ul>
</div>
