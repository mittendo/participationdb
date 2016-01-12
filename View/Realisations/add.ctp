<div class="realisations form">
<?php echo $this->Form->create('Realisation'); ?>
	<fieldset>
		<legend><?php echo __('Add Realisation'); ?></legend>
	<?php
		echo $this->Form->input('main_municipality');
		echo $this->Form->input('land');
		echo $this->Form->input('name');
		echo $this->Form->input('initiating_actor',
                        array(
                            'options' => array(
                                '1 = Einzelpersonen', 
                                '2 = Bürgerinitiativen, Vereine',
                                '3 = Verbände',
                                '4 = Politik',
                                '4.1 Kommunale Akteure', 
                                '4.1a politischen Parteien',
                                '4.1bOB / LR',
                                '4.1c Kommunalvertretungen: Kreisrat, Rat, Stadtrat',
                                '4.1d Landschafts- und / oder Kommunalverbände',
                                '4.2 Landespolitische Akteure',
                                '4.3 Bundespolitische Akteure',
                                '4.4 EU-Akteure',

                                '5 = Verwaltung',
                                '6 = Wirtschaft',
                                '6. Wirtschaft',
                                '6a.Unternehmen der Energiewende',
                                '6b. Konventionelle Energieversorger',

                                '7 = Sonstige'
                            ),
                            'empty' => '(bitte auswählen)' 
                            )
                        );
		echo $this->Form->input('demand_of_participation');
		echo $this->Form->input('supplier_of_participation');
		echo $this->Form->input('comment_on_initiating_process');
		echo $this->Form->input('contingency_of_decision');
		echo $this->Form->input('echt');
		echo $this->Form->input('unecht');
		echo $this->Form->input('description_of_process');
		echo $this->Form->input('invitation', array(
                     'options' => array(
                         '1 = Teilnahme direkt Betroffener', 
                         '2 = Auswahl der Teilnahme',
                         '2a. Zufallsauswahl',
                         '2b. direkte Ansprache',
                         '2c. sachkundige Bürger', 
                         '2d. quotierte Auswahl, anhand soziodemographischer Merkmale',
                         '3 = offene Teilnahmemöglichkeit',
                         '4 = paritätische Mischung aus 1-3'
                              ),
                    'empty' => '(bitte auswählen)'
                            )
                        );
		echo $this->Form->input('citizen_information');
		echo $this->Form->input('participation_in_conflicts');
		echo $this->Form->input('community_service');
		echo $this->Form->input('conflict_of_values');
		echo $this->Form->input('conflict_of_interests');
		echo $this->Form->input('date');
		echo $this->Form->input('URL');
		echo $this->Form->input('status', array(
                    'options' => array(
                        '1 = abgeschlossene Bürgerbeteiligung', 
                        '2 = offen bzw. laufend Bürgerbeteiligung'
                    ),
                    'empty' => '(bitte auswählen)'
                ));
		echo $this->Form->input('bottomup_topdown');
		echo $this->Form->input('regional_relation');
		echo $this->Form->input('sektor');
		echo $this->Form->input('issue_energy');
		echo $this->Form->input('policy');
		echo $this->Form->input('short_description');
		echo $this->Form->input('success', array(
                    'options' => array(
                        '1 = offen',
                        '2 = Nicht Erfolgreich im Sinne der Initiatoren der Beteiligung bzw. der Beteiligungsträger',
                        '3 = Kompromiss' ,
                        '4 = Erfolgreich im Sinne der Initiatoren der Beteiligung bzw. der Beteiligungsträger'
                    ),
                    'empty' => '(bitte auswählen)'
                ));
		echo $this->Form->input('social_innovation_relation');
		echo $this->Form->input('Jahr');
		echo $this->Form->input('PLZ');
		echo $this->Form->input('inhabitants_classified');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('target_of_participation', array(
                  'options' => array('1 = Bezogen auf die Planung von Großprojekten',
                        '1a. = privater Vorhabenträger',
                        '1b. = öffentlicher Infrastrukturprojekte',
                        '2 = Bezogen auf bestehende Großprojekte2a. = privater Vorhabenträger',
                        '2b. = öffentlicher Infrastrukturprojekte',
                        '3 = Haushaltsplanungen'  
                ), 
                    'empty' => '(bitte auswählen)'
                ));
		echo $this->Form->input('target_of_participation_description');
		echo $this->Form->input('relation_energy_change_policy', 
                        array(
                            'options' => array(
                                '1= Beteiligung im Sinne der  Energiewende',
                                '1a= Energieerzeugung',
                                '1 b= Energienutzung',  
                                '2 = Beteiligung nicht im Sinne der Energiewende',
                                '2a= Energieerzeugung',
                                '2 b= Energienutzung'
                            ),
                            'empty' => '(bitte auswählen)'
                        )
                        );
		echo $this->Form->input('regional_scope',
                        array(
                            'options' => array(
                                '1 = Stadtteil bzw. Ortsteil', 
                                '2 = Gemeinde',
                                '3 = Region',
                                '3.a = Angabe, um welche Region es sich handelt (offene Antwortmöglichkeit)',
                                '4 = Land NRW'
                            ),
                            'empty' => '(bitte auswählen)'
                            
                        )
                        );
		echo $this->Form->input('regional_scope_description');
		echo $this->Form->input('publicity_scope',
                        array('options' => array(
                            '1= Lokale mediale Berichterstattung',
                            '2 = Regionale mediale Berichterstattung',
                            '3 = überregionale mediale Berichterstattung'
                            ),
                            'empty' => '(bitte auswählen)'
                        )
                     );
		#echo $this->Form->input('conflict_type');
		echo $this->Form->input('escalation_degree');
		echo $this->Form->input('conflict_aspect_other');
		echo $this->Form->input('stakeholder_id');
		echo $this->Form->input('energypolicylink_description');
		echo $this->Form->input('energysector_description');
		echo $this->Form->input('online_offline', array(
                    'options' => array('online', 'offline'), 'empty' => '(bitte auswählen)'));
		echo $this->Form->input('legal_base', array(
                    'options' => array(
                        '1 = Formelle Beteiligung: Gesetzlich vorgeschriebene Beteiligung',
                        '1a = laut BauGB',
                        '1b = laut ImmSchG',
                        '1c = aufgrund Partizipationssatzung',
                        '1d = Bürgerantrag',
                        '1e = infolge Bürgerbegehren',
                        '1e = sonstige gesetzl. Bet.',
                        '2 = Informelle Beteiligung: nicht gesetzlich vorgeschriebene, freiwillige Beteiligung'
                    ),
                    'empty' => '(bitte auswählen)'
                ));
                echo $this->Form->input('ladder_participation', array(
                    'options'=>array('1 = Informieren', 
                    '2 = Anhören (formelle B.), Konsultation (informelle B.)',
                    '3 = Einvernehmen/Benehmen (formelle B.), Mitgestaltung (informelle B.)',
                    '4 = Entscheiden (formelle B.), Kooperation (informelle B.)'
                            ),
                        'empty' => '(bitte auswählen)'
                        )
                        );
		echo $this->Form->input('EnergySector');
		echo $this->Form->input('Energypolicylink');
		echo $this->Form->input('Municipality');
		echo $this->Form->input('Processcomponent');
		echo $this->Form->input('Review');
		echo $this->Form->input('Stakeholder');
                echo $this->Form->input('Conflicttype');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Realisations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stakeholders'), array('controller' => 'stakeholders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stakeholder'), array('controller' => 'stakeholders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Energy Sectors'), array('controller' => 'energy_sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Energy Sector'), array('controller' => 'energy_sectors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Energypolicylinks'), array('controller' => 'energypolicylinks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Energypolicylink'), array('controller' => 'energypolicylinks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Processcomponents'), array('controller' => 'processcomponents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Processcomponent'), array('controller' => 'processcomponents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
