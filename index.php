<?php
/*
  Plugin Name: Aktar's Multiple Choice Block
  Description: Aktar's Multiple Choice Block
  Version: 1.0
  Author: Aktar
  Author URI: https://aktaruzzaman.com/
*/
if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class AktarsMultipleChoiceBlock{
  function __construct(){
    add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
  }

  function adminAssets(){
    wp_enqueue_script('ournewblocktype',plugin_dir_url(__FILE__) . 'test.js', array('wp-blocks','wp-element'));
  }
}

$aktarsMultipleChoiceBlock = new AktarsMultipleChoiceBlock();