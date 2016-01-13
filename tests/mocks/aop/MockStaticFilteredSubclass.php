<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2015, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace lithium\tests\mocks\aop;

class MockStaticFilteredSubclass extends \lithium\tests\mocks\aop\MockStaticFiltered {

	public static function childMethod() {
		return 'Working';
	}
}

?>