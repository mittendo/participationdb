<body>
<div id="center_column">
<div class="realisations form">
<?php echo $this->Form->create('Realisation', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Realisation'); ?></legend>
	<?php
        echo $this->Form->input('land');
        echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
        echo $this->Form->input('Jahr');
        echo $this->Form->input('main_municipality');
		echo $this->Form->input('PLZ');
        echo $this->Form->input('inhabitants_classified',
               array(
                        'options' => array(
                            '1 = 1 bis 2.000 EWZ', 
                            '2 = 2.001 bis 5.000 EWZ',
                            '3 = 5.001 bis 20.000 EWZ',
                            '4 = 20.001 bis 100.000 EWZ',
                            '5 = 100.001 bis 500.000 EWZ',
                            '6 = > als 500.000'
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
                        'empty' => '(bitte auswählen)'                       )
                );
		echo $this->Form->input('regional_scope_description');
		echo $this->Form->input('name');
        echo $this->Form->input('relation_energy_change_policy', 
                    array(
                    'options' => array(
                        '1 = Beteiligung im Sinne der Energiewende',
                        
                        '1a = Energieerzeugung',
                        '1b = Energienutzung',  
                        '2 = Beteiligung nicht im Sinne der Energiewende',
                        '2a = Energieerzeugung',
                        '2b = Energienutzung'        
                        ),
                    'empty' => '(bitte auswählen)'
                    )
        );
        echo $this->Form->input('Energypolicylink',
                array(
                    'options' => array(
                        '1 = Biomasse',
                        '2 = Stromnetze/ Trassenausbau 3 = Windenergie',
                        '4 = Speicher/ Pumpspeicherkra werke',
                        '5 = CCS-Anlagen',
                        '6 = Straßen- und Schienentrassen',
                        '7 = Konven onelle Kra werke 7a = Kohlekra werke',
                        '7b = Ölkraftwerke',
                        '7c = Gaskraftwerke',
                        '7d= Kernkraftwerke',
                        '8 =  Tiefe Geothermie',
                        '8a = Fracking',
                        '9 = oberflächliche Geothermie', 
                        '10 = Solarenergie',
                        '11 = Wasserenergie',
                        '12 = Wald/Baumbestand'        
                        ),
                    'empty' => '(bitte auswählen)'
                    )
        );
        echo $this->Form->input('energypolicylink_description');
        echo $this->Form->input('EnergySector',
                array(
                    'options' => array(
                        '1 = Industrie',
                        '2 = Gewerbe, Handel',
                        '3 = Dienstleistungen',  
                        '4 = Verkehr / Mobilität',
                        '5 = Wohnen',
                        '6 = Ernährung',
                        '7 = Bekleidung',
                        '8 = Tourismus',
                        '9 = Energieeffizienz',
                        '10 = Gebäudesanierung',
                        ),
                    'empty' => '(bitte auswählen)'
                    )
        );
        echo $this->Form->input('energysector_description');
        echo $this->Form->input('target_of_participation', 
                array(
                'options' => array(
                    '1 = bezogen auf die Planung von Großprojekten',
                    '1a = privater Vorhabenträger',
                    '1b = öffentlicher Infrastrukturprojekte',
                    '2 = bezogen auf bestehende Großprojekte',
                    '2a = privater Vorhabenträger',
                    '2b = öffentlicher Infrastrukturprojekte',
                    '3 = Haushaltsplanungen',
                    '4 = Energiewirtschaft allgemein',
                    '4a = Energiepreise, Strompreise',
                    '4b = Netzausbau',
                    '4c = Energiesicherheit',
                    '4d = Energieverbrauch, -bedarf',
                    '4e = Netzanschluss',
                    '4f = Oligopol/Eigentumsrechte'
                    ),
            'empty' => '(bitte auswählen)'
        ));
        echo $this->Form->input('target_of_participation_description');
        echo $this->Form->input('short_description');
		echo $this->Form->input('initiating_actor',
                        array(
                            'options' => array(
                                '1 = Einzelpersonen', 
                                '2 = Bürgerinitiativen, Vereine',
                                '3 = Verbände',
                                '4 = Politik',
                                '4.1 = Kommunale Akteure', 
                                '4.1a = politischen Parteien',
                                '4.1b OB / LR',
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
                                '7 = sonstige'
                            ),
                            'empty' => '(bitte auswählen)' 
                            )
        );
        echo $this->Form->input('bottomup_topdown',
                        array(
                            'options' => array(
                                '1= top-down', 
                                '2 = bottom-up'
                                ),
                            'empty' => '(bitte auswählen)'
                        ));
        echo $this->Form->input('Stakeholder',
                         array(
                            'options' => array(
                                '1 = Einzelpersonen',
                                '2 = Bürgerinitiativen, Vereine', 
                                '2a = neu gegründete',
                                '2b = bestehende',
                                '3 = Verbände',
                                '3a = Wirtschaftsverbände',
                                '3b = Verbraucher- und Umweltschutzverbände',
                                '3c = Sozial- und Wohlfahrtsverbände',
                                '3d = Kulturverbände',
                                '3e = sonstige',
                                '4 = Politik',
                                '4.1 = Kommunale Akteure', 
                                '4.1a = politischen Parteien',
                                '4.1b = OB / LR',
                                '4.1c = Kommunalvertretungen:
                                Kreisrat, Rat, Stadtrat 4.1d = Landscha s- und / oder Kommunalverbände',
                                '4.2 = Landespolitische Akteure', 
                                '4.3 = Bundespoli sche Akteure', 
                                '4.4 = EU-Akteure',
                                '5 = Verwaltung',
                                '6 =Wirtschaft', 
                                '6a = Unternehmen der Energiewende',
                                '6b = Konventionelle Energieversorger',
                                '7 =sonstige'
                            ),
                        'empty' => '(bitte auswählen)'
        ));
        echo $this->Form->input('legal_base', array(
            'options' => array(
                '1 = formelle Beteiligung: Gesetzlich vorgeschriebene Beteiligung',
                '1a = Unterrichtung der Einwohnerinnen und Einwohner (Amtsblätter, das Internet, die Medien oder Bürgerbriefe)',
                '1b = Bürgerversammlung',
                '1c = Einrichtung von Kommissionen für sachkundige Einwohner, Beiräte',
                '1d = Öffentlichkeitsbeteiligung bei der Bauleitplanung, Planfeststellungsverfahren, Raumordnungsverfahren, Umweltverträglichkeitsprüfung',
                '1e = Bürgerantrag',
                '1f = Bürgerbegehren',
                '2 = informelle Beteiligung: nicht gesetzlich vorgeschriebene, freiwillige Beteiligung',
                '2a = Bürgergutachten & Planungszelle, Bürgerhaushalt',
                '2b = Perspektven-, Planungs-, Zukunftswerkstatt und -konferenz',
                '2c = Mediation',
                '2d = Open Space',
                '3 = finanzielle Bürgerbeteiligung'
                ),
                'empty' => '(bitte auswählen)'
            )
        );       
        echo $this->Form->input('Processcomponent',
            array(
             'options' => array(
                 '1 = Bürgerbefragungen (Meinungsumfragen, Expertengespräche, Gruppendiskussionen)',
                 '2 = Bürgerinforma on (Presse, Berichte, Bürgerbüro)',
                 '3 = Verfahren bei denen ein Meinungsaustausch stattindet (Bürgerstammtsch, -forum, Leserbriefe)',
                 '4 = Verfahren bei denen Kooperation & Konsensbildung im Vordergrund stehen (Bürgergutachten & Planungszelle, Bürgerhaushalt, Perspektiven-, Planungs-, Zukunftswerkstatt  und -konferenz, Mediaton, Open Space, Runder Tisch)'
                 ),
            'empty' => '(bitte auswählen)'
            )
        );
        echo $this->Form->input('invitation', 
            array(
             'options' => array(
                 '1 = Teilnahme direkt Betroffener', 
                 '2 = Auswahl der Teilnahme (Einladungsprozess per Zufallsauswahl, direkte Ansprache, quotierte Auswahl, anhand soziodemographischer Merkmale)',
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
		echo $this->Form->input('online_offline', array(
                    'options' => array('offline', 'online'), 'empty' => '(bitte auswählen)'));
        echo $this->Form->input('ladder_participation', array(
                    'options'=>array('1 = Informieren', 
                    '2 = anhören (formelle B.), Konsultation (informelle B.)',
                    '3 = einvernehmen/benehmen (formelle B.), Mitgestaltung (informelle B.)',
                    '4 = entscheiden (formelle B.), Kooperation (informelle B.)'
                    ),
                'empty' => '(bitte auswählen)'
                )
            );
        echo $this->Form->input('publicity_scope',
                    array('options' => array(
                        '1= lokale mediale Berichterstattung',
                        '2 = regionale mediale Berichterstattung',
                        '3 = überregionale mediale Berichterstattung'
                        ),
                    'empty' => '(bitte auswählen)'
                )
             );
        echo $this->Form->input('participation_in_conflicts',
                    array('options' => array(
                        '1 = konfliktbehaftete Beteiligung',
                        '2 = nicht konfliktbehaftete Beteiligung'
                        ),
                    'empty' => '(bitte auswählen)'
            )
        );
        echo $this->Form->input('conflict_type',
                    array('options' => array(
                        '1 = ökologische Belange (Natur- und Artenschutzfragen, Klimaschutz)',
                        '2 = Landschaft , Heimat',
                        '3 = Gesundheit (gesundheitliche Beeinträch gungen, Belästgungen)',
                        '4 = Verlust von Lebensqualität',
                        '5 = Ängste /Sorgen/ Gefahren- und Risikokapital (z.B. Atomkraft )',
                        '6 = Wirtschaftliche Entwicklung',
                        '6a = Immobilienwertverlust, Immobilienpreisentwicklung',
                        '6b = Kostenzunahme',
                        '6c = Arbeitsplätze',
                        '7 = Konflikt um Nicht-Wissen / kontroverse wissenschaftliche Meinungen (z. B. gesundheitliche Wirkung elektrischer oder magnetischer Felder)',
                        '8 = politische (z. B. parteipolitische Konflikte und / oder soziale Konflikte)',
                        '9 = politische Ereignisse'
                        ),
                    'empty' => '(bitte auswählen)'
            )        
        );
        echo $this->Form->input('conflict_aspect_other');
        echo $this->Form->input('escalation_degree', array(
                'options' => array(
                    '1. schwach',
                    '2. mittel',
                    '3. stark'
                ),
            'empty' => '(bitte auswählen)'
        ));
    	echo $this->Form->input('status', array(
            'options' => array(
                '1 = abgeschlossene Bürgerbeteiligung', 
                '2 = offene bzw. laufende Bürgerbeteiligung'
                ),
            'empty' => '(bitte auswählen)'
        ));
		echo $this->Form->input('success', 
                array(
                    'options' => array(
                        '1 = offen',
                        '2 = nicht Erfolgreich im Sinne der Initiatoren der Beteiligung bzw. der Beteiligungsträger',
                        '3 = Kompromiss' ,
                        '4 = Erfolgreich im Sinne der Initiatoren der Beteiligung bzw. der Beteiligungsträger'
                    ),
                    'empty' => '(bitte auswählen)'
                ));                               
                                
        echo $this->Form->input('outcome',
            array(
                'options' => array(
                    ),
                'empty' => '(bitte auswählen)'
            )
        );
		echo $this->Form->input('social_innovation_relation');
        echo $this->Form->input('metapher',
            array(
                'options' => array(
                    '1 = nein ',
                    '2 = ja'
                    )
            )
        );
        echo $this->Form->input('metapher_description');
        echo $this->Form->input('URL');
        //echo $this->Form->input('file', array('type'=> 'file'))
        
		echo $this->Form->input('demand_of_participation');
		echo $this->Form->input('supplier_of_participation');
		echo $this->Form->input('comment_on_initiating_process');
		echo $this->Form->input('contingency_of_decision');
		echo $this->Form->input('echt');
		echo $this->Form->input('unecht');
		echo $this->Form->input('description_of_process');
		echo $this->Form->input('citizen_information');
		echo $this->Form->input('community_service');
		echo $this->Form->input('conflict_of_values');
		echo $this->Form->input('conflict_of_interests');
		echo $this->Form->input('date');
		echo $this->Form->input('regional_relation');
		echo $this->Form->input('sektor');
		#echo $this->Form->input('stakeholder_id');
		echo $this->Form->input('Municipality');
		echo $this->Form->input('Review');
        echo $this->Form->input('Conflicttype');
        echo $this->Form->input('miscellaneous')
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
    </div>
<div id="right_column">
    <div id='sub_navigation'>
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
    </div>
</div>
