<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Tags {

  /**
   * Constructor, sets up dependency classes
   * @access public
   */
  public function __construct () {}

  private function fixAttribs($attribs) {
    if (is_string($attribs)) {
      $attribs = array('class' => $attribs);
    }

    $attribs_html = '';
    foreach ($attribs as $key => $value) {
      if (is_array($value)) {
        $value = json_encode($value);
        $attribs_html .= " {$key}='{$value}'";
      } else if (mb_strlen($value) > 0) {
        $attribs_html .= " {$key}=\"{$value}\"";
      }
    }

    return $attribs_html;
  }

  // Just open (img, br)
  private function halftag ($tag, $content, $attrib) {
    $attrib = $this->fixAttribs($attrib);
    return "<{$tag}{$attrib}>{$content}";
  }
  
  // Open and Close tag.
  private function full ($tag, $content, $attrib) {
    $attrib = $this->fixAttribs($attrib);
    return "<{$tag}{$attrib}>{$content}</{$tag}>";
  }

  // Todo, maybe just have 1 function that you pass in the tag for?
  public function a ($content, $attrib = array()) {
    if (isset($attrib['href'])) {
      // If url is outside of raptr domain, then target=_blank
      $base_host = parse_url($base_url(), PHP_URL_HOST);
      $target_host = parse_url($attrib['href'], PHP_URL_HOST);
      $target_scheme = parse_url($attrib['href'], PHP_URL_SCHEME);
      if ((!empty($target_host) && (strpos($target_host, $base_host) === false)) &&
           $target_scheme != 'raptr') {
        // noreferrer breaks the window.opener.location.replace attack vector on HTML5 browsers. Please see:
        /** http://blog.whatever.io/2015/03/07/on-the-security-implications-of-window-opener-location-replace/ **/
        $attrib['rel'] = 'nofollow noreferrer'; 
        if (!isset($attrib['target'])) {
          $attrib['target'] = '_blank';
        }
      } else if ($target_scheme === 'raptr') {
        unset($attrib['target']); // no target=_blank for raptr protocol
      }
    }
    return $this->full('a', $content, $attrib);
  }

  public function button ($content, $attrib = array()) {return $this->full('button', $content, $attrib);}
  public function option ($content, $attrib = array()) {return $this->full('option', $content, $attrib);}
  public function li ($content, $attrib = array()) {return $this->full('li', $content, $attrib);}
  public function dl ($content, $attrib = array()) {return $this->full('dl', $content, $attrib);}
  public function dt ($content, $attrib = array()) {return $this->full('dt', $content, $attrib);}
  public function dd ($content, $attrib = array()) {return $this->full('dd', $content, $attrib);}
  public function div ($content, $attrib = array()) {return $this->full('div', $content, $attrib);}
  public function ul ($content, $attrib = array()) {return $this->full('ul', $content, $attrib);}
  public function ol ($content, $attrib = array()) {return $this->full('ol', $content, $attrib);}
  public function span ($content, $attrib = array()) {return $this->full('span', $content, $attrib);}
  public function p ($content, $attrib = array()) {return $this->full('p', $content, $attrib);}
  public function h1 ($content, $attrib = array()) {return $this->full('h1', $content, $attrib);}
  public function h2 ($content, $attrib = array()) {return $this->full('h2', $content, $attrib);}
  public function h3 ($content, $attrib = array()) {return $this->full('h3', $content, $attrib);}
  public function h4 ($content, $attrib = array()) {return $this->full('h4', $content, $attrib);}
  public function h5 ($content, $attrib = array()) {return $this->full('h5', $content, $attrib);}
  public function strong ($content, $attrib = array()) {return $this->full('strong', $content, $attrib);}
  public function em ($content, $attrib = array()) {return $this->full('em', $content, $attrib);}
  public function iframe ($content, $attrib = array()) {return $this->full('iframe', $content, $attrib);}
  public function input ($content, $attrib = array()) {return $this->halftag('input', $content, $attrib);}
  public function img ($content, $attrib = array()) {return $this->halftag('img', $content, $attrib);}
  public function label ($content, $attrib = array()) {return $this->full('label', $content, $attrib);}
  public function table ($content, $attrib = array()) {return $this->full('table', $content, $attrib);}
  public function tr ($content, $attrib = array()) {return $this->full('tr', $content, $attrib);}
  public function th ($content, $attrib = array()) {return $this->full('th', $content, $attrib);}
  public function td ($content, $attrib = array()) {return $this->full('td', $content, $attrib);}
  public function textarea ($content, $attrib = array()) {return $this->full('textarea', $content, $attrib);}
  public function form ($content, $attrib = array()) {return $this->full('form', $content, $attrib);}
  public function select ($content, $attrib = array()) {return $this->full('select', $content, $attrib);}
  public function object($content, $attrib = array()) {return $this->full('object', $content, $attrib);}
  public function param($content, $attrib = array()) {return $this->halftag('param', $content, $attrib);}
  public function embed ($content, $attrib = array()) {return $this->full('embed', $content, $attrib);}
  public function script ($content, $attrib = array()) {return $this->full('script', $content, $attrib);}
  public function section ($content, $attrib = array()) {return $this->full('section', $content, $attrib);}
  public function main ($content, $attrib = array()) {return $this->full('main', $content, $attrib);}
  public function header ($content, $attrib = array()) {return $this->full('header', $content, $attrib);}
  public function pre ($content, $attrib = array()) {return $this->full('pre', $content, $attrib);}
  public function hr ($content, $attrib = array()) {return $this->halftag('hr', $content, $attrib);}
  public function article ($content, $attrib = array()) {return $this->full('article', $content, $attrib);}
  public function link ($content, $attrib = array()) {return $this->halftag('link', $content, $attrib);}
}