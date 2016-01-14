<?php exit; ?>

Thu, 07 Jan 2016 04:50:38 +0000 (Severity: 2)
74.68.48.230 - http://exiledorder.com/forums/
UnderflowException
0: 
#0 /home/eosquad/public_html/forums/applications/core/tasks/bulkmail.php(35): IPS\Db\_Select->first()
#1 /home/eosquad/public_html/forums/system/Task/Task.php(172): IPS\core\tasks\_bulkmail->execute()
#2 /home/eosquad/public_html/forums/system/Task/Task.php(141): IPS\_Task->run()
#3 /home/eosquad/public_html/forums/system/Dispatcher/Standard.php(304): IPS\_Task->runAndLog()
#4 [internal function]: IPS\Dispatcher\_Standard->__destruct()
#5 {main}
------------------------------------------------------------------------
