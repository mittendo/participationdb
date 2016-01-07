<div class="energySectors view">
<h2><?php  echo __('Energy Sector'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($energySector['EnergySector']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($energySector['EnergySector']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($energySector['EnergySector']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($energySector['EnergySector']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Energy Sector'), array('action' => 'edit', $energySector['EnergySector']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Energy Sector'), array('action' => 'delete', $energySector['EnergySector']['id']), null, __('Are you sure you want to delete # %s?', $energySector['EnergySector']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Energy Sectors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Energy Sector'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Realisations'), array('controller' => 'realisations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realisations'), array('controller' => 'realisations', 'action' => 'add')); ?> </li>
	</ul>
</div>
