<?php 
/** @file
 * @brief This script runs the PHPUnit tests on a single test file
 * @cond
 */
require '../lib/autoload.inc.php';
// Get the desired test
$test = strip_tags($_REQUEST['test']);

// Run the test
// This fakes the command line parameters to phpunit.phar
echo 'Test: ' . $_REQUEST['test'] . "\n";
$argv[] = "phpunit.phar";
//$argv[] = '--coverage-html';
//$argv[] = __DIR__ . '/html';
if($test === 'all.php') {
	$argv[] = __DIR__ . '/tests';
} else {
	$argv[] = $test;
}
$_SERVER['argv'] = $argv;
include __DIR__ . '/phpunit.phar';
/// @endcond
?>
