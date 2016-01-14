<?php
/**
 * @brief		Runs tasks (web URL)
 * @author		<a href='http://www.invisionpower.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) 2001 - 2016 Invision Power Services, Inc.
 * @license		http://www.invisionpower.com/legal/standards/
 * @package		IPS Community Suite
 * @since		17 Dec 2015
 * @version		SVN_VERSION_NUMBER
 */

/* Init IPS Community Suite */
require_once str_replace( 'applications/core/interface/task/web.php', 'init.php', str_replace( '\\', '/', __FILE__ ) );

/* Execute */
try
{
	if( \IPS\Request::i()->key != \IPS\Settings::i()->task_cron_key )
	{
		throw new \OutOfRangeException( "Invalid Key" );
	}

	if( \IPS\Settings::i()->task_use_cron != 'web' )
	{
		throw new \OutOfRangeException( "Invalid Task Method" );
	}

	$task = \IPS\Task::queued();

	if ( $task )
	{
		$task->runAndLog();
	}

	@header( "200 OK" );
	print "Task Ran";
}
catch ( \Exception $e )
{
	@header( "500 Internal Server Error" );
	echo "Exception:\n";
	print $e->getMessage();
	exit;
}

/* Exit */
exit;