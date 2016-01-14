//<?php

class hook15 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'postContainer' => 
  array (
    0 => 
    array (
      'selector' => '.cAuthorPane_photo + li + li',
      'type' => 'add_after',
      'content' => '{{if settings.nb_sec_gr_icons_post_on and (settings.nb_sec_gr_icons_post_forums == 0 or in_array($item->forum_id, explode(\',\', settings.nb_sec_gr_icons_post_forums))) and (settings.nb_sec_gr_icons_post_groups == \'all\' or \IPS\Member::loggedIn()->inGroup(explode(\',\', \IPS\Settings::i()->nb_sec_gr_icons_post_groups)))}}
	{{if $comment->author()->mgroup_others}}
		{{$position = \'\';}}
		{{if settings.nb_sec_gr_icons_reorder_grs_on}}
			{{if settings.nb_sec_gr_icons_reorder_grs_prim or !\IPS\Member\Group::load( $comment->author()->member_group_id )->g_icon}}
				{{$position = \'cAuthorPane_photoLi\';}}
			{{else}}
				{{$position = \'cAuthorPane_photoLiLi\';}}
			{{endif}}
		{{else}}
			{{if \IPS\Member\Group::load( $comment->author()->member_group_id )->g_icon}}
				{{$position = \'cAuthorPane_photoLiLi\';}}
			{{else}}
				{{$position = \'cAuthorPane_photoLi\';}}
			{{endif}}	
		{{endif}}
		{{if $position == \'cAuthorPane_photoLiLi\'}}
			{{$otherGroups = array_filter(explode(\',\', $comment->author()->mgroup_others), function($v) use($comment) { return ($v != null and $v != $comment->author()->member_group_id);});}}
			{{if settings.nb_sec_gr_icons_reorder_grs_on}}
				{{if settings.nb_sec_gr_icons_reorder_grs_prim}}
					{{$otherGroups[] = $comment->author()->member_group_id;}}
				{{endif}}
				{{$reorderGroups = array_unique(explode(\',\', settings.nb_sec_gr_icons_reorder_grs_grs));}}
				{{$otherGroups = array_merge(array_intersect($reorderGroups, $otherGroups), array_diff($otherGroups, $reorderGroups));}}
			{{endif}}
			{{$otherGroups = array_unique($otherGroups);}}		
			{template="nbSecGroupIconsPost" group="plugins" location="global" app="core" params="$item, $comment, $otherGroups"}
		{{endif}}
	{{endif}}
{{endif}}',
    ),
    1 => 
    array (
      'selector' => '.cAuthorPane_photo + li',
      'type' => 'add_after',
      'content' => '{{if settings.nb_sec_gr_icons_post_on and (settings.nb_sec_gr_icons_post_forums == 0 or in_array($item->forum_id, explode(\',\', settings.nb_sec_gr_icons_post_forums))) and (settings.nb_sec_gr_icons_post_groups == \'all\' or \IPS\Member::loggedIn()->inGroup(explode(\',\', \IPS\Settings::i()->nb_sec_gr_icons_post_groups)))}}
	{{if $comment->author()->mgroup_others}}
		{{$position = \'\';}}
		{{if settings.nb_sec_gr_icons_reorder_grs_on}}
			{{if settings.nb_sec_gr_icons_reorder_grs_prim or !\IPS\Member\Group::load( $comment->author()->member_group_id )->g_icon}}
				{{$position = \'cAuthorPane_photoLi\';}}
			{{else}}
				{{$position = \'cAuthorPane_photoLiLi\';}}
			{{endif}}
		{{else}}
			{{if \IPS\Member\Group::load( $comment->author()->member_group_id )->g_icon}}
				{{$position = \'cAuthorPane_photoLiLi\';}}
			{{else}}
				{{$position = \'cAuthorPane_photoLi\';}}
			{{endif}}	
		{{endif}}
		{{if $position == \'cAuthorPane_photoLi\'}}
			{{$otherGroups = array_filter(explode(\',\', $comment->author()->mgroup_others), function($v) use($comment) { return ($v != null and $v != $comment->author()->member_group_id);});}}
			{{if settings.nb_sec_gr_icons_reorder_grs_on}}
				{{if settings.nb_sec_gr_icons_reorder_grs_prim}}
					{{$otherGroups[] = $comment->author()->member_group_id;}}
				{{endif}}
				{{$reorderGroups = array_unique(explode(\',\', settings.nb_sec_gr_icons_reorder_grs_grs));}}
				{{$otherGroups = array_merge(array_intersect($reorderGroups, $otherGroups), array_diff($otherGroups, $reorderGroups));}}
			{{endif}}
			{{$otherGroups = array_unique($otherGroups);}}		
			{template="nbSecGroupIconsPost" group="plugins" location="global" app="core" params="$item, $comment, $otherGroups"}
		{{endif}}
	{{endif}}
{{endif}}',
    ),
    2 => 
    array (
      'selector' => '.cAuthorGroupIcon',
      'type' => 'add_class',
      'css_classes' => 
      array (
        0 => '{template="nbSecGroupIconsHidePrimary" group="plugins" location="global" app="core" params="$comment, 2, $item"}',
      ),
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */

}