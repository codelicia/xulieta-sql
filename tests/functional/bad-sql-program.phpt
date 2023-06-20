--TEST--
Report failure with an invalid sql query
--FILE--
<?php

$checkRunner = require __DIR__ . '/init.php';

$checkRunner('tests/assets/bad-sql-program.md');

--EXPECTF--
Finding documentation files on tests/assets/bad-sql-program.md

 --> tests/assets/bad-sql-program.md
 1 |   SELECT
   |  ___^
 2 | |     *
 3 | | FROM users WHERE id = 1; }
   | |
     = note: Unexpected character. }


     Operation failed!