<?php
/**
 * Short description for file.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/view/1196/Testing>
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/view/1196/Testing CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.4667
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */

/**
 * Short description for class.
 *
 * @package       cake
 * @subpackage    cake.tests.fixtures
 */
class ItemsPortfolioFixture extends CakeTestFixture {

/**
 * name property
 *
 * @var string 'ItemsPortfolio'
 * @access public
 */
	var $name = 'ItemsPortfolio';

/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'item_id' => array('type' => 'integer', 'null' => false),
		'portfolio_id' => array('type' => 'integer', 'null' => false)
	);

/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('item_id' => 1, 'portfolio_id' => 1),
		array('item_id' => 2, 'portfolio_id' => 2),
		array('item_id' => 3, 'portfolio_id' => 1),
		array('item_id' => 4, 'portfolio_id' => 1),
		array('item_id' => 5, 'portfolio_id' => 1),
		array('item_id' => 6, 'portfolio_id' => 2)
	);
}
