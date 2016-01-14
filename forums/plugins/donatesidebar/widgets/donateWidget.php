<?php
/**
 * @package		Donate Sidebar
 * @author		<a href='http://www.devfuse.com'>DevFuse</a>
 * @copyright	(c) 2015 DevFuse
 * @version		2.1.0
 */

namespace IPS\plugins\donatesidebar\widgets;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * donateWidget Widget
 */
class _donateWidget extends \IPS\Widget
{
	/**
	 * @brief	Widget Key
	 */
	public $key = 'donateWidget';
	
	/**
	 * @brief	App
	 */
	public $app = 'core';
		
	/**
	 * @brief	Plugin
	 */
	public $plugin = '3';
	
	/**
	 * Initialise this widget
	 *
	 * @return void
	 */ 
	public function init()
	{
	    //parent::init();
	    $this->template( array( \IPS\Theme::i()->getTemplate( 'plugins', 'core', 'global' ), $this->key ) );
	}
	
	/**
	 * Specify widget configuration
	 *
	 * @param	null|\IPS\Helpers\Form	$form	Form object
	 * @return	null|\IPS\Helpers\Form
	 */
	public function configuration( &$form=null )
	{
 		return null;
 	} 

	/**
	 * Render a widget
	 *
	 * @return	string
	 */
	public function render()
	{        
	    /* We can't start without it */
	    if( !\IPS\Settings::i()->dsb_address )
        {
            return '';
        }
        
        /* Skip excluded groups */
        if( \IPS\Member::loggedIn()->inGroup( explode( ',', \IPS\Settings::i()->dsb_block_perms ) ) )
        {
            return '';   
        }        
       
  		/* Donate form */
		$form = new \IPS\Helpers\Form( 'form', 'donate_now', \IPS\Http\Url::external( \IPS\Settings::i()->dsb_sandbox ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr' ) );
		$form->class = 'ipsForm_noLabels ipsForm_fullWidth ipsPad';
        
        /* Setup paypal settings */
        $form->hiddenValues['cmd'] = '_donations';
        $form->hiddenValues['business'] = \IPS\Settings::i()->dsb_address;
        $form->hiddenValues['item_name'] = \IPS\Member::loggedIn()->language()->addToStack('dsb_name_value'); 
        $form->hiddenValues['item_number'] = \IPS\Member::loggedIn()->member_id;
        $form->hiddenValues['quantity'] = '1';
        $form->hiddenValues['no_shipping'] = '1';
        $form->hiddenValues['return'] = \IPS\Http\Url::internal('', 'front')->setQueryString( array( '_donated' => 1 ) );
        $form->hiddenValues['cancel_return'] = \IPS\Http\Url::internal('', 'front');

        /* Amount select or enter */
        if( \IPS\Settings::i()->dsb_amounts )
        {
            $form->add( new \IPS\Helpers\Form\Select( 'amount', NULL, FALSE, array( 'options' => array_combine( explode( ',', \IPS\Settings::i()->dsb_amounts ), explode( ',', \IPS\Settings::i()->dsb_amounts ) ) ) ) );        
        }
        else
        {
            $form->add( new \IPS\Helpers\Form\Text( 'amount', NULL, FALSE, array( 'placeholder' => \IPS\Member::loggedIn()->language()->addToStack('enter_amount') ) ) );  
        }
        
        /* Select currency or default USD */
        if( \IPS\Settings::i()->dsb_default_currency )
        {        
            $form->add( new \IPS\Helpers\Form\Select( 'currency_code', NULL, FALSE, array( 'options' => array_combine( explode( ',', \IPS\Settings::i()->dsb_default_currency ), explode( ',', \IPS\Settings::i()->dsb_default_currency ) ) ) ) );
        }
        else
        {
            $form->hiddenValues['currency_code'] = 'USD';    
        }
		
        /* Display our widget */
		return $this->output( $form );
	}
}