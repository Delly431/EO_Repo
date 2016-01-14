<?php exit; ?>

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
