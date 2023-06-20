--TEST--
Report failure with an invalid DDL
--FILE--
<?php

$checkRunner = require __DIR__ . '/init.php';

$checkRunner('tests/assets/bad-ddl-program.md');

--EXPECTF--
Finding documentation files on tests/assets/bad-ddl-program.md

 --> tests/assets/bad-ddl-program.md
 1 |   CREATE TABLE users (
   |  __________^
 2 | |     id SERIAL PRIMARY KEY,
 3 | |     name VARCHAR(255),
 4 | |     email VARCHAR(255),
 5 | |     password VARCHAR(255),
 6 | |
   | |
     = note: A symbol name was expected! A reserved keyword can not be used as a column name without backquotes. CHECK


     Operation failed!