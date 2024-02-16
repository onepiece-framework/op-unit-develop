<?php
/** op-unit-develop:/ci/Develop.php
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
namespace OP;

/* @var $ci UNIT\CI */
$ci = OP::Unit('CI');

//	Test
$result =  null;
$args   = ['a','b'];
$ci->Set('Test', $result, $args);

//	...
return $ci->GenerateConfig();
