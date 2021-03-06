<?php defined('_JEXEC') or die;
/**
 * @version		$Id$
 * @package		HelloWorld
 * @subpackage	mod_helloworld
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

require_once dirname(__FILE__).'/helper.php';

$hello = modHelloWorldHelper::getHello();

require JModuleHelper::getLayoutPath('mod_helloworld', $params->get('layout', 'default'));
