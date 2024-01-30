<?php
// Constants are variables that will never change in the application
// Convention: all uppercase, no dollar stream_get_line
// Global variables and can be access everywhere.
// Mostly use in configuration files and environment variables.

define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

echo APP_NAME; // My App

echo APP_VERSION; // 1.0.0

const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

echo DB_NAME, DB_HOST;  // mydblocalhost


function run()
{
    echo APP_NAME; // My App
    echo DB_NAME, DB_HOST; // mydblocalhost
}

run();