//<?php

class hook16 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'profile' => 
  array (
    0 => 
    array (
      'selector' => 'ul.cProfileFields:first',
      'type' => 'add_before',
      'content' => '{{if settings.nb_sec_gr_icons_profile_on and (settings.nb_sec_gr_icons_profile_groups == \'all\' or \IPS\Member::loggedIn()->inGroup(explode(\',\', \IPS\Settings::i()->nb_sec_gr_icons_profile_groups)))}}
	{{if $member->mgroup_others}}
		{{$otherGroups = array_filter(explode(\',\', $member->mgroup_others), function($v) use($member) { return ($v != null and $v != $member->member_group_id);});}}
		{{if settings.nb_sec_gr_icons_reorder_grs_on}}
			{{if settings.nb_sec_gr_icons_reorder_grs_prim}}
				{{$otherGroups[] = $member->member_group_id;}}
			{{endif}}
			{{$reorderGroups = array_unique(explode(\',\', settings.nb_sec_gr_icons_reorder_grs_grs));}}
			{{$otherGroups = array_merge(array_intersect($reorderGroups, $otherGroups), array_diff($otherGroups, $reorderGroups));}}
		{{endif}}
		{{$otherGroups = array_unique($otherGroups);}}
		{template="nbSecGroupIconsProfile" group="plugins" location="global" app="core" params="$member, $otherGroups"}
	{{endif}}
{{endif}}',
    ),
    1 => 
    array (
      'selector' => 'div.ipsWidget_inner.ipsPad > div.ipsType_center.ipsPad_half',
      'type' => 'add_class',
      'css_classes' => 
      array (
        0 => '{template="nbSecGroupIconsHidePrimary" group="plugins" location="global" app="core" params="$member, 1, null"}',
      ),
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */

}