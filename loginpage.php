<?php
//
//
//
$LOGINPAGE = true;

if (!defined('ENV_READ_CONFIG')) require_once(realpath(dirname(__FILE__).'/../include/config.php'));
if (!defined('ENV_READ_DEFINE')) require_once(realpath(ENV_HELPER_PATH.'/../include/env_define.php'));
require_once(realpath(ENV_HELPER_PATH.'/../include/opensim.mysql.php'));
require_once(realpath(ENV_HELPER_PATH.'/../include/env_lib.php'));

$status = opensim_check_db();

$GRID_STATUS	  = $status['grid_status'];
$NOW_ONLINE 	  = $status['now_online'];
$HG_ONLINE 	      = $status['hg_online'];
$LASTMONTH_ONLINE = $status['lastmonth_online'];
$USER_COUNT 	  = $status['user_count'];
$REGION_COUNT 	  = $status['region_count'];

include(dirname(__FILE__).'/loginscreen.php');

