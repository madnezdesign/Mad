<?php
//
// PHASE: BOOTSTRAP
//
define('MAD_INSTALL_PATH', dirname(__FILE__));
define('MAD_SITE_PATH', MAD_INSTALL_PATH . '/site');

require(MAD_INSTALL_PATH.'/src/CMad/bootstrap.php');

$mad = CMad::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$mad->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$mad->ThemeEngineRender();