<?php
/** op-unit-develop:/Develop.class.php
 *
 * @created     2023-01-30
 * @version     1.0
 * @package     op-unit-develop
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */

 /** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP\UNIT;

/** use
 *
 */
use OP\IF_UNIT;
use OP\OP_CORE;
use OP\OP_CI;

/** Develop
 *
 * @created     2023-01-30
 * @version     1.0
 * @package     op-unit-develop
 * @author      Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright   Tomoaki Nagahara All right reserved.
 */
class Develop implements IF_UNIT
{
	use OP_CORE, OP_CI;
}
