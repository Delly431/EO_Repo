<?php
/**
 * @brief		Members API
 * @author		<a href='http://www.invisionpower.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) 2001 - 2016 Invision Power Services, Inc.
 * @license		http://www.invisionpower.com/legal/standards/
 * @package		IPS Community Suite
 * @since		3 Dec 2015
 * @version		SVN_VERSION_NUMBER
 */

namespace IPS\core\api;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * @brief	Members API
 */
class _members extends \IPS\Api\Controller
{
	/**
	 * GET /core/members
	 * Get list of members
	 *
	 * @apiparam	string	sortBy	What to sort by. Can be 'joined', 'name' or leave unspecified for ID
	 * @apiparam	string	sortDir	Sort direction. Can be 'asc' or 'desc' - defaults to 'asc'
	 * @apiparam	int		page	Page number
	 * @return		\IPS\Api\PaginatedResponse<IPS\Member>
	 */
	public function GETindex()
	{
		/* Where clause */
		$where = array();
		
		/* Sort */
		$sortBy = ( isset( \IPS\Request::i()->sortBy ) and in_array( \IPS\Request::i()->sortBy, array( 'name', 'joined' ) ) ) ? \IPS\Request::i()->sortBy : 'member_id';
		$sortDir = ( isset( \IPS\Request::i()->sortDir ) and in_array( mb_strtolower( \IPS\Request::i()->sortDir ), array( 'asc', 'desc' ) ) ) ? \IPS\Request::i()->sortDir : 'asc';
		
		/* Return */
		return new \IPS\Api\PaginatedResponse(
			200,
			\IPS\Db::i()->select( '*', 'core_members', $where, "{$sortBy} {$sortDir}", NULL, NULL, NULL, \IPS\Db::SELECT_SQL_CALC_FOUND_ROWS ),
			isset( \IPS\Request::i()->page ) ? \IPS\Request::i()->page : 1,
			'IPS\Member'
		);
	}
	
	/**
	 * GET /core/members/{id}
	 * Get information about a specific member
	 *
	 * @param		int		$id			ID Number
	 * @throws		1C292/2	INVALID_ID	The member ID does not exist
	 * @return		\IPS\Member
	 */
	public function GETitem( $id )
	{
		try
		{
			$member = \IPS\Member::load( $id );
			if ( !$member->member_id )
			{
				throw new \OutOfRangeException;
			}
			
			return new \IPS\Api\Response( 200, $member->apiOutput() );
		}
		catch ( \OutOfRangeException $e )
		{
			throw new \IPS\Api\Exception( 'INVALID_ID', '1C292/2', 404 );
		}
	}
	
	/**
	 * Create or update member
	 *
	 * @param	\IPS\Member	$member	The member
	 * @apiparam	int		group		Group ID number
	 * @throws		1C292/4	USERNAME_EXISTS	The username provided is already in use
	 * @throws		1C292/5	EMAIL_EXISTS	The email address provided is already in use
	 * @throws		1C292/6	INVALID_GROUP	The group ID provided is not valid
	 * @return		\IPS\Member
	 */
	protected function _createOrUpdate( $member )
	{
		if ( isset( \IPS\Request::i()->name ) and \IPS\Request::i()->name != $member->name )
		{
			$existingUsername = \IPS\Member::load( \IPS\Request::i()->name, 'name' );
			if ( !$existingUsername->member_id )
			{
				$member->name = \IPS\Request::i()->name;
			}
			else
			{
				throw new \IPS\Api\Exception( 'USERNAME_EXISTS', '1C292/4', 403 );
			}
		}
		
		if ( isset( \IPS\Request::i()->email ) and \IPS\Request::i()->email != $member->email )
		{
			$existingEmail = \IPS\Member::load( \IPS\Request::i()->email, 'email' );
			if ( !$existingEmail->member_id )
			{
				$member->email = \IPS\Request::i()->email;
			}
			else
			{
				throw new \IPS\Api\Exception( 'EMAIL_EXISTS', '1C292/5', 403 );
			}
		}
		
		if ( isset( \IPS\Request::i()->group ) )
		{
			try
			{
				$group = \IPS\Member\Group::load( \IPS\Request::i()->group );
				$member->member_group_id = $group->g_id;
			}
			catch ( \OutOfRangeException $e )
			{
				throw new \IPS\Api\Exception( 'INVALID_GROUP', '1C292/6', 403 );
			}
		}
		
		if ( isset( \IPS\Request::i()->password ) )
		{
			$member->members_pass_salt = $member->generateSalt();
			$member->members_pass_hash = $member->encryptedPassword( \IPS\Request::i()->password );
		}
		
		$member->save();
		
		return $member;
	}
	
	/**
	 * POST /core/members
	 * Create a member
	 *
	 * @apiparam	string	name		Username
	 * @apiparam	string	email		Email address
	 * @apiparam	string	password	Password
	 * @apiparam	int		group		Group ID number
	 * @throws		1C292/4	USERNAME_EXISTS	The username provided is already in use
	 * @throws		1C292/5	EMAIL_EXISTS	The email address provided is already in use
	 * @throws		1C292/6	INVALID_GROUP	The group ID provided is not valid
	 * @return		\IPS\Member
	 */
	public function POSTindex()
	{
		$member = new \IPS\Member;
		$member->member_group_id = \IPS\Settings::i()->member_group;
		
		$member = $this->_createOrUpdate( $member );			
				
		return new \IPS\Api\Response( 201, $member->apiOutput() );
	}
	
	/**
	 * POST /core/members/{id}
	 * Edit a member
	 *
	 * @apiparam	string	name		Username
	 * @apiparam	string	email		Email address
	 * @apiparam	string	password	Password
	 * @param		int		$id			ID Number
	 * @throws		2C292/7	INVALID_ID	The member ID does not exist
	 * @throws		1C292/4	USERNAME_EXISTS	The username provided is already in use
	 * @throws		1C292/5	EMAIL_EXISTS	The email address provided is already in use
	 * @return		\IPS\Member
	 */
	public function POSTitem( $id )
	{
		try
		{
			$member = \IPS\Member::load( $id );
			if ( !$member->member_id )
			{
				throw new \OutOfRangeException;
			}
			
			$member = $this->_createOrUpdate( $member );
			
			return new \IPS\Api\Response( 200, $member->apiOutput() );
		}
		catch ( \OutOfRangeException $e )
		{
			throw new \IPS\Api\Exception( 'INVALID_ID', '2C292/7', 404 );
		}
	}
	
	/**
	 * DELETE /core/members/{id}
	 * Deletes a member
	 *
	 * @param		int		$id			ID Number
	 * @throws		1C292/3	INVALID_ID	The member ID does not exist
	 * @return		void
	 */
	public function DELETEitem( $id )
	{
		try
		{
			$member = \IPS\Member::load( $id );
			if ( !$member->member_id )
			{
				throw new \OutOfRangeException;
			}
			
			$member->delete();
			
			return new \IPS\Api\Response( 200, NULL );
		}
		catch ( \OutOfRangeException $e )
		{
			throw new \IPS\Api\Exception( 'INVALID_ID', '1C292/2', 404 );
		}
	}
}