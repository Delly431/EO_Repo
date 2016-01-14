//<?php

class hook11 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'postContainer' => 
  array (
    0 => 
    array (
      'selector' => 'article[itemtype=\'http://schema.org/Answer\'] > aside.ipsComment_author.cAuthorPane.ipsColumn.ipsColumn_medium > ul.cAuthorPane_info.ipsList_reset > li.ipsType_light',
      'type' => 'add_after',
      'content' => '{{if $comment->author()->bday_day AND $comment->author()->bday_month AND $comment->author()->bday_year}}
	<li class="ipsType_light">{lang="age"}: {$comment->author()->age()}</li>
{{endif}}',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */
















}