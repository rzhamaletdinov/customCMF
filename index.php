<?php
require_once(dirname(__FILE__)."/core/common.php");

/*!!!Disable on PRODUCTION!!!*/
config::devEnvironment(true);

Application::run();
?>
