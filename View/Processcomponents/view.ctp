<div class="processcomponents view">
<h2><?php  echo __('Processcomponent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($processcomponent['Processcomponent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($processcomponent['Processcomponent']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Processcomponent'), array('action' => 'edit', $processcomponent['Processcomponent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Processcomponent'), array('action' => 'delete', $processcomponent['Processcomponent']['id']), null, __('Are you sure you want to delete # %s?', $processcomponent['Processcomponent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Processcomponents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processcomponent'), array('action' => 'add')); ?> </li>
	</ul>
</div>
