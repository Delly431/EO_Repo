//<?php

$form->addHeader( 'general_settings' );
$form->add( new \IPS\Helpers\Form\Translatable( 'block_donateWidgetTitle', NULL, FALSE, array( 'app' => 'core', 'key' => 'block_donateWidgetTitle_value' ), NULL, NULL, NULL, 'block_donateWidgetTitle' ) );
$form->add( new \IPS\Helpers\Form\YesNo( 'dsb_sandbox', \IPS\Settings::i()->dsb_sandbox ) );
$form->add( new \IPS\Helpers\Form\Email( 'dsb_address', \IPS\Settings::i()->dsb_address ) );
$form->add( new \IPS\Helpers\Form\Translatable( 'dsb_name', NULL, FALSE, array( 'app' => 'core', 'key' => 'dsb_name_value' ), NULL, NULL, NULL, 'dsb_name' ) );
$form->add( new \IPS\Helpers\Form\Select( 'dsb_block_perms', \IPS\Settings::i()->dsb_block_perms ? explode( ",", \IPS\Settings::i()->dsb_block_perms ) : 0, FALSE, array( 'options' => \IPS\Member\Group::groups(), 'parse' => 'normal', 'multiple' => TRUE, 'unlimited' => 0, 'unlimitedLang' => 'dsb_block_perms_zeroVal' ), NULL, NULL, NULL, 'dsb_block_perms' ) );
$form->add( new \IPS\Helpers\Form\Stack( 'dsb_default_currency', \IPS\Settings::i()->dsb_default_currency ? explode( ',', \IPS\Settings::i()->dsb_default_currency ) : array(), FALSE, array(), NULL, NULL, NULL, 'dsb_default_currency' ) );
$form->add( new \IPS\Helpers\Form\Stack( 'dsb_amounts', \IPS\Settings::i()->dsb_amounts ? explode( ',', \IPS\Settings::i()->dsb_amounts ) : array(), FALSE, array(), NULL, NULL, NULL, 'dsb_amounts' ) );
$form->add( new \IPS\Helpers\Form\Translatable( 'dsb_general_note', NULL, FALSE, array( 'app' => 'core', 'key' => 'dsb_general_note_value', 'textArea' => TRUE ), NULL, NULL, NULL, 'dsb_general_note' ) );

$form->addHeader( 'status_bar' );
$form->add( new \IPS\Helpers\Form\YesNo( 'dsb_status_bar', \IPS\Settings::i()->dsb_status_bar, FALSE, array( 'togglesOn' => array( 'dsb_status_dimensions', 'dsb_donation_amount', 'dsb_goal_amount' ) ) ) );
$form->add( new \IPS\Helpers\Form\Number( 'dsb_donation_amount', \IPS\Settings::i()->dsb_donation_amount, FALSE, array( 'deciamls' => 2 ), NULL, NULL, NULL, 'dsb_donation_amount' ) );
$form->add( new \IPS\Helpers\Form\Number( 'dsb_goal_amount', \IPS\Settings::i()->dsb_goal_amount, FALSE, array( 'deciamls' => 2 ), NULL, NULL, NULL, 'dsb_goal_amount' ) );

$form->addHeader( 'template_override' );
$form->add( new \IPS\Helpers\Form\Codemirror( 'dsb_paypal_code', \IPS\Settings::i()->dsb_paypal_code, FALSE, array(), NULL, NULL, NULL, 'dsb_paypal_code' ) );

if ( $values = $form->values() )
{
    /* Save translatable fields */
	foreach ( array( 'dsb_name' => 'dsb_name_value', 'dsb_general_note' => 'dsb_general_note_value', 'block_donateWidgetTitle' => 'block_donateWidgetTitle_value'  ) as $k => $v )
	{
		\IPS\Lang::saveCustom( 'core', $v, $values[ $k ] );
		unset( $values[ $k ] );
	}    
    
    if( count( $values['dsb_default_currency'] ) )
    {
        $values['dsb_default_currency'] = implode( ',', $values['dsb_default_currency'] );
    }
    if( count( $values['dsb_amounts'] ) )
    {
        $values['dsb_amounts'] = implode( ',', $values['dsb_amounts'] );
    }  
    if( count( $values['dsb_block_perms'] ) AND is_array( $values['dsb_block_perms'] ) )
    {
        $values['dsb_block_perms'] = implode( ',', $values['dsb_block_perms'] );
    }        

	$form->saveAsSettings( $values );
	return TRUE;
}

return $form;