//<?php

abstract class hook21 extends _HOOK_CLASS_
{
	/**
	 * @brief	[ActiveRecord] Multiton Store
	 */
	protected static $multitons;
	
	/**
	 * @brief	[CustomField] Title/Description lang prefix
	 */
	protected static $langKey = 'cvh_country_field_cfield';
	
	/**
	 * @brief	[Node] ACP Restrictions
	 * @code
	 	array(
	 		'app'		=> 'core',				// The application key which holds the restrictrions
	 		'module'	=> 'foo',				// The module key which holds the restrictions
	 		'map'		=> array(				// [Optional] The key for each restriction - can alternatively use "prefix"
	 			'add'			=> 'foo_add',
	 			'edit'			=> 'foo_edit',
	 			'permissions'	=> 'foo_perms',
	 			'delete'		=> 'foo_delete'
	 		),
	 		'all'		=> 'foo_manage',		// [Optional] The key to use for any restriction not provided in the map (only needed if not providing all 4)
	 		'prefix'	=> 'foo_',				// [Optional] Rather than specifying each  key in the map, you can specify a prefix, and it will automatically look for restrictions with the key "[prefix]_add/edit/permissions/delete"
	 * @endcode
	 */
	protected static $restrictions = array( );
	
	/**
	 * @brief	[Node] Node Title
	 */
	public static $nodeTitle = 'custom_cvh_country_field';

	/**
	 * @brief	[Node] Title prefix.  If specified, will look for a language key with "{$key}_title" as the key
	 */
	public static $titleLangPrefix = 'cvh_country_field_cfield_';
	
	/**
	 * @brief	[CustomField] Column Map
	 */
	public static $databaseColumnMap = array(
		'not_null'	=> 'not_null',
	);

	/**
	 * @brief	[CustomField] Additional Field Classes
	 */
	public static $additionalFieldTypes = array(
		'CountryFieldCvh'	=> 'sf_type_CountryFieldCvh',

	);
	
	/**
	 * Build Form Helper
	 *
	 * @param	mixed		$value					The value
	 * @param	callback	$customValidationCode	Custom validation code
	 * @return \IPS\Helpers\Form\FormAbstract
	 */
	public function buildHelper( $value=NULL, $customValidationCode=NULL )
	{
		try
		{
			if ( $this->type === 'CountryFieldCvh' )
			{
				return new \IPS\Helpers\Form\CountryFieldCvh( static::$langKey . '_' . $this->id, $value, $this->not_null, array( 'validate' => $this->validate ), NULL, NULL, NULL, static::$langKey . '_' . $this->id );
			}
			
			return parent::buildHelper( $value, $customValidationCode );
		}
		catch ( \RuntimeException $e )
		{
			if ( method_exists( get_parent_class(), __FUNCTION__ ) )
			{
				return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
			}
			else
			{
				throw $e;
			}
		}
	}

	/**
	 * Display Value
	 *
	 * @param	mixed	$value	The value
	 * @return	string
	 */
	public function displayValue( $value=NULL )
	{
		static $valuesArray = array(), $css = '';

		try
		{
			if ( $this->type === 'CountryFieldCvh' )
			{
				if ( !defined('COUNTRY_FIELD_CVH_ASSETS') )
				{
					if ( \IPS\Settings::i()->cvh_flags_field_size )
					{
						$css = ' ipsFlagLarge';
						\IPS\Output::i()->cssFiles = array_merge( \IPS\Output::i()->cssFiles, \IPS\Theme::i()->css( 'countryField_cvh.css', 'core', 'front' ) );
					} else {
						\IPS\Output::i()->cssFiles = array_merge( \IPS\Output::i()->cssFiles, \IPS\Theme::i()->css( 'flags.css', 'core', 'global' ) );
					}
					define( 'COUNTRY_FIELD_CVH_ASSETS', 1 );
				}

				if ( isset( $valuesArray[ $value ] ) )
				{
					$titleValue = $valuesArray[ $value ];
				} else {
					$titleValue = mb_strtoupper( $value );
					$valuesArray[ $value ] = $titleValue;
				}

				if ( \IPS\IN_DEV ) {
					return \IPS\Theme::i()->getTemplate( 'plugins', 'core', 'front' )->countryFieldCvhDisplay( $value, $titleValue, $css );
				} else {
					return \IPS\Theme::i()->getTemplate( 'plugins', 'core', 'global' )->countryFieldCvhDisplay( $value, $titleValue, $css );
				}
			}

			return parent::displayValue( $value );
		}
		catch ( \RuntimeException $e )
		{
			if ( method_exists( get_parent_class(), __FUNCTION__ ) )
			{
				return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
			}
			else
			{
				throw $e;
			}
		}
	}
}

