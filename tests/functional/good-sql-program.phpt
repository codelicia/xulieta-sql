--TEST--
Report success with a valid sql code
--FILE--
<?php

$checkRunner = require __DIR__ . '/init.php';

$checkRunner('tests/assets/good-sql-program.md');

--EXPECTF--
Finding documentation files on tests/assets/good-sql-program.md


     Everything is OK!
