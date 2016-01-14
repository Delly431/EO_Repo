<?php exit; ?>

Thu, 14 Jan 2016 04:50:05 +0000 (Severity: 2)
203.97.99.8 - http://exiledorder.com/forums/
ErrorException
2048: Declaration of IPS\forums\_Topic::getItemsWithPermission() should be compatible with IPS\Content\_Item::getItemsWithPermission($where = Array, $order = NULL, $limit = 10, $permissionKey = 'read', $includeHiddenItems = NULL, $queryFlags = 0, IPS\Member $member = NULL, $joinContainer = false, $joinComments = false, $joinReviews = false, $countOnly = false, $joins = NULL, $skipPermission = false, $joinTags = true, $joinAuthor = true, $joinLastCommenter = true, $showMovedLinks = false)
#0 /home/eosquad/public_html/forums/applications/forums/sources/Topic/Topic.php(25): IPS\IPS::errorHandler(2048, 'Declaration of ...', '/home/eosquad/p...', 25, Array)
#1 /home/eosquad/public_html/forums/init.php(276): require_once('/home/eosquad/p...')
#2 [internal function]: IPS\IPS::autoloader('IPS\\forums\\Topi...')
#3 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(605): spl_autoload_call('IPS\\forums\\Topi...')
#4 [internal function]: IPS\Theme\class_forums_front_index->forumRow(Object(IPS\forums\Forum))
#5 /home/eosquad/public_html/forums/system/Theme/SandboxedTemplate.php(57): call_user_func_array(Array, Array)
#6 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(1370): IPS\Theme\_SandboxedTemplate->__call('forumRow', Array)
#7 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(1370): IPS\Theme\SandboxedTemplate->forumRow(Object(IPS\forums\Forum))
#8 [internal function]: IPS\Theme\class_forums_front_index->index()
#9 /home/eosquad/public_html/forums/system/Theme/SandboxedTemplate.php(57): call_user_func_array(Array, Array)
#10 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/index.php(70): IPS\Theme\_SandboxedTemplate->__call('index', Array)
#11 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/index.php(70): IPS\Theme\SandboxedTemplate->index()
#12 /home/eosquad/public_html/forums/system/Dispatcher/Controller.php(94): IPS\forums\modules\front\forums\_index->manage()
#13 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/index.php(37): IPS\Dispatcher\_Controller->execute()
#14 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(129): IPS\forums\modules\front\forums\_index->execute()
#15 /home/eosquad/public_html/forums/index.php(13): IPS\_Dispatcher->run()
#16 {main}
------------------------------------------------------------------------
