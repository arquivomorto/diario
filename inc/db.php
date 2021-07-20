<?php
require 'vendor/autoload.php';

use Medoo\Medoo;

return new Medoo([
	'database_type' => 'sqlite',
	'database_file' => './db/db.db'
]);
