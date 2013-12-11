@echo off

rem -------------------------------------------------------------
rem  PHPUnit command line script for Windows.
rem  This is the bootstrap script for running phpunit on Windows.
rem -------------------------------------------------------------

@setlocal

set BIN_PATH=%~dp0

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "%BIN_PATH%phpunit.php" %*

@endlocal
