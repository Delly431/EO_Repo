<?php exit; ?>

Thu, 14 Jan 2016 04:50:01 +0000 (Severity: 2)
203.97.99.8 - http://exiledorder.com/forums/index.php?/forum/18-leadership-area/
ErrorException
2048: Declaration of IPS\forums\_Topic::getItemsWithPermission() should be compatible with IPS\Content\_Item::getItemsWithPermission($where = Array, $order = NULL, $limit = 10, $permissionKey = 'read', $includeHiddenItems = NULL, $queryFlags = 0, IPS\Member $member = NULL, $joinContainer = false, $joinComments = false, $joinReviews = false, $countOnly = false, $joins = NULL, $skipPermission = false, $joinTags = true, $joinAuthor = true, $joinLastCommenter = true, $showMovedLinks = false)
#0 /home/eosquad/public_html/forums/applications/forums/sources/Topic/Topic.php(25): IPS\IPS::errorHandler(2048, 'Declaration of ...', '/home/eosquad/p...', 25, Array)
#1 /home/eosquad/public_html/forums/init.php(276): require_once('/home/eosquad/p...')
#2 [internal function]: IPS\IPS::autoloader('IPS\\forums\\Topi...')
#3 /home/eosquad/public_html/forums/system/Helpers/Table/Content.php(134): spl_autoload_call('IPS\\forums\\Topi...')
#4 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/forums.php(80): IPS\Helpers\Table\_Content->__construct('IPS\\forums\\Topi...', Object(IPS\Http\Url), Array, Object(IPS\forums\Forum), NULL, 'view', true)
#5 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/forums.php(39): IPS\forums\modules\front\forums\_forums->_forum(Object(IPS\forums\Forum))
#6 /home/eosquad/public_html/forums/system/Dispatcher/Controller.php(94): IPS\forums\modules\front\forums\_forums->manage()
#7 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(129): IPS\Dispatcher\_Controller->execute()
#8 /home/eosquad/public_html/forums/index.php(13): IPS\_Dispatcher->run()
#9 {main}
------------------------------------------------------------------------
Thu, 14 Jan 2016 04:50:03 +0000 (Severity: 2)
203.97.99.8 - http://exiledorder.com/forums/index.php?/forum/18-leadership-area/
ErrorException
2048: Declaration of IPS\forums\_Topic::getItemsWithPermission() should be compatible with IPS\Content\_Item::getItemsWithPermission($where = Array, $order = NULL, $limit = 10, $permissionKey = 'read', $includeHiddenItems = NULL, $queryFlags = 0, IPS\Member $member = NULL, $joinContainer = false, $joinComments = false, $joinReviews = false, $countOnly = false, $joins = NULL, $skipPermission = false, $joinTags = true, $joinAuthor = true, $joinLastCommenter = true, $showMovedLinks = false)
#0 /home/eosquad/public_html/forums/applications/forums/sources/Topic/Topic.php(25): IPS\IPS::errorHandler(2048, 'Declaration of ...', '/home/eosquad/p...', 25, Array)
#1 /home/eosquad/public_html/forums/init.php(276): require_once('/home/eosquad/p...')
#2 [internal function]: IPS\IPS::autoloader('IPS\\forums\\Topi...')
#3 /home/eosquad/public_html/forums/system/Helpers/Table/Content.php(134): spl_autoload_call('IPS\\forums\\Topi...')
#4 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/forums.php(80): IPS\Helpers\Table\_Content->__construct('IPS\\forums\\Topi...', Object(IPS\Http\Url), Array, Object(IPS\forums\Forum), NULL, 'view', true)
#5 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/forums.php(39): IPS\forums\modules\front\forums\_forums->_forum(Object(IPS\forums\Forum))
#6 /home/eosquad/public_html/forums/system/Dispatcher/Controller.php(94): IPS\forums\modules\front\forums\_forums->manage()
#7 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(129): IPS\Dispatcher\_Controller->execute()
#8 /home/eosquad/public_html/forums/index.php(13): IPS\_Dispatcher->run()
#9 {main}
------------------------------------------------------------------------
Thu, 14 Jan 2016 04:50:44 +0000 (Severity: 2)
203.97.99.8 - http://exiledorder.com/forums/index.php?/profile/10-drills/&wr=eyJhcHAiOiJmb3J1bXMiLCJtb2R1bGUiOiJmb3J1bXMtY29tbWVudCIsImlkXzEiOjksImlkXzIiOjk1fQ%3D%3D&do=hovercard&csrfKey=0ee6d03f8ca9b1056cdbebc2800db973
UnderflowException
0: 
#0 /home/eosquad/public_html/forums/applications/core/tasks/bulkmail.php(35): IPS\Db\_Select->first()
#1 /home/eosquad/public_html/forums/system/Task/Task.php(172): IPS\core\tasks\_bulkmail->execute()
#2 /home/eosquad/public_html/forums/system/Task/Task.php(141): IPS\_Task->run()
#3 /home/eosquad/public_html/forums/system/Dispatcher/Standard.php(304): IPS\_Task->runAndLog()
#4 [internal function]: IPS\Dispatcher\_Standard->__destruct()
#5 {main}
------------------------------------------------------------------------
