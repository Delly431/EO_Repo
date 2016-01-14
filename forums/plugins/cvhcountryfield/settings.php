//<?php

$form->add( new \IPS\Helpers\Form\YesNo( 'cvh_flags_field_size', \IPS\Settings::i()->cvh_flags_field_size, FALSE ) );

$form->add( new \IPS\Helpers\Form\YesNo( 'cvh_country_guess_by_ip', \IPS\Settings::i()->cvh_country_guess_by_ip, FALSE ) );

if ( $values = $form->values() )
{
	$form->saveAsSettings();
	return TRUE;
}

return $form;