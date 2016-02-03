<div class="stakeholders view">
<h2><?php  echo __('Stakeholder'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stakeholder['Stakeholder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($stakeholder['Stakeholder']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($stakeholder['Stakeholder']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($stakeholder['Stakeholder']['number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stakeholder'), array('action' => 'edit', $stakeholder['Stakeholder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stakeholder'), array('action' => 'delete', $stakeholder['Stakeholder']['id']), null, __('Are you sure you want to delete # %s?', $stakeholder['Stakeholder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stakeholders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stakeholder'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Realisations'), array('controller' => 'realisations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realisation'), array('controller' => 'realisations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Realisations'); ?></h3>
	<?php if (!empty($stakeholder['Realisation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Main Municipality'); ?></th>
		<th><?php echo __('Land'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Initiating Actor'); ?></th>
		<th><?php echo __('Demand Of Participation'); ?></th>
		<th><?php echo __('Supplier Of Participation'); ?></th>
		<th><?php echo __('Comment On Initiating Process'); ?></th>
		<th><?php echo __('Contingency Of Decision'); ?></th>
		<th><?php echo __('Echt'); ?></th>
		<th><?php echo __('Unecht'); ?></th>
		<th><?php echo __('Description Of Process'); ?></th>
		<th><?php echo __('Invitation'); ?></th>
		<th><?php echo __('Citizen Information'); ?></th>
		<th><?php echo __('Participation In Conflicts'); ?></th>
		<th><?php echo __('Community Service'); ?></th>
		<th><?php echo __('Conflict Of Values'); ?></th>
		<th><?php echo __('Conflict Of Interests'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('URL'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Bottomup Topdown'); ?></th>
		<th><?php echo __('Regional Relation'); ?></th>
		<th><?php echo __('Sektor'); ?></th>
		<th><?php echo __('Outcome'); ?></th>
		<th><?php echo __('Miscellaneous'); ?></th>
		<th><?php echo __('Short Description'); ?></th>
		<th><?php echo __('Success'); ?></th>
		<th><?php echo __('Social Innovation Relation'); ?></th>
		<th><?php echo __('Jahr'); ?></th>
		<th><?php echo __('PLZ'); ?></th>
		<th><?php echo __('Inhabitants Classified'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Target Of Participation'); ?></th>
		<th><?php echo __('Target Of Participation Description'); ?></th>
		<th><?php echo __('Relation Energy Change Policy'); ?></th>
		<th><?php echo __('Regional Scope'); ?></th>
		<th><?php echo __('Regional Scope Description'); ?></th>
		<th><?php echo __('Publicity Scope'); ?></th>
		<th><?php echo __('Escalation Degree'); ?></th>
		<th><?php echo __('Conflict Aspect Other'); ?></th>
		<th><?php echo __('Stakeholder Id'); ?></th>
		<th><?php echo __('Energypolicylink Description'); ?></th>
		<th><?php echo __('Energysector Description'); ?></th>
		<th><?php echo __('Online Offline'); ?></th>
		<th><?php echo __('Legal Base'); ?></th>
		<th><?php echo __('Realisationscol'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($stakeholder['Realisation'] as $realisation): ?>
		<tr>
			<td><?php echo $realisation['id']; ?></td>
			<td><?php echo $realisation['main_municipality']; ?></td>
			<td><?php echo $realisation['land']; ?></td>
			<td><?php echo $realisation['name']; ?></td>
			<td><?php echo $realisation['initiating_actor']; ?></td>
			<td><?php echo $realisation['demand_of_participation']; ?></td>
			<td><?php echo $realisation['supplier_of_participation']; ?></td>
			<td><?php echo $realisation['comment_on_initiating_process']; ?></td>
			<td><?php echo $realisation['contingency_of_decision']; ?></td>
			<td><?php echo $realisation['echt']; ?></td>
			<td><?php echo $realisation['unecht']; ?></td>
			<td><?php echo $realisation['description_of_process']; ?></td>
			<td><?php echo $realisation['invitation']; ?></td>
			<td><?php echo $realisation['citizen_information']; ?></td>
			<td><?php echo $realisation['participation_in_conflicts']; ?></td>
			<td><?php echo $realisation['community_service']; ?></td>
			<td><?php echo $realisation['conflict_of_values']; ?></td>
			<td><?php echo $realisation['conflict_of_interests']; ?></td>
			<td><?php echo $realisation['date']; ?></td>
			<td><?php echo $realisation['URL']; ?></td>
			<td><?php echo $realisation['created']; ?></td>
			<td><?php echo $realisation['modified']; ?></td>
			<td><?php echo $realisation['status']; ?></td>
			<td><?php echo $realisation['bottomup_topdown']; ?></td>
			<td><?php echo $realisation['regional_relation']; ?></td>
			<td><?php echo $realisation['sektor']; ?></td>
			<td><?php echo $realisation['outcome']; ?></td>
			<td><?php echo $realisation['miscellaneous']; ?></td>
			<td><?php echo $realisation['short_description']; ?></td>
			<td><?php echo $realisation['success']; ?></td>
			<td><?php echo $realisation['social_innovation_relation']; ?></td>
			<td><?php echo $realisation['Jahr']; ?></td>
			<td><?php echo $realisation['PLZ']; ?></td>
			<td><?php echo $realisation['inhabitants_classified']; ?></td>
			<td><?php echo $realisation['start_date']; ?></td>
			<td><?php echo $realisation['end_date']; ?></td>
			<td><?php echo $realisation['target_of_participation']; ?></td>
			<td><?php echo $realisation['target_of_participation_description']; ?></td>
			<td><?php echo $realisation['relation_energy_change_policy']; ?></td>
			<td><?php echo $realisation['regional_scope']; ?></td>
			<td><?php echo $realisation['regional_scope_description']; ?></td>
			<td><?php echo $realisation['publicity_scope']; ?></td>
			<td><?php echo $realisation['escalation_degree']; ?></td>
			<td><?php echo $realisation['conflict_aspect_other']; ?></td>
			<td><?php echo $realisation['stakeholder_id']; ?></td>
			<td><?php echo $realisation['energypolicylink_description']; ?></td>
			<td><?php echo $realisation['energysector_description']; ?></td>
			<td><?php echo $realisation['online_offline']; ?></td>
			<td><?php echo $realisation['legal_base']; ?></td>
			<td><?php echo $realisation['realisationscol']; ?></td>
			<td><?php echo $realisation['file']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'realisations', 'action' => 'view', $realisation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'realisations', 'action' => 'edit', $realisation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'realisations', 'action' => 'delete', $realisation['id']), null, __('Are you sure you want to delete # %s?', $realisation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Realisation'), array('controller' => 'realisations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
