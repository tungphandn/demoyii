<?php
/**
 * params-local.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 5:59 PM
 *
 *
 * ANY CONFIGURATION OPTIONS HERE WILL REPLACE THOSE INCLUDED ON THE params-env.php file!!!
 * It holds your local configuration settings.
 *
 * Replace following tokens for your local correspondent configuration data
 *
 * {DATABASE-NAME} ->   database name
 * {DATABASE-HOST} -> database server host name or ip address
 * {DATABASE-USERNAME} -> user name access
 * {DATABASE-PASSWORD} -> user password
 *
 * {DATABASE-TEST-NAME} ->   Test database name
 * {DATABASE-TEST-HOST} -> Test database server host name or ip address
 * {DATABASE-USERNAME} -> Test user name access
 * {DATABASE-PASSWORD} -> Test user password
 */
return array(
	'env.code' => 'private',
	// DB connection configurations
	'db.name' => '',
	'db.connectionString' => 'mysql:host=localhost;dbname=clevertech',
	'db.username' => 'root',
	'db.password' => 'root',
//
//	// test database {
	'testdb.name' => '',
	'testdb.connectionString' => 'mysql:host=localhost;dbname=clevertech_test',
	'testdb.username' => 'root',
	'testdb.password' => 'root',

);