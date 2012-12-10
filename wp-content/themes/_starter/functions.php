<?php 

foreach (glob(TEMPLATEPATH . "/library/*.php") as $file) {
  include_once($file) ;
}