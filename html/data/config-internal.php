<?php
return [
  'database' => [
    'host' => 'espocrm-mariadb',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espocrm-mariadb',
    'user' => 'root',
    'password' => '1',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => '12345',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1706387207.046771,
  'passwordSalt' => '48a13e1a0abc3cd9',
  'cryptKey' => 'af3fb70f89b52be74a27809143c84c91',
  'hashSecretKey' => '64eb152f835e7b6106e237c24c934985',
  'defaultPermissions' => [
    'user' => 33,
    'group' => 33
  ],
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '11.2.2',
  'instanceId' => '86499f44-28d9-4d57-b0d7-cfc1911b76e0',
  'apiSecretKeys' => (object) []
];