/**
 * @brief		Country Field Cvh class for Form Builder
 */

namespace IPS\Helpers\Form;

/**
 * Address input class for Form Builder
 */
class _CountryFieldCvh extends FormAbstract
{	
	/** 
	 * Get HTML
	 *
	 * @return	string
	 */
	public function html()
	{
		try
		{
			/* If we don't have a value, set their country based on the HTTP headers */
			if ( !$this->value )
			{
				$this->value = '';
	
				if ( \IPS\Settings::i()->cvh_country_guess_by_ip )
				{
					try
					{
						$country = \IPS\GeoLocation::getByIp( \IPS\Request::i()->ipAddress() );
					}
					catch ( \Exception $e ) { }
	
					if ( $country && $country->country )
					{
						$this->value = $country->country;
					}
				}
			}
	
			$this->value = mb_strtoupper( $this->value );
		
			/* Display */
			if ( \IPS\IN_DEV ) {
				return \IPS\Theme::i()->getTemplate( 'plugins', 'core', 'front' )->countryFieldCvh( $this->name, $this->value );
			} else {
				return \IPS\Theme::i()->getTemplate( 'plugins', 'core', 'global' )->countryFieldCvh( $this->name, $this->value );
			}
		}
		catch ( \RuntimeException $e )
		{
			if ( method_exists( get_parent_class(), __FUNCTION__ ) )
			{
				return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
			}
			else
			{
				throw $e;
			}
		}
	}
	
	/**
	 * Get Value
	 *
	 * @return	mixed
	 */
	public function getValue()
	{
		try
		{
			/* Create the object */
			$value = parent::getValue();
			
			/* Work out what parts are filled in */
			$fullyCompleted = TRUE;
			if ( !$value )
			{
				$fullyCompleted = FALSE;
			}
	
			
			/* Validate, return NULL if we have nothing */
			if ( !$fullyCompleted )
			{
				return NULL;
			}
			
			$value = mb_strtolower( $value );
	
			/* Return */
			return $value;
		}
		catch ( \RuntimeException $e )
		{
			if ( method_exists( get_parent_class(), __FUNCTION__ ) )
			{
				return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
			}
			else
			{
				throw $e;
			}
		}
	}
	
	/**
	 * Validate
	 *
	 * @throws	\InvalidArgumentException
	 * @return	TRUE
	 */
	public function validate()
	{
		try
		{
			if( $this->value === NULL and $this->required )
			{
				throw new \InvalidArgumentException('form_required');
			}
			
			return parent::validate();
		}
		catch ( \RuntimeException $e )
		{
			if ( method_exists( get_parent_class(), __FUNCTION__ ) )
			{
				return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
			}
			else
			{
				throw $e;
			}
		}
	}
		
	/**
	 * String Value
	 *
	 * @param	mixed	$value	The value
	 * @return	string
	 */
	public static function stringValue( $value )
	{
		try
		{
			return $value;
		}
		catch ( \RuntimeException $e )
		{
			if ( method_exists( get_parent_class(), __FUNCTION__ ) )
			{
				return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
			}
			else
			{
				throw $e;
			}
		}
	}
}