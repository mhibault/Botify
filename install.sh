#!/bin/sh
composer install
cat database/db/town.sql | sqlite3 ../test_botify.db