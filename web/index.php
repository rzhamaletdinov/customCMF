<?php
require_once(__DIR__.'/../core/common.php');

/*!!!Disable on PRODUCTION!!!*/
config::devEnvironment(true);

Application::run();
