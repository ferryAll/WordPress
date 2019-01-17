<?php
class Monplugin_Page_Title
{
 public function __construct()
 {
 add_filter('pre_get_document_title', array($this, 'monplugin_change_my_title'), 20) ;
 }
 public function monplugin_change_my_title($title)
 {
 return $title;
 }
}