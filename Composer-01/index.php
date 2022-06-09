<?php

require_once "vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('LOG_DE_TESTE');
$log->pushHandler(new StreamHandler('meu-log.log', Logger::WARNING));

// add records to the log
$log->addWarning('log-1');
$log->addError('erro-2');