<?php exit; ?>

Tue, 05 Jan 2016 00:47:17 +0000 (Severity: 2)
74.68.48.230 - http://exiledorder.com/forums/?app=core&module=system&controller=ajax&do=instantNotifications&csrfKey=5da145eaeefa3a26ef26cd9b1d38d59c&notifications=0&messages=0
UnderflowException
0: 
#0 /home/eosquad/public_html/forums/applications/core/tasks/bulkmail.php(35): IPS\Db\_Select->first()
#1 /home/eosquad/public_html/forums/system/Task/Task.php(172): IPS\core\tasks\_bulkmail->execute()
#2 /home/eosquad/public_html/forums/system/Task/Task.php(141): IPS\_Task->run()
#3 /home/eosquad/public_html/forums/system/Dispatcher/Standard.php(304): IPS\_Task->runAndLog()
#4 [internal function]: IPS\Dispatcher\_Standard->__destruct()
#5 {main}
------------------------------------------------------------------------
Tue, 05 Jan 2016 01:46:35 +0000 (Severity: 2)
74.68.48.230 - http://exiledorder.com/forums/?app=core&module=system&controller=ajax&do=instantNotifications&csrfKey=5da145eaeefa3a26ef26cd9b1d38d59c&notifications=0&messages=0
IPS\Db\Exception
2002: Can't connect to local MySQL server through socket '/var/lib/mysql/mysql.sock' (2)
#0 /home/eosquad/public_html/forums/system/Session/Front.php(88): IPS\_Db::i()
#1 [internal function]: IPS\Session\_Front->read('554a422e28aedf3...')
#2 /home/eosquad/public_html/forums/system/Session/Session.php(91): session_start()
#3 /home/eosquad/public_html/forums/system/Member/Member.php(129): IPS\_Session::i()
#4 /home/eosquad/public_html/forums/system/Dispatcher/Standard.php(135): IPS\_Member::loggedIn()
#5 /home/eosquad/public_html/forums/system/Dispatcher/Front.php(161): IPS\Dispatcher\_Standard->init()
#6 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(86): IPS\Dispatcher\_Front->init()
#7 /home/eosquad/public_html/forums/index.php(13): IPS\_Dispatcher::i()
#8 {main}
------------------------------------------------------------------------
Tue, 05 Jan 2016 12:38:28 +0000 (Severity: 2)
203.97.99.8 - http://exiledorder.com/forums/index.php?/announcement/1-meeting-192016-community-wide/
IPS\Db\Exception
2002: Can't connect to local MySQL server through socket '/var/lib/mysql/mysql.sock' (2)
#0 /home/eosquad/public_html/forums/system/Session/Front.php(88): IPS\_Db::i()
#1 [internal function]: IPS\Session\_Front->read('f37afda4520edcc...')
#2 /home/eosquad/public_html/forums/system/Session/Session.php(91): session_start()
#3 /home/eosquad/public_html/forums/system/Theme/Theme.php(240): IPS\_Session::i()
#4 /home/eosquad/public_html/forums/system/Dispatcher/Standard.php(50): IPS\_Theme::i()
#5 /home/eosquad/public_html/forums/system/Dispatcher/Front.php(601): IPS\Dispatcher\_Standard::baseCss()
#6 /home/eosquad/public_html/forums/system/Dispatcher/Front.php(67): IPS\Dispatcher\_Front::baseCss()
#7 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(86): IPS\Dispatcher\_Front->init()
#8 /home/eosquad/public_html/forums/index.php(13): IPS\_Dispatcher::i()
#9 {main}
------------------------------------------------------------------------
