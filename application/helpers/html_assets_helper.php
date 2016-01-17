<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('buildStyleAssets')) {
 function buildStyleAssets($css_assets) {
  $tags = new Tags(); 

  $link_tags = '';
   foreach ($css_assets as $asset) {
    $link_tags .= $tags->link('', array(
      'rel' => 'stylesheet',
      'href' => asset_url($asset),
      'type' => 'text/css'
    ));
   }
 
   return $link_tags;
 }
}

if (!function_exists('buildScriptAssets')) {
 function buildScriptAssets($js_assets) {
  $tags = new Tags(); 

  $script_tags = '';
   foreach ($js_assets as $asset) {
    $script_tags .= $tags->script('', array(
      'src' => asset_url($asset),
      'type' => 'text/javascript'
    ));
   }
 
   return $script_tags;
 }
}