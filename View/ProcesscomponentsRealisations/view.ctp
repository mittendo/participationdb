<div class="processcomponentsRealisations view">
<h2><?php  echo __('Processcomponents Realisation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($processcomponentsRealisation['ProcesscomponentsRealisation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Realisation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($processcomponentsRealisation['Realisation']['name'], array('controller' => 'realisations', 'action' => 'view', $processcomponentsRealisation['Realisation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Processcomponent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($processcomponentsRealisation['Processcomponent']['name'], array('controller' => 'processcomponents', 'action' => 'view', $processcomponentsRealisation['Processcomponent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($processcomponentsRealisation['ProcesscomponentsRealisation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($processcomponentsRealisation['ProcesscomponentsRealisation']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legal Base'); ?></dt>
		<dd>
			<?php echo h($processcomponentsRealisation['ProcesscomponentsRealisation']['legal_base']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invitiation'); ?></dt>
		<dd>
			<?php echo h($processcomponentsRealisation['ProcesscomponentsRealisation']['invitiation']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Processcomponents Realisation'), array('action' => 'edit', $processcomponentsRealisation['ProcesscomponentsRealisation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Processcomponents Realisation'), array('action' => 'delete', $processcomponentsRealisation['ProcesscomponentsRealisation']['id']), null, __('Are you sure you want to delete # %s?', $processcomponentsRealisation['ProcesscomponentsRealisation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Processcomponents Realisations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processcomponents Realisation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Realisations'), array('controller' => 'realisations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realisation'), array('controller' => 'realisations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processcomponents'), array('controller' => 'processcomponents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processcomponent'), array('controller' => 'processcomponents', 'action' => 'add')); ?> </li>
	</ul>
</div>
