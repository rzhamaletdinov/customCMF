<?php
/*
 * Core
 */
require_once(dirname(__FILE__)."/config.php");
require_once(dirname(__FILE__)."/mysql.php");
require_once(dirname(__FILE__)."/app.php");
require_once(dirname(__FILE__)."/helpers.php");
require_once(dirname(__FILE__)."/template.php");

/*
 * Modes
 *
 * Add new modes here
 */
require_once($_SERVER['DOCUMENT_ROOT'].config::MODE_DIR."/index.php");
require_once($_SERVER['DOCUMENT_ROOT'].config::MODE_DIR."/about.php");
require_once($_SERVER['DOCUMENT_ROOT'].config::MODE_DIR."/rentform.php");
require_once($_SERVER['DOCUMENT_ROOT'].config::MODE_DIR."/404.php");
?>