<?php
/**
 * Core Loader
 *
 * @package AhlaNews
 */


if ( !defined( 'ABSPATH' ) ) exit;


function _ahla_core_loader()
{
// This file path
$fpath = realpath( dirname( __FILE__ ) );

require_once $fpath . '/define.php';
require_once $fpath . '/actions.php';
require_once $fpath . '/hooks.php';
}

// Load files
_ahla_core_loader();
