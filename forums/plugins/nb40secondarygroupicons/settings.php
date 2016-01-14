//<?php

	$form->addTab('nb_sec_gr_icons_tab_general');
	
	$form->add( new \IPS\Helpers\Form\YesNo(
		'nb_sec_gr_icons_reorder_grs_on',
		\IPS\Settings::i()->nb_sec_gr_icons_reorder_grs_on, 
		FALSE, 
		array('togglesOn' => array( 'nb_sec_gr_icons_reorder_grs_grs', 'nb_sec_gr_icons_reorder_grs_prim' ))
	) );
	
	$form->add( new \IPS\Helpers\Form\YesNo(
		'nb_sec_gr_icons_reorder_grs_prim',
		\IPS\Settings::i()->nb_sec_gr_icons_reorder_grs_prim,
		FALSE,
		array(), 
		NULL, 
		NULL, 
		NULL, 
		'nb_sec_gr_icons_reorder_grs_prim'
	) );

	$form->add( new \IPS\Helpers\Form\Stack(
		'nb_sec_gr_icons_reorder_grs_grs', 
		\IPS\Settings::i()->nb_sec_gr_icons_reorder_grs_grs ? explode( ',', \IPS\Settings::i()->nb_sec_gr_icons_reorder_grs_grs ) : array(), 
		false, 
		array( 'stackFieldType' => 'Select', 'options' => \IPS\Member\Group::groups(), 'parse' => 'normal' ),
		NULL, 
		NULL, 
		NULL, 
		'nb_sec_gr_icons_reorder_grs_grs'
	) );
	
	$form->addTab('nb_sec_gr_icons_tab_post');
	
	$form->add( new \IPS\Helpers\Form\YesNo( 'nb_sec_gr_icons_post_on', \IPS\Settings::i()->nb_sec_gr_icons_post_on ) );

	$form->add( new \IPS\Helpers\Form\Node(
		'nb_sec_gr_icons_post_forums',
		\IPS\Settings::i()->nb_sec_gr_icons_post_forums != 0 ? explode( ',', \IPS\Settings::i()->nb_sec_gr_icons_post_forums ) : 0,
		false,
		array(
			'class'		=> 'IPS\forums\Forum',
			'zeroVal'   => 'nb_sec_gr_icons_post_all_forums',
			'multiple'	=> true
		)
	) );

	$form->add( new \IPS\Helpers\Form\Select( 	'nb_sec_gr_icons_post_groups',
												\IPS\Settings::i()->nb_sec_gr_icons_post_groups != 'all' ? explode( ',', \IPS\Settings::i()->nb_sec_gr_icons_post_groups ) : 'all',
												FALSE,
												array( 	'options' => array_combine( array_keys( \IPS\Member\Group::groups() ), array_map( function( $_group ) { return (string) $_group; }, \IPS\Member\Group::groups() ) ),
														'multiple' => true,
														'unlimited' => 'all',
														'unlimitedLang' => 'all_groups'
												)
											)
	);
	
	$form->addTab('nb_sec_gr_icons_tab_profile');
	
	$form->add( new \IPS\Helpers\Form\YesNo( 'nb_sec_gr_icons_profile_on', \IPS\Settings::i()->nb_sec_gr_icons_profile_on ) );

	$form->add( new \IPS\Helpers\Form\Select( 	'nb_sec_gr_icons_profile_groups',
												\IPS\Settings::i()->nb_sec_gr_icons_profile_groups != 'all' ? explode( ',', \IPS\Settings::i()->nb_sec_gr_icons_profile_groups ) : 'all',
												FALSE,
												array( 	'options' => array_combine( array_keys( \IPS\Member\Group::groups() ), array_map( function( $_group ) { return (string) $_group; }, \IPS\Member\Group::groups() ) ),
														'multiple' => true,
														'unlimited' => 'all',
														'unlimitedLang' => 'all_groups'
												)
											)
	);
	
	if ($values = $form->values())
	{
		$form->saveAsSettings();
		return TRUE;
	}

	return $form;