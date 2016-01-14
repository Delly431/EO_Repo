//<?php

class hook12 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'profile' => 
  array (
    0 => 
    array (
      'selector' => '#elProfileInfoColumn > div.ipsAreaBackground_light.ipsPad > div.cProfileSidebarBlock.ipsPad.ipsBox.ipsSpacer_bottom > ul.ipsDataList.ipsDataList_reducedSpacing.cProfileFields',
      'type' => 'add_inside_end',
      'content' => '{{if $member->bday_day AND $member->bday_month AND $member->bday_year}}
    <li class="ipsDataItem">
        <span class="ipsDataItem_generic ipsDataItem_size3 ipsType_break">
            <strong>
                {lang="age"}
            </strong>
        </span>
        <span class="ipsDataItem_generic">
            {$member->age()}
        </span>
    </li>
{{endif}} ',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */














}