//<?php

class hook9 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'postContainer' => 
  array (
    0 => 
    array (
      'selector' => 'article[itemtype=\'http://schema.org/Answer\'] > aside > h3[itemprop=\'creator\'][itemtype=\'http://schema.org/Person\'] > strong[itemprop=\'name\']',
      'type' => 'add_before',
      'content' => '{{if $comment->author()->isOnline()}} <span class="fa fa-circle ipsOnlineStatus_online" style="position: relative; left: 1px; font-size: 11px; top: -3px;" data-ipsTooltip title="{lang="online_now" sprintf="$comment->author()->name"}"></span>{{else}}<span class="fa fa-circle ipsOnlineStatus_offline" style="position: relative; left: 1px; font-size: 11px; top: -3px;" data-ipsTooltip title="{lang="offline_now" sprintf="$comment->author()->name"}"></span>{{endif}}'
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */




}