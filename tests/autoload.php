<?php
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . dirname(__FILE__) . '/../app' . PATH_SEPARATOR . dirname(__FILE__));

//Set customer memory limit
// init_set('memory_limit', '512M');

//Include Magento libraries
// require_once 'Mage.php';

//Start the Magento application
// Mage::app('default');

//Avoid the issues "Headers already send"
// session_start();
