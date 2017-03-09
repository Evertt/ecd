<?php
/**
 * Basic Cake functionality.
 *
 * Handles loading of core files needed on every request
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (!defined('PHP5')) {
    define('PHP5', (PHP_VERSION >= 5));
}
if (!defined('E_DEPRECATED')) {
    define('E_DEPRECATED', 8192);
}
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

require_once CORE_PATH . 'cake' . DS . 'basics.php';
$TIME_START = getMicrotime();
require CORE_PATH . 'cake' . DS . 'config' . DS . 'paths.php';
require_once LIBS . 'object.php';
require_once LIBS . 'inflector.php';
require_once LIBS . 'configure.php';
require_once LIBS . 'set.php';
require_once LIBS . 'cache.php';
Configure::getInstance();
require_once CAKE . 'dispatcher.php';
