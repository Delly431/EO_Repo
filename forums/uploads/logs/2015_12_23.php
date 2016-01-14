<?php exit; ?>

Wed, 23 Dec 2015 02:05:07 +0000 (Severity: 2)
64.234.254.55 - http://exiledorder.com/forums/
Exception
0: DateTimeZone::__construct(): Unknown or bad timezone (Etc/GMT 7)
#0 /home/eosquad/public_html/forums/applications/calendar/sources/Date/Date.php(96): DateTimeZone->__construct('Etc/GMT 7')
#1 /home/eosquad/public_html/forums/applications/calendar/widgets/upcomingEvents.php(134): IPS\calendar\_Date::getDate()
#2 /home/eosquad/public_html/forums/system/Widget/Widget.php(755): IPS\calendar\widgets\_upcomingEvents->render()
#3 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(11576): IPS\_Widget->__toString()
#4 [internal function]: IPS\Theme\class_core_front_global->widgetContainer('header', 'horizontal')
#5 /home/eosquad/public_html/forums/system/Theme/SandboxedTemplate.php(57): call_user_func_array(Array, Array)
#6 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(4552): IPS\Theme\_SandboxedTemplate->__call('widgetContainer', Array)
#7 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(4552): IPS\Theme\SandboxedTemplate->widgetContainer('header', 'horizontal')
#8 [internal function]: IPS\Theme\class_core_front_global->globalTemplate('aa4de68a7807180...', '\n\n\n<div class='...', Array)
#9 /home/eosquad/public_html/forums/system/Theme/SandboxedTemplate.php(57): call_user_func_array(Array, Array)
#10 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(149): IPS\Theme\_SandboxedTemplate->__call('globalTemplate', Array)
#11 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(149): IPS\Theme\SandboxedTemplate->globalTemplate('aa4de68a7807180...', '\n\n\n<div class='...', Array)
#12 /home/eosquad/public_html/forums/system/Dispatcher/Standard.php(101): IPS\_Dispatcher->finish()
#13 /home/eosquad/public_html/forums/system/Dispatcher/Front.php(520): IPS\Dispatcher\_Standard->finish()
#14 /home/eosquad/public_html/forums/init.php(434) : eval()'d code(51): IPS\Dispatcher\_Front->finish()
#15 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(131): IPS\Dispatcher\chat_hook_tabNewWindow->finish()
#16 /home/eosquad/public_html/forums/index.php(13): IPS\_Dispatcher->run()
#17 {main}
------------------------------------------------------------------------
Wed, 23 Dec 2015 02:07:54 +0000 (Severity: 2)
64.234.254.55 - http://exiledorder.com/forums/
Exception
0: DateTimeZone::__construct(): Unknown or bad timezone (Etc/GMT 7)
#0 /home/eosquad/public_html/forums/applications/calendar/sources/Date/Date.php(96): DateTimeZone->__construct('Etc/GMT 7')
#1 /home/eosquad/public_html/forums/applications/calendar/widgets/upcomingEvents.php(134): IPS\calendar\_Date::getDate()
#2 /home/eosquad/public_html/forums/system/Widget/Widget.php(755): IPS\calendar\widgets\_upcomingEvents->render()
#3 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(11451): IPS\_Widget->__toString()
#4 [internal function]: IPS\Theme\class_core_front_global->widgetContainer('header', 'horizontal')
#5 /home/eosquad/public_html/forums/system/Theme/SandboxedTemplate.php(57): call_user_func_array(Array, Array)
#6 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(4515): IPS\Theme\_SandboxedTemplate->__call('widgetContainer', Array)
#7 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(4515): IPS\Theme\SandboxedTemplate->widgetContainer('header', 'horizontal')
#8 [internal function]: IPS\Theme\class_core_front_global->globalTemplate('2f85a4e4591096a...', '\n\n\n<div class='...', Array)
#9 /home/eosquad/public_html/forums/system/Theme/SandboxedTemplate.php(57): call_user_func_array(Array, Array)
#10 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(149): IPS\Theme\_SandboxedTemplate->__call('globalTemplate', Array)
#11 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(149): IPS\Theme\SandboxedTemplate->globalTemplate('2f85a4e4591096a...', '\n\n\n<div class='...', Array)
#12 /home/eosquad/public_html/forums/system/Dispatcher/Standard.php(101): IPS\_Dispatcher->finish()
#13 /home/eosquad/public_html/forums/system/Dispatcher/Front.php(520): IPS\Dispatcher\_Standard->finish()
#14 /home/eosquad/public_html/forums/init.php(434) : eval()'d code(51): IPS\Dispatcher\_Front->finish()
#15 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(131): IPS\Dispatcher\chat_hook_tabNewWindow->finish()
#16 /home/eosquad/public_html/forums/index.php(13): IPS\_Dispatcher->run()
#17 {main}
------------------------------------------------------------------------
Wed, 23 Dec 2015 02:09:00 +0000 (Severity: 2)
64.234.254.55 - http://exiledorder.com/forums/index.php?/topic/14-new-website/
Exception
0: DateTimeZone::__construct(): Unknown or bad timezone ()
#0 /home/eosquad/public_html/forums/system/Member/Member.php(965): DateTimeZone->__construct('')
#1 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(1533): IPS\_Member->age()
#2 [internal function]: IPS\Theme\class_forums_front_topics->postContainer(Object(IPS\forums\Topic), Object(IPS\forums\Topic\Post), Array)
#3 /home/eosquad/public_html/forums/system/Theme/SandboxedTemplate.php(57): call_user_func_array(Array, Array)
#4 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(3442): IPS\Theme\_SandboxedTemplate->__call('postContainer', Array)
#5 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(3442): IPS\Theme\SandboxedTemplate->postContainer(Object(IPS\forums\Topic), Object(IPS\forums\Topic\Post), Array)
#6 [internal function]: IPS\Theme\class_forums_front_topics->topic(Object(IPS\forums\Topic), Array, NULL, Array, Object(IPS\forums\Topic), NULL, Array)
#7 /home/eosquad/public_html/forums/system/Theme/SandboxedTemplate.php(57): call_user_func_array(Array, Array)
#8 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/topic.php(260): IPS\Theme\_SandboxedTemplate->__call('topic', Array)
#9 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/topic.php(260): IPS\Theme\SandboxedTemplate->topic(Object(IPS\forums\Topic), Array, NULL, Array, Object(IPS\forums\Topic), NULL, Array)
#10 /home/eosquad/public_html/forums/system/Dispatcher/Controller.php(94): IPS\forums\modules\front\forums\_topic->manage()
#11 /home/eosquad/public_html/forums/system/Content/Controller.php(46): IPS\Dispatcher\_Controller->execute()
#12 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/topic.php(40): IPS\Content\_Controller->execute()
#13 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(129): IPS\forums\modules\front\forums\_topic->execute()
#14 /home/eosquad/public_html/forums/index.php(13): IPS\_Dispatcher->run()
#15 {main}
------------------------------------------------------------------------
Wed, 23 Dec 2015 02:09:07 +0000 (Severity: 2)
64.234.254.55 - http://exiledorder.com/forums/index.php?/topic/41-december-promotions/
Exception
0: DateTimeZone::__construct(): Unknown or bad timezone ()
#0 /home/eosquad/public_html/forums/system/Member/Member.php(965): DateTimeZone->__construct('')
#1 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(1533): IPS\_Member->age()
#2 [internal function]: IPS\Theme\class_forums_front_topics->postContainer(Object(IPS\forums\Topic), Object(IPS\forums\Topic\Post), Array)
#3 /home/eosquad/public_html/forums/system/Theme/SandboxedTemplate.php(57): call_user_func_array(Array, Array)
#4 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(3442): IPS\Theme\_SandboxedTemplate->__call('postContainer', Array)
#5 /home/eosquad/public_html/forums/system/Theme/Theme.php(692) : eval()'d code(3442): IPS\Theme\SandboxedTemplate->postContainer(Object(IPS\forums\Topic), Object(IPS\forums\Topic\Post), Array)
#6 [internal function]: IPS\Theme\class_forums_front_topics->topic(Object(IPS\forums\Topic), Array, NULL, Array, NULL, NULL, Array)
#7 /home/eosquad/public_html/forums/system/Theme/SandboxedTemplate.php(57): call_user_func_array(Array, Array)
#8 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/topic.php(260): IPS\Theme\_SandboxedTemplate->__call('topic', Array)
#9 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/topic.php(260): IPS\Theme\SandboxedTemplate->topic(Object(IPS\forums\Topic), Array, NULL, Array, NULL, NULL, Array)
#10 /home/eosquad/public_html/forums/system/Dispatcher/Controller.php(94): IPS\forums\modules\front\forums\_topic->manage()
#11 /home/eosquad/public_html/forums/system/Content/Controller.php(46): IPS\Dispatcher\_Controller->execute()
#12 /home/eosquad/public_html/forums/applications/forums/modules/front/forums/topic.php(40): IPS\Content\_Controller->execute()
#13 /home/eosquad/public_html/forums/system/Dispatcher/Dispatcher.php(129): IPS\forums\modules\front\forums\_topic->execute()
#14 /home/eosquad/public_html/forums/index.php(13): IPS\_Dispatcher->run()
#15 {main}
------------------------------------------------------------------------
