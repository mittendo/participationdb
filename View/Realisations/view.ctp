<div class="realisations view">
<h2><?php  echo __('Realisation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipality'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['municipality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Land'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['land']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Initiating Actor'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['initiating_actor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Demand Of Participation'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['demand_of_participation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier Of Participation'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['supplier_of_participation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment On Initiating Process'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['comment_on_initiating_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contingency Of Decision'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['contingency_of_decision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Echt'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['echt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unecht'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['unecht']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description Of Process'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['description_of_process']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invitation'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['invitation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Citizen Information'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['citizen_information']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participation In Conflicts'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['participation_in_conflicts']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participation In Decisionmaking'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['participation_in_decisionmaking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Community Service'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['community_service']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conflict Of Values'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['conflict_of_values']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conflict Of Interests'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['conflict_of_interests']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('URL'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['URL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('U'); ?></dt>
		<dd>
			<?php echo h($realisation['Realisation']['U']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Realisation'), array('action' => 'edit', $realisation['Realisation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Realisation'), array('action' => 'delete', $realisation['Realisation']['id']), null, __('Are you sure you want to delete # %s?', $realisation['Realisation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Realisations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realisation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processcomponents'), array('controller' => 'processcomponents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processcomponent'), array('controller' => 'processcomponents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Municipalities'); ?></h3>
	<?php if (!empty($realisation['Municipality'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Land No'); ?></th>
		<th><?php echo __('Land'); ?></th>
		<th><?php echo __('Type Of Set'); ?></th>
		<th><?php echo __('Text Signature'); ?></th>
		<th><?php echo __('Type Of Municipality'); ?></th>
		<th><?php echo __('Region No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Seat Of Authority'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('PLZ'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Inhabitants'); ?></th>
		<th><?php echo __('Male'); ?></th>
		<th><?php echo __('Female'); ?></th>
		<th><?php echo __('Density Of Inhabitants'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($realisation['Municipality'] as $municipality): ?>
		<tr>
			<td><?php echo $municipality['id']; ?></td>
			<td><?php echo $municipality['land_no']; ?></td>
			<td><?php echo $municipality['land']; ?></td>
			<td><?php echo $municipality['type_of_set']; ?></td>
			<td><?php echo $municipality['text_signature']; ?></td>
			<td><?php echo $municipality['type_of_municipality']; ?></td>
			<td><?php echo $municipality['region_no']; ?></td>
			<td><?php echo $municipality['name']; ?></td>
			<td><?php echo $municipality['seat_of_authority']; ?></td>
			<td><?php echo $municipality['street']; ?></td>
			<td><?php echo $municipality['PLZ']; ?></td>
			<td><?php echo $municipality['location']; ?></td>
			<td><?php echo $municipality['area']; ?></td>
			<td><?php echo $municipality['date']; ?></td>
			<td><?php echo $municipality['inhabitants']; ?></td>
			<td><?php echo $municipality['male']; ?></td>
			<td><?php echo $municipality['female']; ?></td>
			<td><?php echo $municipality['density_of_inhabitants']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'municipalities', 'action' => 'view', $municipality['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'municipalities', 'action' => 'edit', $municipality['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'municipalities', 'action' => 'delete', $municipality['id']), null, __('Are you sure you want to delete # %s?', $municipality['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Municipality'), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Processcomponents'); ?></h3>
	<?php if (!empty($realisation['Processcomponent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($realisation['Processcomponent'] as $processcomponent): ?>
		<tr>
			<td><?php echo $processcomponent['id']; ?></td>
			<td><?php echo $processcomponent['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'processcomponents', 'action' => 'view', $processcomponent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'processcomponents', 'action' => 'edit', $processcomponent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'processcomponents', 'action' => 'delete', $processcomponent['id']), null, __('Are you sure you want to delete # %s?', $processcomponent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Processcomponent'), array('controller' => 'processcomponents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reviews'); ?></h3>
	<?php if (!empty($realisation['Review'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Review'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($realisation['Review'] as $review): ?>
		<tr>
			<td><?php echo $review['id']; ?></td>
			<td><?php echo $review['review']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviews', 'action' => 'view', $review['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $review['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $review['id']), null, __('Are you sure you want to delete # %s?', $review['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
