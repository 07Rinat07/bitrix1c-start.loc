<?php

use Bitrix\Main\DB\MysqliConnection;

return array (
  'utf_mode' => 
  array (
    'value' => true,
    'readonly' => true,
  ),
  'cache_flags' => 
  array (
    'value' => 
    array (
      'config_options' => 3600.0,
      'site_domain' => 3600.0,
    ),
    'readonly' => false,
  ),
  'cookies' => 
  array (
    'value' => 
    array (
      'secure' => false,
      'http_only' => true,
    ),
    'readonly' => false,
  ),
  'exception_handling' => 
  array (
    'value' => 
    array (
      'debug' => true,
      'handled_errors_types' => 4437,
      'exception_errors_types' => 4437,
      'ignore_silence' => false,
      'assertion_throws_exception' => true,
      'assertion_error_type' => 256,
      'log' => array(
          'settings' =>
              array(
                  'file' => '/home/bitrix/__php_error.log',
                  'log_size' => 1000000,
              ),
      ),
    ),
    'readonly' => false,
  ),
  'connections' => 
  array (
    'value' => 
    array (
      'default' => 
      array (
        'className' => MysqliConnection::class,
        'host' => 'localhost',
        'database' => 'bitrix1c',
        'login' => 'dev',
        'password' => 'newpassword',
        'options' => 2.0,
      ),
    ),
    'readonly' => true,
  ),
  'crypto' => 
  array (
    'value' => 
    array (
      'crypto_key' => '30e26f67b0cace3ce06bda8c2b356436',
    ),
    'readonly' => true,
  ),
);
