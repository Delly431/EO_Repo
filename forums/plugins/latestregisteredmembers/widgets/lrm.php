<?php
/**
 * @brief		lrm Widget
 * @author		<a href='http://www.invisionpower.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) 2001 - SVN_YYYY Invision Power Services, Inc.
 * @license		http://www.invisionpower.com/legal/standards/
 * @package		IPS Social Suite
 * @subpackage	lrm
 * @since		08 Mar 2015
 * @version		SVN_VERSION_NUMBER
 */

namespace IPS\plugins\latestregisteredmembers\widgets;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * lrm Widget
 */
class _lrm extends \IPS\Widget\StaticCache
{
	/**
	 * @brief	Widget Key
	 */
	public $key = 'lrm';
	
	/**
	 * @brief	App
	 */
	public $app = '';
		
	/**
	 * @brief	Plugin
	 */
	public $plugin = '7';
	
	/**
	 * Initialise this widget
	 *
	 * @return void
	 */ 
	public function init()
	{
		//parent::init();
		$this->template( array( \IPS\Theme::i()->getTemplate( 'plugins', 'core', 'global' ), $this->key ) );
		// Use this to perform any set up and to assign a template that is not in the following format:
		// $this->template( array( \IPS\Theme::i()->getTemplate( 'widgets', $this->app, 'front' ), $this->key ) );
	}
	
	/**
	 * Specify widget configuration
	 *
	 * @param	null|\IPS\Helpers\Form	$form	Form object
	 * @return	null|\IPS\Helpers\Form
	 */
	public function configuration( &$form=null )
	{
 		if ( $form === null )
		{
	 		$form = new \IPS\Helpers\Form;
 		}

		$form->add( new \IPS\Helpers\Form\YesNo( 'lrm_formatname', $this->configuration['lrm_formatname'] ) );
 		$form->add( new \IPS\Helpers\Form\Number( 'lrm_nr', isset( $this->configuration['lrm_nr'] ) ? $this->configuration['lrm_nr'] : 5, TRUE ) );
		$form->add( new \IPS\Helpers\Form\Select( 'lrm_visibleto', $this->configuration['lrm_visibleto'] ? $this->configuration['lrm_visibleto'] : '*', FALSE, array( 'options' => \IPS\Member\Group::groups(), 'parse' => 'normal', 'multiple' => true, 'unlimited' => '*', 'unlimitedLang' => 'all_user_groups' ), NULL, NULL, NULL, 'lrm_visibleto' ) );
		
		return $form;
 	} 
 	
 	 /**
 	 * Ran before saving widget configuration
 	 *
 	 * @param	array	$values	Values from form
 	 * @return	array
 	 */
 	public function preConfig( $values )
 	{
 		return $values;
 	}

	/**
	 * Render a widget
	 *
	 * @return	string
	 */
	public function render()
	{
		if ( isset( $this->configuration['lrm_visibleto'] ) and is_array( $this->configuration['lrm_visibleto'] ) )
		{
			if( !\IPS\Member::loggedIn()->inGroup( $this->configuration['lrm_visibleto'] ) )
			{
				return '';
			}
		}

		$users 	= array();
		$nr		= $this->configuration['lrm_nr'];

		foreach( \IPS\Db::i()->select( '*', 'core_members', NULL, 'member_id DESC', array( 0, $nr ) ) as $member )
		{
			try
			{
				$users[] = \IPS\Member::constructFromData( $member );
			}
			catch( \Exception $ex ) { }
		}

		$format = $this->configuration['lrm_formatname'] ? 1 : 0;

		if ( count( $users ) )
		{
			return $this->output( $users, $format );
		}
		else
		{
			return '';
		}
	}
}