<div class="municipalities view">
<h2><?php  echo __('Municipality'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Land No'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['land_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Land'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['land']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Of Set'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['type_of_set']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text Signature'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['text_signature']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Of Municipality'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['type_of_municipality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region No'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['region_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seat Of Authority'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['seat_of_authority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PLZ'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['PLZ']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inhabitants'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['inhabitants']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Male'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['male']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Female'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['female']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Density Of Inhabitants'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['density_of_inhabitants']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Municipality'), array('action' => 'edit', $municipality['Municipality']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Municipality'), array('action' => 'delete', $municipality['Municipality']['id']), null, __('Are you sure you want to delete # %s?', $municipality['Municipality']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('action' => 'add')); ?> </li>
	</ul>
</div>
